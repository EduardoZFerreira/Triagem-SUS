<?php
session_start();

include 'header.php';

?>
<div class="jumbotron">
  <h1 class="display-4">Renovar receita de medicamento</h1>
  <p class="lead">Basta enviar uma cópia da receita antiga, o médico responsável vai renovar, ou marcar uma consulta se necessário.</p>
  
</div>
<form>
<div class="form-group">
    <label for="exampleFormControlFile1">Faça upload de sua última receita</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-primary">Concluir</button>
</form>

<?php
  include 'footer.php';
?>