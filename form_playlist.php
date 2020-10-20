<?php 
include "bottom_navbar.php"; 
include "funcoes.php"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Playlist</title>
    <link rel="stylesheet" href="./css/forms.css" />
    <link rel="icon" href="./images/icon.svg" />
    <style>
        .box_playlist{
            width: 325px;
            background: #fff;
            border-radius: 5px;
            <?php
                $tamanho = form_playlist_tamanho();
                echo "height: ".$tamanho."px";
            ?>
        }
    </style>
    
</head>
<body>
    <form class="form-signin" action="cadastrar_playlist.php" method="post">
    <div class="text-center mb-4 container_centraliza">
        <div class="box_playlist">
        <br>
        <h1 class="h3 mb-3 font-weight-normal">Cadastro de Playlist</h1>
        <input type="text" name="nome_playlist" placeholder="Nome da Playlist...">
        <div class="rolagem">
            <?php 
                form_playlist();
            ?>
        </div>
        <br><br>
        <button class="btn btn-lg btn-primary">Cadastrar</button>
        </div>
    </div>
    </form>
</body>
</html>