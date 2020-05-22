<script>
function submitar( idPagina ){
 document.getElementById('pagina').value=idPagina;
 document.getElementById('pesquisa_cliente').submit()
}

</script>


<script type="text/javascript" src="https://kryogenix.org/code/browser/sorttable/sorttable.js"></script> <!-- ordena a tabela chamada em class = 'sortable' -->

<?php
$title = "Certificados";          // (1) Set the title
require './header.php';                 // (2) Include the header
require './conexao/banco.php';


@$pesq = $_GET['pesquisa'];
if ($pesq != null) {

  //paginação tabela clientes
  $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

  //Selecionar todos os clientes da tabela
  $result_clientes = "SELECT * FROM certificados WHERE curso LIKE '%$pesq%'";
  $resultado_clientes = mysqli_query($conn, $result_clientes);

  //Contar o total de clientes
  $total_clientes = mysqli_num_rows($resultado_clientes);

  //Seta a quantidade de clientes por pagina
  $quantidade_pg = 4;

  //calcular o número de pagina necessárias para apresentar os clientes
  @$num_pagina = ceil($total_clientes/$quantidade_pg);

  //Calcular o inicio da visualizacao
  $incio = ($quantidade_pg*$pagina)-$quantidade_pg;

  //Selecionar os clientes a serem apresentado na página
  $result_clientes = "SELECT * FROM certificados WHERE curso LIKE '%$pesq%' LIMIT $incio, $quantidade_pg";
  $resultado_clientes = mysqli_query($conn, $result_clientes);

} else {

//paginação tabela clientes
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os clientes da tabela
$result_clientes = "SELECT * FROM certificados";
$resultado_clientes = mysqli_query($conn, $result_clientes);

//Contar o total de clientes
$total_clientes = mysqli_num_rows($resultado_clientes);

//Seta a quantidade de clientes por pagina

$quantidade_pg = 4;

//calcular o número de pagina necessárias para apresentar os clientes
@$num_pagina = ceil($total_clientes/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os clientes a serem apresentado na página
$result_clientes = "SELECT * FROM certificados LIMIT $incio, $quantidade_pg";
$resultado_clientes = mysqli_query($conn, $result_clientes);

}
?>

<h1 align="center">Certificados e Certificações</h1>
<div class="table-responsive-xl container theme-showcase" role="main">
  <div align="center">
  <form class="pesq" id="pesquisa_cliente" method="get" action="#">
      <input type="text" name="pesquisa" id="pesquisa" value="<?php echo $pesq; ?>"></input>
      <input type="hidden" name="pagina" id="pagina"></input>
      <button type="hide" onclick="submitar(1)"> pesquisar </button>
  </form>
</div>
  <table align="center" border="3" class="sortable table table-hover table table-sm" id="listar_clientes" class="display">
    <tr>      
      <th>curso</th>
      <th>instituição</th>
      <th>Ação</th>
    </tr>

    <?php while ($cliente = mysqli_fetch_array($resultado_clientes)) {?>
      <tr>        
        <td><?php echo $cliente['curso']; ?></td>
        <td><?php echo $cliente['instituicao']; ?></td>       
        <td>
          <div class="btn-group">
          <form action="<?php echo $cliente['caminho'] ?>" method="POST">
            <button type="submit" formtarget="_blank" class="btn-xs btn-outline-primary view_data" id="visualiza" value="" name="visualiza">Visualizar</button>
          </form>
          </div>
          </td>
        </tr>
      <?php } ?>
    </table>
</div>

<?php
      //Verificar a pagina anterior e posterior
      $pagina_anterior = $pagina - 1;
      $pagina_posterior = $pagina + 1;
    ?>
    
    <nav class="text-center">
      <ul class="pagination" style="color:blue;">
        <li>
          <?php
          if($pagina_anterior != 0){ ?>
            <a onclick="javascript:submitar(<?php echo $pagina_anterior; ?>);">
              <span aria-hidden="true">&laquo;</span>
            </a>
          <?php }else{ ?>
            <span aria-hidden="true">&laquo;</span>
        <?php }  ?>
        </li>
        <?php
        //Apresentar a paginacao
        for($i = 1; $i < $num_pagina + 1; $i++){ ?>
          <li><a onclick="javascript:submitar(<?php echo $i; ?>);"><?php echo $i; ?>          
        <?php } ?>

          <?php
          if($pagina_posterior <= $num_pagina){ ?>
            <a onclick="javascript:submitar(<?php echo $pagina_posterior; ?>);">
              <span aria-hidden="true">&raquo;</span>
            </a>
          <?php }else{ ?>
            <li><span aria-hidden="true">&raquo;</span></li>
        <?php }  ?>
        </li>
      </ul>
    </nav>
   

<?php
require "./footer.php";         // (3) Include the footer
?>
