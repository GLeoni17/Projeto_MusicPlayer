<?php
    include "conexao.php";
    $nome = $_POST["nome_genero"];
    $insert = "INSERT INTO genero(
                                nome
                           ) VALUES(
                               '$nome'
                           )";
    mysqli_query($con, $insert)
            or die(mysqli_error($con));                           
?>
<!DOCTYPE html>
<script>
    window.location.href = "escolher_registrar.php";
</script>
</html>