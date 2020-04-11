<?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');

  $id =$_GET['id'];
  $query ="SELECT * FROM  usuarios WHERE id=$id LIMIT 1";
  $consulta=mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_fetch_array($consulta);
		if ($linhas2>=1) { }
  ?>

  <section id="mu-hero">
  </section>
  
  <div class="container">
  <!-- aqui sempre conteudo -->


<div class="row">

</div>



  <div id="main" class="container-fluid">
                             <h3 class="page-header">Visualizar dados do usuário <?php echo $linhas2['id'];?> </h3>

                             <div class="row">
                            <div class="col-md-4">
                              <p><h3><span class="badge badge-secondary">NOME</span></h3></p>
                              <p><?php echo $linhas2['nome'];?></p>
                            </div>
                          
	<div class="col-md-4">
      <p><h3><span class="badge badge-secondary">EMAIL</span></h3></p>
  	  <p><?php echo $linhas2['email'];?></p>
    </div>
	
	<div class="col-md-4">
      <p><h3><span class="badge badge-secondary">LOGIN</span></h3></p>
  	  <p><?php echo $linhas2['loginas'];?></p>
    </div>

    <div class="col-md-4">
      <p><h3><span class="badge badge-secondary">CADASTRADO</span></h3></p>
  	  <p><?php echo $linhas2['created'];?></p>
    </div>
	
	<div class="col-md-4">
      <p><h3><span class="badge badge-secondary">MODIFICADO</span></h3></p>
  	  <p><?php echo $linhas2['modified'];?>8</p>
    </div>
	
	<div class="col-md-4">
      <p><h3><span class="badge badge-secondary">NÍVEL DE ACESSO</span></h3></p>
      <p><?php 
      
      if($linhas2['nivel_acesso_id']==1 ) 
      { echo "Administrador" ;} 
      
      else { echo "Usúario" ;};
      
      ?></p>
    </div>
	
   
 
    <div class="col-md-8">
      <p><strong>Campo Dez</strong></p>
  	  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	  In bibendum nunc urna, at vestibulum neque pellentesque eget. 
	  Maecenas lacinia velit ante, vitae fermentum ex interdum et. 
	  In vel sollicitudin leo, id fermentum augue. </p>
    </div>                

  
 
 </div>
 
 <hr/>
 <div id="actions" class="row">
  <div class="col-md-12">
    <a href="listausuario.php" class="btn btn-primary">Voltar</a>
    <a href="editusuarios.php?id=<?php echo $linhas2['id']?>" class="btn btn-warning">Editar</a>
    <a href="../processa/deluser.php?id=<?php echo $linhas2['id']?>" class="btn btn-danger">Excluir</a>
  </div>
 </div>



 



<!-- fim do contéudo-->
</div>





<?php 

include_once('footer.php');


?>