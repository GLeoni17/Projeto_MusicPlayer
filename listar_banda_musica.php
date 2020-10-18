<?php 
    header("Content-Type: application/json");
    include "conexao.php";

    $id = $_POST['id'];

    $select="SELECT nome, id_banda FROM banda WHERE cod_genero = '$id' ORDER BY nome";

    $res = mysqli_query($con, $select);
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>