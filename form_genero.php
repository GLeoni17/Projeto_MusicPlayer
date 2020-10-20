<?php
    include "bottom_navbar.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de genero</title>
    <link rel="stylesheet" href="./css/forms.css" />
    <link rel="icon" href="./images/icon.svg" />
    <style>
        input{ 
            text-align: center;
        }
    </style>
</head>
<body>
    <form class="form-signin" action="cadastra_genero.php" method="post">
        <div class="text-center mb-4 container_centraliza">
            <div class="box">
                <br><br><br>
                <h1 class="h3 mb-3 font-weight-normal">Cadastro de Gênero</h1>
                <input type="text" name="nome_genero" placeholder="Nome do gênero..." required><br><br>
                <button class="btn btn-lg btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
</body>
</html>