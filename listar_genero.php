<?php 
    include "bottom_navbar.php";
    include "funcoes.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Genero</title>
    <link rel="stylesheet" href="./css/listar.css" />
    <link rel="icon" href="./images/icon.svg" />
</head>
<style>
        <?php echo ".box{
            height:".listar_genero_tamanho()."px
        }
        ";
        ?>
</style>
<body>
    <form class="form-signin" action="listar_genero.php" method="post">
        <div class="text-center mb-4 container_centraliza">
            <div class="box">
                    <br><br>
                    <h1 class="h3 mb-3 font-weight-normal">Listar Gêneros</h1>
                    <input type="text" name="genero_filtrar" placeholder="Filtrar gênero..."><br>
                    <?php
                        listar_genero();
                    ?>
                    <br>
                    <button class="btn btn-lg btn-primary">Filtrar</button>
            </div>
        </div>
    </form>
    
    
</body>
</html>