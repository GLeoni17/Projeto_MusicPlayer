<?php
    include "conexao.php";
    $nome = $_POST["nome_musica"];
    $banda = $_POST["nome_banda"];
    $url = $_POST["url"];
    $insert = "INSERT INTO musica(
                                nome,
                                cod_banda,
                                youtube
                            ) VALUES (
                                '$nome',
                                '$banda',
                                '$url'
                            )";
    mysqli_query($con, $insert)
        or die(mysqli_error($con));
?>
<!DOCTYPE html>
    <script>
        window.location.href = "escolher_registrar.php";
    </script>
</html>  