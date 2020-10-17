<?php
    $host = "localhost";
    $user = "root";
    $password = "usbw";
    $db = "musicplayer";
    if (!$con = mysqli_connect($host, $user, $password, $db)){
        echo "Erro ao conectar";
    }
?>