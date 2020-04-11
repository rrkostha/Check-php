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
$id=$_POST['idcliente'];


$query ="UPDATE clientes SET  razao='$razao',
fantasia='$fantasia',
cnpj='$cnpj',
email='$email',
logradouro='$logradouro',
numero='$numero',
bairro='$bairro',
cidade='$cidade',
uf='$uf',
cep='$cep',
contato='$contato',
senha='$senha',
telefone='$telefone',
celular='$celular',
categoria_id='$categoria',
modified=now() where id=$id ";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/listaclientes.php'><script type=\"text/javascript\">alert(\"Cliente alterado com Sucesso.\");</script>;";

    }else {

			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/admin/index.php'><script type=\"text/javascript\">alert(\"Não foi possivel alterar cliente.\");</script>;";


		}




?>