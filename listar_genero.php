<?php
    include "conexao.php";
    $select = "SELECT nome FROM genero ORDER BY nome";
    $res = mysqli_query($con, $select)
            or die(mysqli_error($con));
    while($row = mysqli_fetch_array($res)){
        echo "<b>".$row["nome"]."</b> |";
    }
?>