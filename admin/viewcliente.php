<?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');

  $id =$_GET['id'];
  $query ="SELECT * FROM  clientes WHERE id=$id LIMIT 1";
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
                             <h3 class="page-header"> <?php echo $linhas2['fantasia'];?> </h3>

                             <div class="row">
                            <div class="col-md-4">
                              <p><h3><span class="badge badge-secondary">NOME</span></h3></p>
                              <p><?php echo $linhas2['razao'];?></p>
                            </div>
                          
	<div class="col-md-4">
      <p><h3><span class="badge badge-secondary">EMAIL</span></h3></p>
  	  <p><?php echo $linhas2['email'];?></p>
    </div>
	
	<div class="col-md-4">
      <p><h3><span class="badge badge-secondary">CNPJ</span></h3></p>
  	  <p><?php echo $linhas2['cnpj'];?></p>
    </div>

    <div class="col-md-4">
      <p><h3><span class="badge badge-secondary">CADASTRADO</span></h3></p>
  	  <p><?php echo $linhas2['created'];?></p>
    </div>
	
	<div class="col-md-4">
      <p><h3><span class="badge badge-secondary">MODIFICADO</span></h3></p>
  	  <p><?php echo $linhas2['modified'];?></p>
    </div>
	

	
   
 
    <div class="col-md-8">
    <p><h3><span class="badge badge-secondary">ENDEREÇO</span></h3></p>
  	  <p> <?php echo $linhas2['logradouro'].' ';?><?php echo $linhas2['numero'].' ';?>
     <?php echo $linhas2['bairro'];?> </p>
     <p> <?php echo $linhas2['cidade'].'-';?><?php echo $linhas2['uf'].' ';?><?php echo $linhas2['cep'].' ';?> </p>
     <p> <?php echo $linhas2['contato'].'-';?><?php echo $linhas2['telefone'].' ';?><?php echo $linhas2['celular'].' ';?> </p>
    </div>                

  
 
 </div>
 
 <hr/>
 <div id="actions" class="row">
  <div class="col-md-12">
    <a href="listaclientes.php" class="btn btn-primary">Voltar</a>
    <a href="editcliente.php?id=<?php echo $linhas2['id']?>" class="btn btn-warning">Editar</a>
    <a href="../processa/delcliente.php?id=<?php echo $linhas2['id']?>" class="btn btn-danger">Excluir</a>
  </div>
 </div>



 



<!-- fim do contéudo-->
</div>





<?php 

include_once('footer.php');


?>