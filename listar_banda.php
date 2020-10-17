<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Playlists</title>
</head>
<body>
    <a href="escolher_registrar.php"><img src="./images/seta_esquerda.png" alt="Retornar ao menu" width="20px" height="20px">Voltar ao menu</a><br><br>
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
</body>
</html>