<?php 
session_start();
include_once("../config/seguranca.php");
include_once("../config/conexao.php");
$nome=$_POST["status"];


$query ="INSERT INTO statusproduto (status,created) VALUES ('$nome',now())";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/listastatus.php'><script type=\"text/javascript\">alert(\"Categoria cadastrada com Sucesso.\");</script>;";

    }else {

			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/index.php'><script type=\"text/javascript\">alert(\"Categoria não cadastrada.\");</script>;";


		}




?>