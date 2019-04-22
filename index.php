<?php
session_start();
  include 'header.php';
?>
        <div class="logo-sus col-md-4"><img src="res/imagens/sus2.png" alt=""></div>
        <form action="inicio.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nome</label>
                  <input type="text" class="form-control" name="Nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" name="Email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Senha</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Endereço completo</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Rua Paulo Malschitzki, nº 10">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Cidade</label>
                  <input type="text" class="form-control" placeholder="Joinville">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Bairro</label>
                  <select id="inputState" class="form-control">
                    <option selected>Selecione seu bairro...</option>
                    <option>Bom Retiro</option>
                    <option>Centro</option>
                    <option>São Marcos</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">CEP</label>
                  <input type="text" class="form-control" placeholder="89000-000">
                </div>
              </div>              
              <button type="submit" class="btn btn-primary">Concluir Cadastro</button>
        </form>
<?php
  include 'footer.php';

  
session_destroy();
?>