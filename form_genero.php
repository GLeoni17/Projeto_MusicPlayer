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
    <link rel="stylesheet" href="./css/animations.css" />
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
            <br><br>
                <h3 class="mb-3 font-weight-normal">Cadastro de Gênero</h3><br>
                <input type="text" name="nome_genero" placeholder="Nome do gênero..." required><br><br><br>
                <button class="btn btn-lg btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
</body>
</html>