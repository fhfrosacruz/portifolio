<?php
$title = "Portifólio de Fernando Franciolli";
include 'header.php';                 // (2) Include the header
require './conexao/banco.php';

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


#div-intro {
    padding-left: 12em;
    text-indent: 5em;
}

#btn-ajuda{
  text-align: center; 
}


</style>
<div id="div-intro">
  <table>
    <th>
        <p>Fernando Henrique de Franciolli</p>
          <img src="./imagens/foto_perfil.jpeg" alt="Fernando Franciolli" id="foto" style="width:300px;height:400px;">   
            <p style = "font-size: 17px;">
              Neste site, mostro minhas habilidades e certificações como programador, gosto muito de informática e 
              procuro sempre me aperfeiçoar em suas áreas, tenho grande facilidade de comunicação e relacionamento interpessoal, com habilidade e vontade de trabalhar em equipe.</br>
              Sou muito curioso, proativo, pesquisador autodidata e amante de tecnologia.</br> 
              Conquistei muitos certificados na área de tecnologia com foco em desenvolvimento (HTML, CSS, PHP e SQL) e redes de computadores (Protocolos de comunicação, Switch, Infraestrutura de redes (CCNA 7) e Squid), além de trabalhos desenvolvidos com raspberry e arduino (linguagem de programação C e Bash).</br>
              Atualmente estou me dedicando ao aprendizado de um novo idioma na NewCastle, o Inglês, no qual me encontro no nível de intermediário.</br>
              Desde muito novo me interesso pela área de tecnologia, acompanhando sempre sua evolução e formas de aplicação.</br>
              Acredito que poderei contribuir muito com pesquisas e desenvolvimento tanto pessoal como para a empresa.</br>
              Gosto da ideia de que em informática com esforço e dedicação tudo é possível.
              "Se você quiser me ajudar a melhorar em minhas atividades de informática, ou observou pontos em que posso melhorar o site, por favor clique no botão "Ajudar", desta forma, poderei saber onde devo melhorar."
              Grato.
            </p>
    </th>
  </table>  
</div>

<!-- Button trigger modal -->
<div id="btn-ajuda">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajuda">
  Ajudar
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="ajuda" tabindex="-1" role="dialog" aria-labelledby="ajuda" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="ajuda">Formulário de Ajuda</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form method="POST" action="./controle/insert_ajuda.php">

            <div class="form-group">
              <label for="recipient_nome" class="control-label">Nome:</label>
              <input name="nome" class="form-control" id="nome" onkeypress="return letras();">
            </div>

            <div class="form-group">
              <label for="recipient_nome_emp" class="control-label">Nome da empresa:</label>
              <input name="nome_emp" class="form-control" id="nome_emp" onkeypress="return letras();">
            </div>

            <div class="form-group">
              <label for="recipient_email_emp" class="control-label">E-mail da empresa:</label>
              <input name="email_emp" class="form-control" id="email_emp">
            </div>

            <div class="form-group">
              <label for="recipient_cidade" class="control-label">Cidade:</label>
              <input name="cidade" class="form-control" id="cidade" onkeypress="return letras();">
            </div>

            <div class="form-group">
              <label for="recipient_estado" class="control-label">Estado:</label>
              <select name="estado" class="form-control" id="estado">
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amapá</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Ceará</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Espírito Santo</option>
                      <option value="GO">Goiás</option>
                      <option value="MA">Maranhão</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Pará</option>
                      <option value="PB">Paraíba</option>
                      <option value="PR">Paraná</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rondônia</option>
                      <option value="RR">Roraima</option>
                      <option value="SC">Santa Catarina</option>
                      <option selected value="SP">São Paulo</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                      <option value="EX">Estrangeiro</option>
                  </select>
            </div>

            <div class="form-group">
              <label for="recipient_descricao" class="control-label">Descrição da ajuda:</label>
              <textarea rows="4" cols="50" name="descricao" class="form-control" id="descricao"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
</form>
  </div>
</div>


<script type="text/javascript">
function letras(){
tecla = event.keyCode;
if (tecla >= 48 && tecla <= 57){
return false;
}else{
return true;
}
}

$(document).ready(function() {
  $('.modal').on('hidden.bs.modal', function() {    
    $(this).find('input:text').val('');
  });
});

</script>
<?php
include 'footer.php'
?>
