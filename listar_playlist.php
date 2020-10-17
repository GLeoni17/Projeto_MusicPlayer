<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Playlists</title>
</head>
<body>
    <a href="escolher_registrar.php"><img src="./images/seta_esquerda.png" alt="Retornar ao menu" width="20px" height="20px">Voltar ao menu</a><br><br>
<?php
    include "conexao.php";

    $select = "SELECT * FROM playlist ORDER BY nome";
    $res = mysqli_query($con, $select)
            or die(mysqli_error($con));
    while($row = mysqli_fetch_assoc($res)){
        $id_playlist = $row["id_playlist"];
        $select2 = "SELECT musica.nome as nome_musica, musica.youtube as url_youtube,
                    banda.nome as nome_banda, genero.nome as nome_genero  
                    FROM musica_playlist 
                    INNER JOIN playlist ON musica_playlist.cod_playlist = playlist.id_playlist 
                    INNER JOIN musica ON musica_playlist.cod_musica = musica.id_musica
                    INNER JOIN banda ON musica.cod_banda = banda.id_banda
                    INNER JOIN genero ON banda.cod_genero=genero.id_genero
                    WHERE cod_playlist = '$id_playlist'
                    ORDER BY musica_playlist.id_musica_playlist, playlist.nome, musica.nome";
        $res2 = mysqli_query($con, $select2);
        echo "<b>".$row["nome"]."</b><br><br>";
        while($row2 = mysqli_fetch_assoc($res2)){
            echo $row2["nome_musica"]."(".$row2["nome_banda"].") <br> ".$row2["nome_genero"]." <br> <iframe width='1280' height='480' src='https://www.youtube.com/embed/".$row2["url_youtube"]."' frameborder='0' allow='accelerometer'; autoplay; clipboard-white; encrypted-media; gyroscope; picture-in-picture; allowfullscreen></iframe><br>";
            echo "<br>";
        }
        echo "<hr>"; 
    } 
?>

</body>
</html>