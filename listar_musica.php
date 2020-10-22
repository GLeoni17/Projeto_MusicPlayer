<?php
    include "bottom_navbar.php";
    include "funcoes.php";
?>

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
    <style>
        <?php echo ".box{
            height:".listar_musicas_tamanho()."px
        }
        ";
        ?>
    </style>
    <link rel="stylesheet" href="./css/listar.css" />
    <link rel="icon" href="./images/icon.svg" />
</head>
<body>
    <form class="form-signin" action="listar_musica.php" method="post">
        <div class="text-center mb-4 container_centraliza">
            <div class="box">
                <br><br>
                <h1 class="h3 mb-3 font-weight-normal">Listar Musicas</h1>
                <select name="genero_filtrar" id="genero_filtrar">
                    <option label="Gênero da Musica"></option>
                    <?php
                        listar_genero_select();
                    ?>
                </select>
                <br><br>
                <select name="banda_filtrar" id="banda_filtrar">
                    <option label="Banda da Musica"></option>
                </select>
                <br><br>
                <input type="text" name="musica_filtrar" placeholder="Filtrar musicas..."><br><br>
                <button class="btn btn-lg btn-primary">Filtrar</button><br><br>
                <?php
                    listar_musicas();
                ?>
                
            </div>
        </div>
        
    </form>

</body>
</hmtl>