<?php 
ob_start();
if(( $_SESSION['login'] == "") || ($_SESSION['login'] == false)  ||
($_SESSION['cliente'] == false)


) {    



  unset($_SESSION['usuarioId'],			
  $_SESSION['usuarioNome'], 		
  $_SESSION['usuarioNivelAcesso'], 
  $_SESSION['usuarioLogin'], 		
  $_SESSION['usuarioSenha'],
  $_SESSION['email'],

);

  //mensagem de erro

  $_SESSION['loginErro'] = "Areá restrira para o usuários cadastrados!!";

 // envia para tela de login




 header("Location: ../login.php");

}

$idcliente = $_SESSION['clienteId'];







