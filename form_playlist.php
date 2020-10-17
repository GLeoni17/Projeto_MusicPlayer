<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Playlist</title>
</head>
<body>
    <form action="cadastrar_playlist.php" method="post">
        <input type="text" name="nome_playlist" placeholder="Nome da Playlist..."><br>
        <?php 
        include "conexao.php";
            $select = "SELECT musica.nome as nome_musica, musica.id_musica as id_musica, banda.nome as nome_banda, genero.nome as nome_genero FROM musica
            INNER JOIN banda ON musica.cod_banda=banda.id_banda INNER JOIN genero ON banda.cod_genero=genero.id_genero 
            ORDER BY musica.nome, banda.nome, genero.nome";
            $res = mysqli_query($con, $select);
            while($row = mysqli_fetch_array($res)){
                echo "<input type='checkbox' name= 'nome_musica[]' value=".$row["id_musica"]."><b>".$row["nome_musica"]."</b> - ".$row["nome_banda"]." (".$row["nome_genero"].") <br>";
            }
        ?>
        <button>Cadastrar</button>
    </form>
</body>
</html>