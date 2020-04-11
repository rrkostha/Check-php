<?php 
session_start();
include_once("../config/seguranca.php");
include_once("../config/conexao.php");
$nome=$_POST["nome"];
$loginas=$_POST["login"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$na=$_POST["nivel_de_acesso"];
$id=$_POST["id"];

$query ="UPDATE usuarios set nome='$nome',email='$email',loginas='$loginas',senha='$senha',nivel_acesso_id='$na',modified=NOW() WHERE id='$id'";
mysqli_query($link,$query) or die('Erro ao alterar os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/listausuario.php'><script type=\"text/javascript\">alert(\"Usuario alterado com Sucesso.\");</script>;";

    }else {

			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/index.php'><script type=\"text/javascript\">alert(\"Usuario não alterado.\");</script>;";


		}




?>