<?php 
    include "conexao.php";
    $nome = $_POST["nome_playlist"];
    $id_musica = $_POST["nome_musica"];
    $insert = "INSERT INTO playlist (
                                        nome
                                    ) VALUES (
                                        '$nome'
                                    )";
    mysqli_query($con, $insert);

    $select = "SELECT id_playlist FROM playlist WHERE nome = '".$nome."'";
    $res = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($res);
    $id_playlist = $row["id_playlist"];

    foreach($id_musica as $id){
        $insert = "INSERT INTO musica_playlist (
                                                    cod_musica,
                                                    cod_playlist
                                                ) VALUES (
                                                    '$id',
                                                    '$id_playlist'
                                                )";
        mysqli_query($con, $insert);
    }

?>
<!DOCTYPE html>
    <script>
        window.location.href = "escolher_registrar.php";
    </script>
</html>  