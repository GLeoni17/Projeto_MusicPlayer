<?php
    include "bottom_navbar.php";
    include "funcoes.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Bandas</title>
    <link rel="stylesheet" href="./css/listar.css" />
    <link rel="icon" href="./images/icon.svg" />
</head>
<body>
    <form class="form-signin" action="listar_banda.php" method="post">
        <div class="text-center mb-4 container_centraliza">
            <div class="box">
                <br><br>
                <h3 class="mb-3 font-weight-normal">Listar Bandas</h3>
                <select name="genero_filtrar">
                    <option label="Gênero da Banda"></option>
                    <?php
                        listar_genero_select();
                    ?>
                </select><br><br>
                <input type="text" name="banda_filtrar" placeholder="Filtrar bandas..."><br><br>
                <button class="btn btn-lg btn-primary">Filtrar</button><br><br>
                <?php
                    listar_banda()
                ?>
                
            </div>
        </div>
        
    </form>

</body>
</html>