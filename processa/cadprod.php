<?php 
session_start();
include_once("../cliente/seguranca.php");
include_once("../config/conexao.php");
$nomeproduto=$_POST["nomeproduto"];
$descricaocurta=$_POST["descricurta"];
$descricaolonga=$_POST["descrilonga"];
$preco=$_POST["preco"];
$situacao=$_POST["situacao"];
$tag=$_POST["tag"];
$description=$_POST["description"];
$categoria=$_POST["categoriaproduto"];
$imagem=$_FILES["imagemproduto"]['name'];
$clienteid=$_POST['clienteid'];


//pasta do arquivo salvo


$_UP['pasta'] = '../foto/';

//Definiçãod e tamanho maximo do arquivo

$_UP['tamanho'] = 1024*1024*100; 


// extensões permitidas

$_UP['extensoes'] = array ('jpg','jpeg','png','gif','JPG');

//renomear o aqruivo (se true, o arquivo sera salvo como .jpg)

$_UP['renomeia'] = false;

//erros 

$_UP['erros'][0] ='Não houve erros';
$_UP['erros'][1] ='O arquivo no upload é maior que o limite no PHP';
$_UP['erros'][2] ='O arquivo no upload ultrapassa o limite especificado no HTML';
$_UP['erros'][3] ='O arquivo foi feito no parcialmente';
$_UP['erros'][4] ='O arquivo não foi feito upload';

//verfifca se houve erro

if($_FILES['imagemproduto']['error'] !=0) {

  die ("não foi possivel fazer o upload, erro: </br>".$_UP['erros']
 );
  exit;
};


// verifica as extensões 
$nomeimagem=explode('.',$_FILES['imagemproduto']['name']);
$nomeextensao=(end($nomeimagem));
$extensao = strtolower($nomeextensao);


if (array_search($extensao, $_UP['extensoes']) == false) {

  echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/cliente/cadproduto.php'><script type=\"text/javascript\">alert(\"Por favor envie aqruivo com as seguintes extensões JPG - JPEG -PNG -GIF.\");</script>;";


}



else if ($_UP['tamanho'] < $_FILES['imagemproduto']['size']) {
  echo " O arquivo é muito grande, envie arquvos de até 2MB";

}  else  {

                          if ($_UP['renomeia'] == true) {
                          $nomefinal= time().'jpg';

                          } else {

                          //mantem o nome
                          $nomefinal = $_FILES['imagemproduto']['name'];

                          }


                               // verificar se épossivel mover o arquivo para pasta 


  if(move_uploaded_file($_FILES['imagemproduto']['tmp_name'], $_UP['pasta'].$nomefinal))  {
           

    //upload efetuado com sucesso exibe a mensagem 

    echo "<script type=\"text/javascript\">alert(\"Imagem enviada com sucesso.\");</script>";
  }


   //aqqui o cadastarr no banco
   $query ="INSERT INTO produto (id_cliente,nome,descricao_curta,descricao_longa,preco,situacao,tag,description,categoria_id,created,imagem) VALUES ('$clienteid','$nomeproduto','$descricaocurta','$descricaolonga','$preco','$situacao','$tag','$description','$categoria',now(),'$imagem')";
   mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
       $linhas2=mysqli_affected_rows($link);
       if ($linhas2>=1) {	
   echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/cliente/listaproduto.php'><script type=\"text/javascript\">alert(\"Produto cadastrado com Sucesso.\");</script>;";
   
       }else {
   
         echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=http://localhost/cliente/cadproduto.php'><script type=\"text/javascript\">alert(\"Produto não cadastrado.\");</script>;";
   
   
       }




}





?>