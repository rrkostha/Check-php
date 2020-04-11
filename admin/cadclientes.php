<?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');

 $catcliente=mysqli_query($link,"SELECT * FROM categoriacliente ORDER BY ID");
 $linhas=mysqli_num_rows($catcliente);

  ?>

  <section id="mu-hero">
  </section>
  

  
  <div class="container">
  <!-- aqui sempre conteudo -->
  <div class="row"></div>

  <div id="main" class="container">
 <h3 class="page-header">Cadastro de Clientes</h3>


   <form action="../processa/cadcli.php" method="POST" autocomplete="off">
          
          <div class="row">
              <div class="form-group col-md-3">  
                                      <label for="campo1">Categoria - Selecione -></label>
                                      </div>
                                      <div class="form-group col-md-3">  
                                             <select name="categoriacliente" class="form-control">
                                             <?php 
                                             
                                             while($linhas = mysqli_fetch_array($catcliente)) {?>
                                             <option value="<?php echo $linhas['id'];?>"><?php echo $linhas['nome'] ;?></option>                                  ";


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
                                        <input type="text" class="form-control" placeholder="Razao Social" id="rasao" name="razao"  required>
                                        </div>
                                        <div class="form-group col-md-1">  
                                      <label for="campo1">Fantasia</label>
                                      </div>
                                      <div class="form-group col-md-4">  
                                        <input type="text" class="form-control" placeholder="Fantasia" id="fantasia" name="fantasia" required>
                                        </div>
           </div>

           <div class="row">



                              	
									<div class="form-group col-md-1">     


                     <label for="campo1">CNPJ</label>
                                      </div>   
                                      	<div class="form-group col-md-3">          
										<input type="text" class="form-control" placeholder="CNPJ" id="cnpj" name="cnpj"  required>
									</div>
									  <div class="form-group col-md-1"><label for="campo3">E-mail</label></div>

                  	<div class="form-group col-md-6">                
										<input type="email" class="form-control" placeholder="Email" id="email" name="email"   required>
									</div>




          </div>

         <div class="row">

                            <div class="form-group col-md-1">

                                    <label for="campo1">Endereço</label>
                            </div>

                            <div class="form-group col-md-6">
                                      <input type="text" class="form-control" placeholder="Av/rua" id="endereco" name="logradouro"   required>
                              
                            </div>

                              <div class="form-group col-md-1">

                                     <label for="campo1">Número</label>
                            </div>

                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" placeholder="Nº" id="numero" name="numero"   required>
                              
                            </div>



         </div>



         <div class="row">

                            <div class="form-group col-md-1">
                                  <label for="campo3">Bairro</label>

                            </div>

                            <div class="form-group col-md-3">
                                	<input type="text" class="form-control" placeholder="Bairro"  name="bairro" id="bairro"  required>
                              
                            </div>
                              <div class="form-group col-md-1">

                                    <label for="campo4">Cidade</label>
                            </div>

                            <div class="form-group col-md-3">
                                	<input type="text" class="form-control" placeholder="Cidade"  name="cidade" id="cidade" required>
                              
                            </div>

                             <div class="form-group col-md-1">

                                    <label for="campo4">UF</label>
                            </div>

                            <div class="form-group col-md-2">
                                	<input type="text" class="form-control" placeholder="estado"  name="uf" id="estado" vrequired>
                              
                            </div>




         </div>
               
        
         
           <div class="row">

                            <div class="form-group col-md-1">
                                  <label for="campo3">CEP</label>

                            </div>

                            <div class="form-group col-md-2">
                                	<input type="text" class="form-control" placeholder="CEP"  name="cep" id="cep"  required>
                              
                            </div>
                              <div class="form-group col-md-1">

                                    <label for="campo4">Contato</label>
                            </div>

                            <div class="form-group col-md-4">
                                	<input type="text" class="form-control" placeholder="Contato"  name="contato" id="contato"  required>
                              
                            </div>

                             <div class="form-group col-md-1">

                                    <label for="campo4">Telefone</label>
                            </div>

                            <div class="form-group col-md-2">
                                	<input type="text" class="form-control" placeholder="telefone" id="fone" name="telefone" id="telefone"  required>
                              
                            </div>




         </div>
               

               
           <div class="row">

                            <div class="form-group col-md-2">
                                  <label for="campo3">Celular/whatsapp</label>

                            </div>

                            <div class="form-group col-md-3">
                                	<input type="text" class="form-control" placeholder="celular ou whatsApp"  name="celular" id="celular"  required>
                              
                            </div>
                              <div class="form-group col-md-1">

                                    <label for="campo4">Senha</label>
                            </div>

                            <div class="form-group col-md-4">
                                	<input type="password" class="form-control" placeholder="senha"  name="senha" id="senha"  required>
                              
                            </div>





         </div>
           </hr>
                                                      <div id="actions" class="row">
                                                        <div class="col-md-12">
                                                          <button type="submit" class="btn btn-primary" onclick="return validar()">Enviar</button>
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