<?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');

 $catcliente=mysqli_query($link,"SELECT * FROM categoriacliente ORDER BY ID");
 $linhas=mysqli_num_rows($catcliente);


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
  <div class="row"></div>

  <div id="main" class="container">
 <h3 class="page-header">Edita Cliente</h3>


   <form action="../processa/edicli.php" method="POST" autocomplete="off">
   <input type="hidden" name="idcliente" value="<?php echo $linhas2['id']    ;?>">
          
          <div class="row">
              <div class="form-group col-md-3">  
                                      <label for="campo1">Categoria - Selecione -></label>
                                      </div>
                                      <div class="form-group col-md-3">  
                                             <select name="categoriacliente" class="form-control">
                                             <?php 
                                             
                                             while($linhas = mysqli_fetch_array($catcliente)) {?>
                                             <option value="<?php echo $linhas['id'];?>"
                                             
                                             <?php if($linhas2["categoria_id"] == $linhas['id']) {echo 'selected';}?>
                                             
                                             ><?php echo $linhas['nome'] ;?></option>                                  ";


                                          <?php   }
                                             
                                             
                                             
                                             ;?>
                                            
                                           
                                        </select>

                                     
                                        </div>

          </div>


           <div class="row">
                                      <div class="form-group col-md-1">  
                                      <label for="campo1">Razão Social</label>
                                      </div>
                                      <div class="form-group col-md-5">  
                                        <input type="text" class="form-control" placeholder="Razao Social" id="rasao" name="razao" value="<?php echo $linhas2['razao'];?>" required>
                                        </div>
                                        <div class="form-group col-md-1">  
                                      <label for="campo1">Fantasia</label>
                                      </div>
                                      <div class="form-group col-md-4">  
                                        <input type="text" class="form-control" placeholder="Fantasia" id="fantasia" name="fantasia" value="<?php echo $linhas2['fantasia'];?>" required>
                                        </div>
           </div>

           <div class="row">



                              	
									<div class="form-group col-md-1">     


                     <label for="campo1">CNPJ</label>
                                      </div>   
                                      	<div class="form-group col-md-3">          
										<input type="text" class="form-control" placeholder="CNPJ" id="cnpj" name="cnpj" value="<?php echo $linhas2['cnpj'];?>" required>
									</div>
									  <div class="form-group col-md-1"><label for="campo3">E-mail</label></div>

                  	<div class="form-group col-md-6">                
										<input type="email" class="form-control" placeholder="Email" id="email" name="email"  value="<?php echo $linhas2['email'];?>" required>
									</div>




          </div>

         <div class="row">

                            <div class="form-group col-md-1">

                                    <label for="campo1">Endereço</label>
                            </div>

                            <div class="form-group col-md-6">
                                      <input type="text" class="form-control" placeholder="Av/rua" id="endereco" name="logradouro" value="<?php echo $linhas2['logradouro'];?>"  required>
                              
                            </div>

                              <div class="form-group col-md-1">

                                     <label for="campo1">Número</label>
                            </div>

                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" placeholder="Nº" id="numero" name="numero" value="<?php echo $linhas2['numero'];?>"  required>
                              
                            </div>



         </div>



         <div class="row">

                            <div class="form-group col-md-1">
                                  <label for="campo3">Bairro</label>

                            </div>

                            <div class="form-group col-md-3">
                                	<input type="text" class="form-control" placeholder="Bairro"  name="bairro" id="bairro" value="<?php echo $linhas2['bairro'];?>" required>
                              
                            </div>
                              <div class="form-group col-md-1">

                                    <label for="campo4">Cidade</label>
                            </div>

                            <div class="form-group col-md-3">
                                	<input type="text" class="form-control" placeholder="Cidade"  name="cidade" id="cidade" value="<?php echo $linhas2['cidade'];?>" required>
                              
                            </div>

                             <div class="form-group col-md-1">

                                    <label for="campo4">UF</label>
                            </div>

                            <div class="form-group col-md-2">
                                	<input type="text" class="form-control" placeholder="estado"  name="uf" id="estado" value="<?php echo $linhas2['uf'];?>"vrequired>
                              
                            </div>




         </div>
               
        
         
           <div class="row">

                            <div class="form-group col-md-1">
                                  <label for="campo3">CEP</label>

                            </div>

                            <div class="form-group col-md-2">
                                	<input type="text" class="form-control" placeholder="CEP"  name="cep" id="cep" value="<?php echo $linhas2['cep'];?>" required>
                              
                            </div>
                              <div class="form-group col-md-1">

                                    <label for="campo4">Contato</label>
                            </div>

                            <div class="form-group col-md-4">
                                	<input type="text" class="form-control" placeholder="Contato"  name="contato" id="contato" value="<?php echo $linhas2['contato'];?>" required>
                              
                            </div>

                             <div class="form-group col-md-1">

                                    <label for="campo4">Telefone</label>
                            </div>

                            <div class="form-group col-md-2">
                                	<input type="text" class="form-control" placeholder="telefone" id="fone" name="telefone" id="telefone" value="<?php echo $linhas2['telefone'];?>" required>
                              
                            </div>




         </div>
               

               
           <div class="row">

                            <div class="form-group col-md-2">
                                  <label for="campo3">Celular/whatsapp</label>

                            </div>

                            <div class="form-group col-md-3">
                                	<input type="text" class="form-control" placeholder="celular ou whatsApp"  name="celular" id="celular" value="<?php echo $linhas2['celular'];?>" required>
                              
                            </div>
                              <div class="form-group col-md-1">

                                    <label for="campo4">Senha</label>
                            </div>

                            <div class="form-group col-md-4">
                                	<input type="password" class="form-control" placeholder="senha"  name="senha" id="senha" value="<?php echo $linhas2['senha'];?>" required>
                              
                            </div>





         </div>
           </hr>
                                                      <div id="actions" class="row">
                                                        <div class="col-md-12">
                                                          <button type="submit" class="btn btn-primary" onclick="return validar()">Alterar</button>
                                                           <a href="/admin/cliente/listacliente" class="btn btn-secondary"><i class="fa fa-list-alt"></i> Lista todos</a>
                                                          <a href="index.html" class="btn btn-default">Cancelar</a>
                                                        </div>
                                                      </div>
                                                    </form>
                                                 </div>


		 <!-- fim do conteudo -->



				</div>

      

         
								
		</section>

	</main>
	
	<!-- End main content -->	





 



<!-- fim do contéudo-->
</div>





<?php 

include_once('footer.php');


?>