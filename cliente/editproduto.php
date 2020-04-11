<?php
  session_start();
  
  include_once("seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');

  $id =$_GET['id'];
  $query ="SELECT * FROM  produto WHERE id=$id LIMIT 1";
  $consulta=mysqli_query($link,$query) or die('Erro ao consultar os dados do banco'.mysqli_error($link));
		$linhas3=mysqli_fetch_array($consulta);
		if ($linhas3>=1) { }
 $foto=$linhas3['imagem'];
 $dir= '../foto/';
  
 $catproduto=mysqli_query($link,"SELECT * FROM categoria ORDER BY ID");
 $linhas=mysqli_num_rows($catproduto);


 $status=mysqli_query($link,"SELECT * FROM statusproduto ORDER BY ID");
 $linhas2=mysqli_num_rows($status);
  ?>

  <section id="mu-hero">
  </section>
  
  <div class="container">
  <!-- aqui sempre conteudo -->

  <div class="row"></div>

<div id="main" class="container">
<h3 class="page-header">Editar produto</h3>


 <form action="../processa/editprod.php" method="POST" autocomplete="off" enctype="multipart/form-data">
 <input type="hidden" name="idproduto" value="<?php echo $id;?>">
        
        <div class="row">
            <div class="form-group col-md-1">  
                 <label for="campo1">Categoria</label>
            </div>
            <div class="form-group col-md-4">  
            
            <select name="categoriaproduto" class="form-control">
                                             <?php 
                                             
                                             while($linhas = mysqli_fetch_array($catproduto)) {?>
                                             <option value="<?php echo $linhas['id'];?>" 
                                             
                                             <?php if($linhas["id"] == $linhas3['categoria_id']) {echo 'selected';}?>
                                             
                                             
                                             ><?php echo $linhas['nome'] ;?></option>";


                                          <?php   }
                                             
                                             
                                             
                                             ;?>
                                            
                                           
                                        </select>
                                             
                                   
            </div>

        </div>

     <!-- divisa de linha -->
        <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo2">Nome</label>
                </div>
                <div class="form-group col-md-6">  
                
                        <input type="text" class="form-control" placeholder="Nome do produto" id="nome" name="nomeproduto" value="<?php echo $linhas3['nome'];?>" required>                                                
                                      
                </div>
        </div>
    <!-- divisa de linhas -->



        <!-- divisa de linha -->
        <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Descrição curta</label>
                </div>
                <div class="form-group col-md-8">  
                
                        <textarea class="form-control ckeditor" rows="3" placeholder="Descrição curta do produto" id="descricurta" name="descricurta"><?php echo $linhas3['descricao_curta'];?></textarea>                                                
                                      
                </div>
        </div>
    <!-- divisa de linhas -->


      <!-- divisa de linha -->
      <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Descrição Longa</label>
                </div>
                <div class="form-group col-md-8">  
                
                        <textarea class="form-control ckeditor" rows="3" placeholder="Descrição longa do produto" id="descrilonga" name="descrilonga"><?php echo $linhas3['descricao_longa'];?></textarea>                                                
                                      
                </div>
        </div>
    <!-- divisa de linhas -->

     <!-- divisa de linha -->
     <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Preço</label>
                </div>
                <div class="form-group col-md-4">  
                
                <input type="text" class="form-control" placeholder="preco" id="preco" name="preco"  value="<?php echo $linhas3['preco'];?>"required>                                                         
                                      
                </div>
        </div>
    <!-- divisa de linhas -->
       <!-- divisa de linha -->
       <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Situação</label>
                </div>
                <div class="form-group col-md-4">  
                <select name="situacao" class="form-control">
                                             <?php 
                                             
                                             while($linhas2 = mysqli_fetch_array($status)) {?>
                                             <option value="<?php echo $linhas2['id'];?>"
                                             
                                             <?php if($linhas2["id"] == $linhas3['situacao']) {echo 'selected';}?>
                                             
                                             ><?php echo $linhas2['estado'] ;?></option>                                  ";


                                          <?php   }
                                             
                                             
                                             
                                             ;?>
                                            
                                           
                                        </select>                                           
                                      
                </div>
        </div>
    <!-- divisa de linhas -->
     <!-- divisa de linha -->
     <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Tag</label>
                </div>
                <div class="form-group col-md-4">  
                
                <input type="text" class="form-control" placeholder="tag" id="tag" name="tag" value="<?php echo $linhas3['tag'];?>" required>                                                         
                                      
                </div>
        </div>
    <!-- divisa de linhas -->
     <!-- divisa de linha -->
     <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Description</label>
                </div>
                <div class="form-group col-md-4">  
                
                <input type="text" class="form-control" placeholder="description" id="description" name="description" value="<?php echo $linhas3['description'];?>"  required>                                                         
                                      
                </div>
        </div>
    <!-- divisa de linhas -->

     <!-- divisa de linha -->
     <div class="row">
            <?php
            
            if($foto ==""){ 
echo " <div class='form-group col-md-4'>  <label>O produto não tem imagem !</label></div>";

            } else {
           ;?>

                <div class="form-group col-md-1">  
                               <label for="campo3">Foto do Produto Antiga</label>
                </div>
                <div class="form-group col-md-5">  
                
                           <img src="<?php echo $dir.$foto ;?>" width=100 height=100 >   
                           <input type="hidden" name="fotoantiga" value="<?php echo $foto;?>">                                                     
                                      
                </div>

        
            
            
            <?php }   
            ;?>
        </div>
    <!-- divisa de linhas -->


     <!-- divisa de linha -->
     <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Foto do Produto</label>
                </div>
                <div class="form-group col-md-5">  
                
                <input type="file" class="form-control"  id="imagemproduto" name="imagemproduto" >                                                         
                                      
                </div>
        </div>
    <!-- divisa de linhas -->






       
         </hr>
                                                
                                                
                         <div id="actions" class="row">
                                    <div class="col-md-12">
                                         <button type="submit" class="btn btn-primary" onclick="return validar()">Enviar</button>
                                         <a href="listaproduto.php" class="btn btn-secondary"><i class="fa fa-list-alt"></i> Lista todos</a>
                                         <a href="index.PHP" class="btn btn-default">Cancelar</a>
                                    </div>
                         </div>
                                                  </form>
                          </div>





 



<!-- fim do contéudo-->
</div>





<?php 

include_once('footer.php');


?>