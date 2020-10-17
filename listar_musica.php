<?php
    include "conexao.php";
    $select = "SELECT musica.nome as nome_musica, banda.nome as nome_banda, genero.nome as nome_genero FROM musica
               INNER JOIN banda ON musica.cod_banda=banda.id_banda INNER JOIN genero ON banda.cod_genero=genero.id_genero 
               ORDER BY musica.nome, banda.nome, genero.nome";
    $res = mysqli_query($con, $select);
    while($row = mysqli_fetch_array($res)){
        echo "<b>".$row["nome_musica"]."</b> - ";
        echo "<b>".$row["nome_banda"]."</b> - ";
        echo "<b>".$row["nome_genero"]."</b> |";
    }
?>