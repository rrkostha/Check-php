
  <?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');

  $id =$_GET['id'];
  $query ="SELECT * FROM  statusproduto WHERE id=$id LIMIT 1";
  $consulta=mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_fetch_array($consulta);
		if ($linhas2>=1) { }
  ?>

  <section id="mu-hero">
  </section>
  
  <div class="container">
  <div class="container">
  </div>

  <div id="main" class="container">
 <h3 class="page-header">Editar status</h3>


   <form action="../processa/editstatusp.php" method="POST" autocomplete="off">
          
   <input type="hidden"  name="id" value="<?php echo $linhas2['id'];?>" >


           <div class="row">
                                      <div class="form-group col-md-3">  
                                      <label for="campo1">Nome status</label>
                                      </div>
                                      <div class="form-group col-md-5">  
                                        <input type="text" class="form-control" placeholder="Nome" id="nome" name="nomecat" value="<?php echo $linhas2['status'];?>"  required>
                                        </div>
                                       
                                     
           </div>

					 		
        



           <div class="row">



                              	
								
									 

         
         <hr>
                                                      <div id="actions" class="row">
                                                        <div class="col-md-12">
                                                          <button type="submit" class="btn btn-primary" onclick="return validar()">Alterar</button>
                                                           <a href="listastatus.php" class="btn btn-secondary"><i class="fa fa-list-alt"></i> Lista todos</a>
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