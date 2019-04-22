<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="res/js/jquery.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="res/css/main.css">
    <title>Sistema de Triagem Online</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
            <img src="res/imagens/sus2.png" width="60" height="30" class="d-inline-block align-top" alt="">
            Triagem Online
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consultas.php">Minhas consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="receita.php">Renovar Receita</a>
                </li>
                </ul>
                <?php 
                if(isset($_SESSION['nome']))
                {
                ?>
                <span class="navbar-text">
                Bem Vindo <?php echo $_SESSION['nome']; ?>!
                </span>
                <?php 
                }
                ?>
            </div>
        </nav>