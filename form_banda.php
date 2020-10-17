<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Banda</title>
</head>
<body>
    <form action="cadastra_banda.php" method="post">
        <input type="text" name="nome_banda" placeholder="Nome da banda..."> <br>
        <select name="nome_genero">
            <option label="Selecione um genero"></option>
            <?php 
                include "conexao.php";
                $select = "SELECT * FROM genero ORDER BY nome";
                $res = mysqli_query($con, $select)
                        or die(mysqli_error($con));
                while($row = mysqli_fetch_array($res)){
                    echo "<option value=".$row["id_genero"].">".$row["nome"]."</option>";
                }
            ?>
        </select>
        <br>
        <button>Cadastrar</button>
    </form>
</body>
</html>