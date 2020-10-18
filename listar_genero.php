<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Genero</title>
</head>
<body>
    <a href="escolher_registrar.php"><img src="./images/seta_esquerda.png" alt="Retornar ao menu" width="20px" height="20px">Voltar ao menu</a><br><br>
    <form action="listar_genero.php" method="post">
        <input type="text" name="genero_filtrar" placeholder="Filtrar vizualização de genero...">
        <button>Filtrar</button>
    </form>
    
    <?php
        include "conexao.php";
        $select = "SELECT nome FROM genero ";

        if($_POST) {
            $genero_filtrar = $_POST["genero_filtrar"];
            $select.="WHERE nome like '%$genero_filtrar%' ";
        }
        $select.="ORDER BY nome";

        $res = mysqli_query($con, $select)
                or die(mysqli_error($con));
        echo "<ul>";
        while($row = mysqli_fetch_array($res)){
            echo "<li>".$row["nome"]."</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>