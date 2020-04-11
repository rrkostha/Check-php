<?php 
session_start();
include_once("../config/seguranca.php");
include_once("../config/conexao.php");
$razao=$_POST["razao"];
$fantasia=$_POST["fantasia"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$cnpj=$_POST["cnpj"];
$logradouro=$_POST["logradouro"];
$numero=$_POST["numero"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$uf=$_POST["uf"];
$cep=$_POST["cep"];
$contato=$_POST["contato"];
$telefone=$_POST["telefone"];
$celular=$_POST["celular"];
$categoria=$_POST["categoriacliente"];



$query ="INSERT INTO clientes (razao,fantasia,cnpj,email,logradouro,numero,bairro,cidade,uf,cep,contato,senha,telefone,celular,categoria_id,created) VALUES ('$razao','$fantasia','$cnpj','$email','$logradouro',$numero,'$bairro','$cidade','$uf','$cep','$contato','$senha','$telefone','$celular','$categoria',now())";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/listaclientes.php'><script type=\"text/javascript\">alert(\"Usuario cadastrado com Sucesso.\");</script>;";

    }else {

			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/index.php'><script type=\"text/javascript\">alert(\"Usuario não cadastrado.\");</script>;";


		}




?>