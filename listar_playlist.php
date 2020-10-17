<?php
    // Nome playlist 
    // Nome musica
    // Nome banda
    // Nome Genero
    // URL com iframe
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
            echo $row2["nome_musica"]."(".$row2["nome_banda"].") <br> ".$row2["nome_genero"]." <br> URL: ".$row2["url_youtube"]." <br>";
            echo "<br>";
        }
        echo "<hr>"; 
    } 
    
    //$select2 = "SELECT * FROM musica_playlist INNER JOIN playlist ON musica_playlist.cod_playlist = playlist.id_playlist WHERE cod_playlist = '1'"







    /*
        $select = "SELECT playlist.nome as nome_playlist, musica.nome as nome_musica, banda.nome as nome_banda, 
               genero.nome as nome_genero, musica.youtube as url_youtube FROM musica_player 
               INNER JOIN playlist ON musica_playlist.cod_playlist=playlist.id_playlist
               INNER JOIN musica ON playlist_musica.cod_musica=musica.id_musica
               INNER JOIN banda ON musica.cod_banda=banda.id_banda 
               INNER JOIN genero ON banda.cod_genero=genero.id_genero 
               ORDER BY playlist.nome, musica.nome, banda.nome, genero.nome";
    $res = mysqli_query($con, $select);
    while($row = mysqli_fetch_array($res)){
        echo "<b>".$row["nome_playlist"]."</b> - ";
        echo "<b>".$row["nome_banda"]."</b> - ";
        echo "<b>".$row["nome_genero"]."</b> |";
        echo "<b>".$row["nome_musica"]."</b> - ";
        echo "<b>".$row["nome_banda"]."</b> - ";
        echo "<b>".$row["nome_genero"]."</b> |";
    }
    */
?>
