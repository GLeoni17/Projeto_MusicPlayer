<?php 

    function form_banda(){
        include "conexao.php";
        $select = "SELECT * FROM genero ORDER BY nome";
        $res = mysqli_query($con, $select)
            or die(mysqli_error($con));
        while($row = mysqli_fetch_assoc($res)){
            echo "<option value=".$row["id_genero"].">".$row["nome"]."</option>";
        }
    }

    function form_musica(){
        include "conexao.php";
        $select = "SELECT * FROM genero ORDER BY nome";
        $res = mysqli_query($con, $select);
        while ($row = mysqli_fetch_assoc($res)){
            echo "<option value=".$row["id_genero"].">".$row["nome"]."</option>";
        }
    }

    function form_playlist(){
        include "conexao.php";
        $select = "SELECT musica.nome as nome_musica, musica.id_musica as id_musica, banda.nome as nome_banda, genero.nome as nome_genero FROM musica
                   INNER JOIN banda ON musica.cod_banda=banda.id_banda INNER JOIN genero ON banda.cod_genero=genero.id_genero 
                   ORDER BY musica.nome, banda.nome, genero.nome";
        $res = mysqli_query($con, $select);
        while($row = mysqli_fetch_assoc($res)){
            echo "<br>";
            echo "<input type='checkbox' name= 'nome_musica[]' value=".$row["id_musica"]."><b> ".$row["nome_musica"]."</b> - ".$row["nome_banda"]." (".$row["nome_genero"].") <br>";
        }
    }

    function form_playlist_tamanho(){
        include "conexao.php";
        $select = "SELECT musica.nome as nome_musica, musica.id_musica as id_musica, banda.nome as nome_banda, genero.nome as nome_genero FROM musica
                   INNER JOIN banda ON musica.cod_banda=banda.id_banda INNER JOIN genero ON banda.cod_genero=genero.id_genero 
                   ORDER BY musica.nome, banda.nome, genero.nome";
        $res = mysqli_query($con, $select);
        $tamanho = 225;
        while($row = mysqli_fetch_assoc($res)){
            $tamanho = $tamanho + 50;
        }
        return $tamanho;
    }
?>