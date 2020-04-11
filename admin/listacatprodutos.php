
  <?php
  session_start();
  
  include_once("../config/seguranca.php");
  include_once("../config/conexao.php");
  include_once('head.php');
  include_once('header.php');
  ?>

  <section id="mu-hero">
  </section>

  <?php include ('submenu.php') ?>
  
  <div class="container">

  <div id="main" class="container-fluid">
    
    <div id="top" class="row">

    <?php

$resultado=mysqli_query($link,"SELECT * FROM categoria ORDER BY ID");
 $linhas=mysqli_num_rows($resultado);
?>
    <div class="col-md-3"><br>
        <h2>Categorias</h2>
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
        <a href="cadcategoriaprodutos.php" class="btn btn-primary pull-right h2">Nova Categoria</a>
    </div>
</div> <!-- /#top -->
 
     </hr>
   <div id="list" class="row">
 
  
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                   <th>Id</th>
                    <th>Nome</th>
                    
                    <th>Data cadastro</th>
                    <th>Data alteração</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>

<?php 
while($linhas = mysqli_fetch_array($resultado)) {

 echo "  <tr>
 <td>".$linhas['id']."</td>                  
 <td>".$linhas['nome']."</td>
 <td>".$linhas['created']."</td>
 <td>".$linhas['modified']."</td>";?>
 <td class='actions'>
     
     
     <a class="btn btn-warning btn-xs" href="editcatprodutos.php?id=<?php echo $linhas['id']?>">Editar</a>
     

    <a class="btn btn-danger btn-xs" href="../processa/delcatprodutos.php?id=<?php echo $linhas['id']?>" onclick="return confirm('Tem certeza que ira apagar este registro?')">Excluir</a>
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

 


