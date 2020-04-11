<?php 
session_start();
include_once("../config/seguranca.php");
include_once("../config/conexao.php");
$nome=$_POST["nomecat"];


$query ="INSERT INTO categoriacliente (nome,created) VALUES ('$nome',now())";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/listacatclientes.php'><script type=\"text/javascript\">alert(\"Categoria cadastrada com Sucesso.\");</script>;";

    }else {

			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/index.php'><script type=\"text/javascript\">alert(\"Categoria não cadastrada.\");</script>;";


		}




?>