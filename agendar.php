<?php
session_start();

include 'header.php';

?>
<div class="jumbotron">
  <h1 class="display-4">Recebemos sua solicitaçã!</h1>
  <p class="lead">Iremos avaliar e marcar a consulta pra você, fique de olho na plataforma!</p>
  <hr class="my-4">
  <p>Você também vai receber detalhes por e-mail, e podemos ligar pra você pra confirmar!</p>
</div>
</div>

<?php


    include 'footer.php';


    $message = "Olá ". $_SESSION['nome'] ."! Obrigado por participar em nosso exemplo de idéia de inovação! <br>";
    $message .= "<strong> Assinado: Equipe da triagem online do SUS! </strong> <br>";
    $message .= "<strong> Amanda </strong> <br>";
    $message .= "<strong> Eduardo Ferreira </strong> <br>";
    $message .= "<strong> Eduardo Maurício </strong> <br>";
    $message .= "<strong> Everton </strong> <br>";    
    $message .= "<strong> Franciele </strong> <br>";
    $message .= "<strong> Thaysi </strong> <br>";
    

    mail($_SESSION['email'], 'Não responder', $message);

session_destroy();
?>