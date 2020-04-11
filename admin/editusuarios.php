
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


  <div id="main" class="container">
 <h3 class="page-header">Editar usuários</h3>


   <form action="../processa/edituser.php" method="POST" autocomplete="off">
          
   <input type="hidden"  name="id" value="<?php echo $linhas2['id'];?>" >


           <div class="row">
                                      <div class="form-group col-md-1">  
                                      <label for="campo1">Nome Completo</label>
                                      </div>
                                      <div class="form-group col-md-5">  
                                        <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" value="<?php echo $linhas2['nome'];?>"  required>
                                        </div>
                                        <div class="form-group col-md-1">  
                                      <label for="campo1">Login</label>
                                      </div>
                                      <div class="form-group col-md-4">  
                                        <input type="text" class="form-control" placeholder="login" id="login" name="login" value="<?php echo $linhas2['loginas'];?>" required>
                                        </div>
           </div>

					 		<div class="row">


							<div class="form-group col-md-1">     


                     <label for="campo1">E-mail</label>
                                      </div>   
                                      	<div class="form-group col-md-6">          
                                        <input type="email" class="form-control" placeholder="E-mail" id="email" name="email" value="<?php echo $linhas2['email'];?>"  required>
									</div>
          </div>
          
          <div class="row">
          <div class="form-group col-md-2">  
          <label for="campo1">Nivel de acesso</label>
</div>


<div class="form-group col-md-3">          
                   
                    

                    <select class=form-control name="nivel_de_acesso">

                  <option value="1" <?php 
                  if($linhas2['nivel_acesso_id']== 1) {

                    echo 'selected';
                  }
                  
                  ;?> >Administrador</option>
                  <option value="2"  <?php  if($linhas2['nivel_acesso_id']== 2) {

echo 'selected';
} ;?>>Usuário</option>
                
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
                                                          <button type="submit" class="btn btn-primary" onclick="return validar()">Alterar</button>
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