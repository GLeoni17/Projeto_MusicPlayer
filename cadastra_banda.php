<?php
    include "conexao.php";
    $banda = $_POST["nome_banda"];
    $id_genero = $_POST["nome_genero"];
    $insert = "INSERT INTO banda (
                                    nome,
                                    cod_genero
                                 ) VALUES (
                                    '$banda',
                                    '$id_genero'
                                 )";
    mysqli_query($con, $insert)
            or die(mysqli_error($con));
?>
<!DOCTYPE html>
<script>
    window.location.href = "escolher_registrar.php";
</script>
</html>