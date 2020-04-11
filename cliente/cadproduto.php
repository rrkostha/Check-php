<?php
  session_start();
  
  include_once("seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');

  
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
<h3 class="page-header">Cadastro de Produtos</h3>


 <form action="../processa/cadprod.php" method="POST" autocomplete="off" enctype="multipart/form-data">
 <input type="hidden" name="clienteid" value="<?php echo $idcliente;?>">
        
        <div class="row">
            <div class="form-group col-md-1">  
                 <label for="campo1">Categoria</label>
            </div>
            <div class="form-group col-md-4">  
            
            <select name="categoriaproduto" class="form-control">
                                             <?php 
                                             
                                             while($linhas = mysqli_fetch_array($catproduto)) {?>
                                             <option value="<?php echo $linhas['id'];?>"><?php echo $linhas['nome'] ;?></option>                                  ";


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
                <div class="form-group col-md-4">  
                
                        <input type="text" class="form-control" placeholder="Nome do produto" id="nome" name="nomeproduto"  required>                                                
                                      
                </div>
        </div>
    <!-- divisa de linhas -->



        <!-- divisa de linha -->
        <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Descrição curta</label>
                </div>
                <div class="form-group col-md-4">  
                
                        <textarea class="form-control ckeditor" rows="3" placeholder="Descrição curta do produto" id="descricurta" name="descricurta"></textarea>                                                
                                      
                </div>
        </div>
    <!-- divisa de linhas -->


      <!-- divisa de linha -->
      <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Descrição Longa</label>
                </div>
                <div class="form-group col-md-4">  
                
                        <textarea class="form-control ckeditor" rows="3" placeholder="Descrição longa do produto" id="descrilonga" name="descrilonga"></textarea>                                                
                                      
                </div>
        </div>
    <!-- divisa de linhas -->

     <!-- divisa de linha -->
     <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Preço</label>
                </div>
                <div class="form-group col-md-4">  
                
                <input type="text" class="form-control" placeholder="preco" id="preco" name="preco"  required>                                                         
                                      
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
                                             <option value="<?php echo $linhas2['id'];?>"><?php echo $linhas2['status'] ;?></option>                                  ";


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
                
                <input type="text" class="form-control" placeholder="situacao" id="tag" name="tag"  required>                                                         
                                      
                </div>
        </div>
    <!-- divisa de linhas -->
     <!-- divisa de linha -->
     <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Description</label>
                </div>
                <div class="form-group col-md-4">  
                
                <input type="text" class="form-control" placeholder="palavra para ajudar nas buscas" id="description" name="description"  required>                                                         
                                      
                </div>
        </div>
    <!-- divisa de linhas -->

     <!-- divisa de linha -->
     <div class="row">
               <div class="form-group col-md-1">  
                        <label for="campo1">Imagem</label>
                </div>
                <div class="form-group col-md-4">  
                
                <input type="file" class="form-control"  id="imagemproduto" name="imagemproduto"  required>                                                         
                                      
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