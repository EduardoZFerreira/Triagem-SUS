<?php
session_start();

$_SESSION['nome'] = $_POST['Nome'];
$_SESSION['email'] = $_POST['Email'];

include 'header.php';

?>
<div class="jumbotron">
  <h1 class="display-4">Agendamento de consulta</h1>
  <p class="lead"> Olá <?php echo $_SESSION['nome'];?>! </p>
  <hr class="my-4">
  <p>Vamos começar recolhendo alguns detalhes para a triagem, e depois marcaremos uma consulta pra você na sua respectiva unidade do SUS!</p>
  
</div>
<form action="agendar.php" method="post">
  <div class="form-group">
    <div class="form-group">
        <label for="exampleInputEmail1">Informe sua idade</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Idade">
    </div>
    <label for="exampleFormControlSelect1">Informe sua faixa de peso</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Até 50Kg</option>
      <option>Entre 50Kg e 60Kg</option>
      <option>Entre 60Kg e 70Kg</option>
      <option>Entre 70Kg e 80Kg</option>
      <option>Entre 80Kg e 90Kg </option>
      <option>Entre 90Kg e 100Kg </option>
      <option>Mais que 100Kg </option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Dê uma breve descrição dos sintomas que você têm sentido</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group form-check-inline">
    <label class="form-check-label" for="exampleCheck1">É alérgico a algum medicamento? </label>
    
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Nao">
    <label class="form-check-label" for="inlineRadio1">Não</label>
    
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Sim">
    <label class="form-check-label" for="inlineRadio1">Sim</label>
  </div>
  <div class="form-group form-check-inline" id="medAlergy">
    <input type="text" class="form-control" id="inputPassword2" placeholder="Nome do medicamento">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Se possui histórico de alguma doença na sua família, por favor nos conte</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Concluir</button>
</form>

<?php
  include 'footer.php';

?>