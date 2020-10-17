<?php
    include "conexao.php";
    $select = "SELECT banda.nome as nome_banda, genero.nome as nome_genero FROM banda
               INNER JOIN genero ON banda.cod_genero=genero.id_genero ORDER BY banda.nome, genero.nome";
    $res = mysqli_query($con, $select);
    while($row = mysqli_fetch_array($res)){
        echo "<b>".$row["nome_banda"]."</b> - ";
        echo "<b>".$row["nome_genero"]."</b> |";
    }
?>