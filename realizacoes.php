<?php
$title = "Realizações de Fernando Franciolli";
include 'header.php';                 // (2) Include the header

?>

<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  
  text-align: justify;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#foto{
  float: left;
}


#div-gestoc {
    padding-left: 12em;
    text-indent: 5em;
}

</style>

<div id="div-gestoc">
  <table>
    <th>
        <h2>Gestão de Estoque</h2>
          <img src="./imagens/gestoc.jpg" alt="GESTOC" id="foto" style="width:200px;height:200px;">   
            <p style = "font-size: 17px;">
              Neste site, mostro minhas habilidades como programador de um web software de gestão de orçamentos e contole de estoque para uma tapeçaria.</br>
              Este foi o projeto que foi implementado em uma tapeçaria na cidade de Avaré e apresentado como conclução de curso.</br>
              Neste projeto, mostro habilidades com a utilização de HTML, CSS, JavaScript, Bootstrap, PHP e Banco de Dados (phpmyadmin).</br>
              Para visitar o site com o projeto, clique no botão "Visitar GESTOC", os usuarios são:</br>
              Para acesso como administrador: visitante_admin senha: visitante_admin</br>
              Para acesso como visitante: visitante senha: visitante</br>
              obs: o visitante não tem acesso completo ao sistema, pois faz as funções de funcionário, e o administrador possui acesso completo fazendo as funções do gerente.</br>
            </p>
            <button type="button" onclick="window.location.href= 'https://fernandogestoc.000webhostapp.com/index.php' " class="btn btn-success">Visitar GESTOC</button>
    </th>
  </table>  
</div>







<?php

include 'footer.php';                 // (2) Include the footer

?>