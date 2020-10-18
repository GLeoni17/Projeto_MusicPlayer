<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Musicas</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#genero_filtrar").change(function(){
                var genero = $("#genero_filtrar").val();
                var bandas_filtrado = "<option label='Banda da Musica'></option>";
                $.post("listar_banda_musica.php", {"id":genero}, function(res){
                    $.each(res, function(indice, valor){
                        bandas_filtrado += "<option value='"+valor.id_banda+"'>"+valor.nome+"</option>";
                    });
                    $("#banda_filtrar").html(bandas_filtrado);
                });
            });
        });
    </script>
</head>
<body>
    <a href="escolher_registrar.php"><img src="./images/seta_esquerda.png" alt="Retornar ao menu" width="20px" height="20px">Voltar ao menu</a><br><br>
    <form action="listar_musica.php" method="post">
        <select name="genero_filtrar" id="genero_filtrar">
            <option label="Gênero da Musica"></option>
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
        <br>
        <select name="banda_filtrar" id="banda_filtrar">
            <option label="Banda da Musica"></option>
        </select>
        <input type="text" name="musica_filtrar" placeholder="Filtrar vizualização de musica...">
        <button>Filtrar</button>
    </form>
<?php
    include "conexao.php";
    $select = "SELECT musica.nome as nome_musica, banda.nome as nome_banda, genero.nome as nome_genero, 
               genero.id_genero as id_genero, banda.id_banda as id_banda FROM musica
               INNER JOIN banda ON musica.cod_banda=banda.id_banda 
               INNER JOIN genero ON banda.cod_genero=genero.id_genero ";

    if($_POST){
        $select .= "WHERE 1=1 ";
        if($_POST["genero_filtrar"]){
            $genero_filtrar = $_POST["genero_filtrar"];
            $select .= "AND id_genero like '%$genero_filtrar%' ";
        }
        if($_POST["banda_filtrar"]){
            $banda_filtrar = $_POST["banda_filtrar"];
            $select .= "AND id_banda like '%$banda_filtrar%' ";
        }
        if($_POST["musica_filtrar"] != ""){
            $musica_filtrar = $_POST["musica_filtrar"];
            $select .= "AND musica.nome like '%$musica_filtrar%' ";
        }
    }

    $select .= "ORDER BY musica.nome, banda.nome, genero.nome";

    $res = mysqli_query($con, $select);
    echo "<ul>";
    while($row = mysqli_fetch_array($res)){
        echo "<li>::".$row["nome_musica"].":: ".$row["nome_banda"]." (<b>".$row["nome_genero"]."</b>)</li>";
    }
    echo "</ul>";
?>
</body>
</hmtl>