<?php
  session_start();
  
  include_once("seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');

  $id =$_GET['id'];
  $dir= '../foto/';
  $query ="SELECT * FROM  produto WHERE id=$id LIMIT 1";
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
                             <h3 class="page-header">Visualizar dados do produto <?php echo $linhas2['id'];?> </h3>


  <div class="row">
  
  <div class="col-md-3"><img class="img-thumbnail" src="<?php echo  $dir.$linhas2['imagem'];?>"></div><div class="col-md-9">
  
  <h3> <?php echo $linhas2['nome'];?> </h3>
  <p><h5><span class="badge badge-secondary">Descrição</span></h5></p>
  <p> <?php echo $linhas2['descricao_longa']?></p>
  <h3>R$  <?php echo $linhas2['preco']?></h3>
  <p><h5><span class="badge badge-secondary">Data cadastro</span></h5></p>
  <p> <?php echo $linhas2['created']?></p>
  <p> <?php echo $linhas2['categoria_id']?></p>
  
  
  
  </div>
  
  
  </div>
   <div class="row">
   <div class="container">
   <hr>
   </div>
   <div class="container">
   <a class="btn btn-success " href="listaproduto.php">Voltar</a>
   <a class="btn btn-warning " href="editproduto.php?id=<?php echo $linhas2['id']?>">Editar</a>
   
   </div>
   
   </div>
 
  
  
  
  
  
  
  </div>



</div>
<!-- fim do contéudo-->
</div>





<?php 

include_once('footer.php');


?>