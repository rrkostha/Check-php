
  <?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');
  ?>

  <section id="mu-hero">
  </section>

  
<div class="container"></div>
  <hr>
<div class="row">
    <div class="container">
    
    <a class="btn btn-success " href="listastatus.php?id">Status de produto</a>
    </div>


</div>
  
  <div class="container">

  <div id="main" class="container-fluid">
    
    <div id="top" class="row">
    <div class="col-md-3"><br>
        <h2>Usuários</h2>
    </div>
 
    <div class="col-md-6">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </div>
 
    <div class="col-md-3"> 
        <a href="cadusuarios.php" class="btn btn-primary pull-right h2">Novo Usuario</a>
    </div>
</div> <!-- /#top -->
 
     </hr>
   <div id="list" class="row">
 
   <?php

$resultado=mysqli_query($link,"SELECT * FROM usuarios ORDER BY ID");
 $linhas=mysqli_num_rows($resultado);
?>
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                   <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data cadastro</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>

<?php 
while($linhas = mysqli_fetch_array($resultado)) {

 echo "  <tr>
 <td>".$linhas['id']."</td>                  
 <td>".$linhas['nome']."</td>
 <td>".$linhas['email']."</td>
 <td>".$linhas['created']."</td>";?>
 <td class='actions'>
     <a class="btn btn-success btn-xs" href="viewusuarios.php?id=<?php echo $linhas['id']?>">Visualizar</a>
     
     <a class="btn btn-warning btn-xs" href="editusuarios.php?id=<?php echo $linhas['id']?>">Editar</a>
     

    <a class="btn btn-danger btn-xs" href="../processa/deluser.php?id=<?php echo $linhas['id']?>" onclick="return confirm('Tem certeza que ira apagar este registro?')">Excluir</a>
 </td>
</tr>


<?php

}
                
               
                    
  ?>            
         
              
             

            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->
 <div id="bottom" class="row">
    <div class="col-md-12">
         
        <ul class="pagination">
            <li class="disabled"><a>&lt; Anterior</a></li>
            <li class="disabled"><a>1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
        </ul><!-- /.pagination -->
 
    </div>
</div> <!-- /#bottom -->
 </div>  <!-- /#main -->



				</div>

      

         
								
		</section>

	</main>

  <?php 

include_once('footer.php');


?>

 


