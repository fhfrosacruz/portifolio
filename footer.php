
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./js/bootstrap.min.js"></script>

<!-- INICIO MODAL CLIENTE -->
<script>
$('#clienteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient_id = button.data('id')
  var recipient_nome = button.data('nome')
  var recipient_nome_emp = button.data('nome_emp')  
  var recipient_email_emp = button.data('email_emp')
  var recipient_cidade = button.data('cidade')
  var recipient_estado = button.data('estado')
  var recipient_descricao = button.data('descricao')

  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Editar Cliente - ' + recipient_id)
  modal.find('#id').val(recipient_id)
  modal.find('#nome').val(recipient_nome)
  modal.find('#nome_emp').val(recipient_nome_emp)
  modal.find('#email_emp').val(recipient_email_emp)  
  modal.find('#cidade').val(recipient_cidade)
  modal.find('#estado').val(recipient_estado)
  modal.find('#descricao').val(recipient_descricao)
})
</script>
<!-- FIM MODAL CLIENTE -->

<div class="container_footer">
  <hr>
  <footer>
    <p align="center" class="muted"><small>Brcharelado em Ciência da Computação pela UNIP em 2020</small></p>
  </footer>
</div>


</body>
</html>
