
  <?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');
  ?>

  <section id="mu-hero">
  </section>
  

  
  <div class="container">
<div class="row"></div>

  <div id="main" class="container">
 <h3 class="page-header">Cadastro de categoria produtos</h3>


   <form action="../processa/cadcatpro.php" method="POST" autocomplete="off">
          



           <div class="row">
                                      <div class="form-group col-md-1">  
                                      <label for="campo1">Nome da categoria</label>
                                      </div>
                                      <div class="form-group col-md-5">  
                                        <input type="text" class="form-control" placeholder="Nome" id="nome" name="nomecat"  required>
                                      
           </div>

					 	
			

         
         <hr>
                                                      <div id="actions" class="row">
                                                        <div class="col-md-12">
                                                          <button type="submit" class="btn btn-primary" onclick="return validar()">Cadastrar</button>
                                                           <a href="listacatprodutos.php" class="btn btn-secondary"><i class="fa fa-list-alt"></i> Lista todos</a>
                                                          <a href="index.php" class="btn btn-default">Cancelar</a>
                                                        </div>
                                                      </div>
                                                    </form>
                                                 </div>






		 <!-- fim do conteudo -->



				</div>

      

         
								
		</section>

	</main>




</div>





<?php 

include_once('footer.php');


?>