<?php
session_start();
$emailt = $_POST['email'];
$senhat = $_POST['senha'];
include_once("conexao.php");

$result = mysqli_query($link,"SELECT * FROM usuarios WHERE email='$emailt' AND senha='$senhat' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
//echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){

                      $result2 = mysqli_query($link,"SELECT * FROM clientes WHERE email='$emailt' AND senha='$senhat' LIMIT 1");
                      $resultado2 = mysqli_fetch_assoc($result2);

                                if(empty($resultado2)) {
                                                        //Mensagem de Erro
                                                        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
                                                        
                                                        //Manda o usuario para a tela de login
                                                        header("Location: ../login.php");
                                                         }
                                                        else
                                                        {
                                                      

                                                          $_SESSION['clienteId'] = $resultado2['id'];
                                                          $_SESSION['usuarioNome'] = $resultado2['fantasia'];
                                                          $_SESSION['usuariocontato'] = $resultado2['contato'];
                                                          $_SESSION['usuarioNivelAcesso'] = $resultado2['acesso'];
                                                          $_SESSION['usuarioSenha'] = $senhat;
                                                          $_SESSION['email'] = $emailt;
                                                          $_SESSION['liberado'] = $resultado2['liberado'];    
                                                          $_SESSION['login'] = true;   
                                                          $_SESSION['cliente'] = true; 
                                                       
                
                                                              if($_SESSION['liberado'] == 0) {     //Mensagem de Erro
                                                                $_SESSION['loginErro'] = "Seu acesso não foi liberado";
                                                                
                                                                //Manda o usuario para a tela de login
                                                                header("Location: ../login.php");  }  else {
                                                                  header("Location: ../cliente/index.php");
                                                                } 
                                                        //// finaliza a verificação do email do cliente       

                                                                 






                                                        }


                              
                     }

                     else

                     {  


                      $_SESSION['usuarioId'] = $resultado['id'];
                      $_SESSION['usuarioNome'] = $resultado['nome'];
                      $_SESSION['usuarioLogin'] = $resultado['loginas'];
                      $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
                      $_SESSION['usuarioSenha'] = $resultado['senha'];
                      $_SESSION['email'] = $resultado['email'];
                      $_SESSION['admin'] = true;
                    

                      if(  $_SESSION['usuarioNivelAcesso'] ==1) {
                        header("Location: ../admin/index.php");
                        } else {

                      $_SESSION['loginErro'] = "Seu usuario não tem acesso liberado";
                       header("Location: ../login.php");

                        }




 
                    }





?>



