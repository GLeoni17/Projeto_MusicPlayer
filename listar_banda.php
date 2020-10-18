<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Playlists</title>
</head>
<body>
    <a href="escolher_registrar.php"><img src="./images/seta_esquerda.png" alt="Retornar ao menu" width="20px" height="20px">Voltar ao menu</a><br><br>
    <form action="listar_banda.php" method="post">
        <select name="genero_filtrar">
        <option label="Gênero da Banda"></option>
        <?php
            include "conexao.php";
            $select = "SELECT * FROM genero ORDER BY nome";
            $res = mysqli_query($con, $select);
            while ($row = mysqli_fetch_assoc($res)){
                $id = $row['id_genero'];
                $nome = $row['nome'];
                echo "<option value='$id'>$nome</option>";
            }
        ?>
        </select>
        <input type="text" name="banda_filtrar" placeholder="Filtrar vizualização de banda...">
        <button>Filtrar</button>
    </form>
<?php
    include "conexao.php";
    $select = "SELECT banda.nome as nome_banda, genero.nome as nome_genero, genero.id_genero as id_genero FROM banda
               INNER JOIN genero ON banda.cod_genero=genero.id_genero ";

    if($_POST){
        $select .= "WHERE (1=1) ";
        if($_POST["banda_filtrar"]){
            $banda_filtrar = $_POST["banda_filtrar"];
            $select .= "AND banda.nome like '%$banda_filtrar%' ";
        }
        if($_POST["genero_filtrar"]){
            $genero_filtrar = $_POST["genero_filtrar"];
            $select .= "AND genero.id_genero like '%$genero_filtrar%' ";
        }
    }           

    $select .= "ORDER BY banda.nome, genero.nome";
    $res = mysqli_query($con, $select);
    echo "<ul>";
    while($row = mysqli_fetch_assoc($res)){
        echo "<li>".$row["nome_banda"]." <b>(".$row["nome_genero"].")</b></li>";
    }
    echo "</ul>";
?>
</body>
</html>