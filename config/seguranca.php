<?php 
ob_start();
if(( $_SESSION['login'] == "") || ($_SESSION['login'] == false)  || ($_SESSION['admin']== false) ){    



  unset($_SESSION['usuarioId'],			
  $_SESSION['usuarioNome'], 		
  $_SESSION['usuarioNivelAcesso'], 
  $_SESSION['usuarioLogin'], 		
  $_SESSION['usuarioSenha'],
  $_SESSION['email'],);

  //mensagem de erro

  $_SESSION['loginErro'] = "Areá restrita para o usuários cadastrados!!";

 // envai para tela de login

 header("Location: ../login.php");


};









