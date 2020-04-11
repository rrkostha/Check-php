<section id="mu-hero">
</section>

<div class="container">
<?php

echo  "Bem vindo usuario g  ".$_SESSION['usuarioNome'] ;

echo $_SESSION['usuarioNivelAcesso'];

?>

</div>
<?php include ('submenu.php') ?>