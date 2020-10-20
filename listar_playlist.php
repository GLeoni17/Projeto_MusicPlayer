<?php 
    include "bottom_navbar.php";
    include "funcoes.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Playlists</title>
    
    <link rel="stylesheet" href="./css/listar_playlist.css" />
    <link rel="icon" href="./images/icon.svg" />
</head>
<body>
    <form action="listar_playlist.php" method="post">
        <div class="text-center mb-4 container_centraliza">
            <div class="box">
            <br><br>
            <h1 class="h3 mb-3 font-weight-normal">Listar Playlists</h1>
            <select name="playlist_filtrar">
            <option label="::Filtrar por Playlist::"></option>
                <?php
                    selecionar_playlist();
                ?>
            </select><br><br>
            <button class="btn btn-lg btn-primary">Filtrar</button><br><br>
            <?php
                listar_playlist(); 
            ?>
            </div>
        </div>
    </form>

</body>
</html>