<?php 
session_start();
include_once("../config/seguranca.php");
include_once("../config/conexao.php");

$id=$_GET["id"];

$query ="DELETE FROM categoriacliente WHERE id='$id'";
mysqli_query($link,$query) or die('Erro ao alterar os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/listacatclientes.php'><script type=\"text/javascript\">alert(\"Categoria excluida com Sucesso.\");</script>";

    }else {

			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/index.php'><script type=\"text/javascript\">alert(\"Categoria não excluida.\");</script>";


		}




?>