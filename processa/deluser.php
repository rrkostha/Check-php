<?php 
session_start();
include_once("../config/seguranca.php");
include_once("../config/conexao.php");

$id=$_GET["id"];

$query ="DELETE FROM usuarios WHERE id='$id'";
mysqli_query($link,$query) or die('Erro ao alterar os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/listausuario.php'><script type=\"text/javascript\">alert(\"Usuario apagado com Sucesso.\");</script>;";

    }else {

			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/index.php'><script type=\"text/javascript\">alert(\"Usuario não apagado.\");</script>;";


		}




?>