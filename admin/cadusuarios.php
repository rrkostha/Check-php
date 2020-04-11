
  <?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');
  ?>

  <section id="mu-hero">
  </section>

  <div class="container"></div>

  
  <div class="container">


  <div id="main" class="container">
 <h3 class="page-header">Cadastro de usuários</h3>


   <form action="../processa/caduser.php" method="POST" autocomplete="off">
          



           <div class="row">
                                      <div class="form-group col-md-1">  
                                      <label for="campo1">Nome Completo</label>
                                      </div>
                                      <div class="form-group col-md-5">  
                                        <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome"  required>
                                        </div>
                                        <div class="form-group col-md-1">  
                                      <label for="campo1">Login</label>
                                      </div>
                                      <div class="form-group col-md-4">  
                                        <input type="text" class="form-control" placeholder="login" id="login" name="login"  required>
                                        </div>
           </div>

					 		<div class="row">


							<div class="form-group col-md-1">     


                     <label for="campo1">E-mail</label>
                                      </div>   
                                      	<div class="form-group col-md-6">          
                                        <input type="email" class="form-control" placeholder="E-mail" id="email" name="email"  required>
									</div>
          </div>
          
          <div class="row">
          <div class="form-group col-md-2">  
          <label for="campo1">Nivel de acesso</label>
</div>


<div class="form-group col-md-3">          
                   
                    

                    <select class=form-control name="nivel_de_acesso">

                  <option value="1">Administrador</option>
                  <option value="2">Usuário</option>
                
                  </select>
									</div>

          </div>



           <div class="row">



                              	
								
									  <div class="form-group col-md-1"><label for="campo3">Senha</label></div>

                  	<div class="form-group col-md-3">                
										<input type="password" class="form-control" placeholder="Senha" id="senha" name="senha"   required>
									</div>
 <div class="form-group col-md-2"><label for="campo3">Repita Senha</label></div>

<div class="form-group col-md-3">                
										<input type="password" class="form-control" placeholder="Senha" id="senha" name="confirmesenha"   required>
									</div>

          </div>
			

         
         <hr>
                                                      <div id="actions" class="row">
                                                        <div class="col-md-12">
                                                          <button type="submit" class="btn btn-primary" onclick="return validar()">Cadastrar</button>
                                                           <a href="listausuario.php" class="btn btn-secondary"><i class="fa fa-list-alt"></i> Lista todos</a>
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