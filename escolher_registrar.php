<?php
    include "bottom_navbar.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha o que registrar</title>
    <link rel="icon" href="./images/icon.svg" />

</head>
<body>
    <section class="text-center">
        <div class="container" id="Cadastre_musicas">

        <?php 
            /*include "conexao.php";
            $select = "SELECT id_musica FROM musica ORDER BY id_musica DESC";
            $res = mysqli_query($con, $select);
            $maior_num = mysqli_fetch_assoc($res);
            if ($maior_num["id_musica"]){
                $musica = rand(1, $maior_num["id_musica"]);
                $select = "SELECT youtube FROM musica WHERE id_musica like '$musica'";
                $res = mysqli_query($con, $select);
                $url = mysqli_fetch_assoc($res);
                echo "<iframe width='1280' height='480' class='text-center' align='middle' src='https://www.youtube.com/embed/".$url["youtube"]."' 
                        frameborder='0' allow='accelerometer'; autoplay; clipboard-white; encrypted-media; gyroscope; 
                        picture-in-picture; allowfullscreen></iframe>
                        </div>";
            }*/
        ?>
        </div>
    
</body>
</html>