<?php 
session_start();
include_once("../config/seguranca.php");
include_once("../config/conexao.php");
$nome=$_POST["nome"];
$login=$_POST["login"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$na=$_POST["nivel_de_acesso"];

$query ="INSERT INTO usuarios (nome,email,loginas,senha,nivel_acesso_id,created) VALUES ('$nome','$email','$login','$senha','$na',now())";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/listausuario.php'><script type=\"text/javascript\">alert(\"Usuario cadastrado com Sucesso.\");</script>;";

    }else {

			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/index.php'><script type=\"text/javascript\">alert(\"Usuario não cadastrado.\");</script>;";


		}




?>