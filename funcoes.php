<?php 

    //---Banda Form---

    function form_banda(){
        include "conexao.php";
        $select = "SELECT * FROM genero ORDER BY nome";
        $res = mysqli_query($con, $select)
            or die(mysqli_error($con));
        while($row = mysqli_fetch_assoc($res)){
            echo "<option value=".$row["id_genero"].">".$row["nome"]."</option>";
        }
    }

    //---Musica Form---

    function form_musica(){
        include "conexao.php";
        $select = "SELECT * FROM genero ORDER BY nome";
        $res = mysqli_query($con, $select);
        while ($row = mysqli_fetch_assoc($res)){
            echo "<option value=".$row["id_genero"].">".$row["nome"]."</option>";
        }
    }

    //---Playlist Form---

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

    //---Genero listar---

    function listar_genero(){
        include "conexao.php";
                    $select = "SELECT nome FROM genero ";

                    if($_POST) {
                        $genero_filtrar = $_POST["genero_filtrar"];
                        $select.="WHERE nome like '%$genero_filtrar%' ";
                    }
                    $select.="ORDER BY nome";

                    $res = mysqli_query($con, $select)
                            or die(mysqli_error($con));
                    echo "<ul class='ul_listar'>";
                    while($row = mysqli_fetch_array($res)){
                        echo "<li>".$row["nome"]."</li>";
                    }
                    echo "</ul>";
    }

    //---Banda Listar---

    function listar_banda(){
        include "conexao.php";
        $select = "SELECT banda.nome as nome_banda, genero.nome as nome_genero, genero.id_genero as id_genero FROM banda
               INNER JOIN genero ON banda.cod_genero=genero.id_genero ";

        if($_POST){
            $select .= "WHERE (1=1) ";
            if($_POST["banda_filtrar"]){
                $banda_filtrar = $_POST["banda_filtrar"];
                $select .= "AND banda.nome like '%$banda_filtrar%' ";
            }
            if($_POST["genero_filtrar"]){
                $genero_filtrar = $_POST["genero_filtrar"];
                $select .= "AND genero.id_genero like '%$genero_filtrar%' ";
            }
        }           

        $select .= "ORDER BY banda.nome, genero.nome";
        $res = mysqli_query($con, $select);
        echo "<ul class='ul_listar'>";
        while($row = mysqli_fetch_assoc($res)){
            echo "<li>".$row["nome_banda"]." <b>(".$row["nome_genero"].")</b></li>";
        }
        echo "</ul>";
    }

    function listar_genero_select(){
        include "conexao.php";
            $select = "SELECT * FROM genero ORDER BY nome";
            $res = mysqli_query($con, $select);
            while ($row = mysqli_fetch_assoc($res)){
                $id = $row['id_genero'];
                $nome = $row['nome'];
                echo "<option value='$id'>$nome</option>";
            }
            
    }

    //---Musica Listar---
    function listar_musicas(){
        include "conexao.php";
        $select = "SELECT musica.nome as nome_musica, banda.nome as nome_banda, genero.nome as nome_genero, 
                genero.id_genero as id_genero, banda.id_banda as id_banda FROM musica
                INNER JOIN banda ON musica.cod_banda=banda.id_banda 
                INNER JOIN genero ON banda.cod_genero=genero.id_genero ";

        if($_POST){
            $select .= "WHERE 1=1 ";
            if($_POST["genero_filtrar"]){
                $genero_filtrar = $_POST["genero_filtrar"];
                $select .= "AND id_genero like '%$genero_filtrar%' ";
            }
            if($_POST["banda_filtrar"]){
                $banda_filtrar = $_POST["banda_filtrar"];
                $select .= "AND id_banda like '%$banda_filtrar%' ";
            }
            if($_POST["musica_filtrar"] != ""){
                $musica_filtrar = $_POST["musica_filtrar"];
                $select .= "AND musica.nome like '%$musica_filtrar%' ";
            }
        }

        $select .= "ORDER BY musica.nome, banda.nome, genero.nome";

        $res = mysqli_query($con, $select);
        echo "<ul class='ul_listar'>";
        while($row = mysqli_fetch_array($res)){
            echo "<li>::".$row["nome_musica"].":: ".$row["nome_banda"]." (<b>".$row["nome_genero"]."</b>)</li>";
        }
        echo "</ul>";
    }

    function listar_musicas_tamanho(){
        include "conexao.php";
        $select = "SELECT musica.nome as nome_musica, banda.nome as nome_banda, genero.nome as nome_genero, 
                genero.id_genero as id_genero, banda.id_banda as id_banda FROM musica
                INNER JOIN banda ON musica.cod_banda=banda.id_banda 
                INNER JOIN genero ON banda.cod_genero=genero.id_genero ";

        if($_POST){
            $select .= "WHERE 1=1 ";
            if($_POST["genero_filtrar"]){
                $genero_filtrar = $_POST["genero_filtrar"];
                $select .= "AND id_genero like '%$genero_filtrar%' ";
            }
            if($_POST["banda_filtrar"]){
                $banda_filtrar = $_POST["banda_filtrar"];
                $select .= "AND id_banda like '%$banda_filtrar%' ";
            }
            if($_POST["musica_filtrar"] != ""){
                $musica_filtrar = $_POST["musica_filtrar"];
                $select .= "AND musica.nome like '%$musica_filtrar%' ";
            }
        }

        $select .= "ORDER BY musica.nome, banda.nome, genero.nome";

        $res = mysqli_query($con, $select)
            or die(mysqli_error($con));
        $tamanho = 350;
        while($row = mysqli_fetch_array($res)){
            $tamanho = $tamanho + 55;
        }
        return $tamanho;
    }

    //---Playlist Listar---

    function listar_playlist(){
        include "conexao.php";

        $select = "SELECT * FROM playlist ";
        
        if($_POST){
            $playlist_filtrar = $_POST['playlist_filtrar'];
            $select .= "WHERE playlist.id_playlist like '%$playlist_filtrar%' ";
        }
        $testehr = 0;
        $select .= "ORDER BY nome";
        $res = mysqli_query($con, $select)
                or die(mysqli_error($con));
        while($row = mysqli_fetch_assoc($res)){

            if($testehr>0){
                echo "<hr>";
            }

            $id_playlist = $row["id_playlist"];
            $select2 = "SELECT playlist.nome as nome_playlist, musica.nome as nome_musica, musica.youtube as url_youtube,
                        banda.nome as nome_banda, genero.nome as nome_genero  
                        FROM musica_playlist 
                        INNER JOIN playlist ON musica_playlist.cod_playlist = playlist.id_playlist 
                        INNER JOIN musica ON musica_playlist.cod_musica = musica.id_musica
                        INNER JOIN banda ON musica.cod_banda = banda.id_banda
                        INNER JOIN genero ON banda.cod_genero=genero.id_genero
                        WHERE cod_playlist = '$id_playlist' ";

            $select2 .= "ORDER BY musica_playlist.id_musica_playlist, playlist.nome, musica.nome";
            $res2 = mysqli_query($con, $select2);
            echo "<h2><b>".$row["nome"]."</b></h2><br>";
            while($row2 = mysqli_fetch_assoc($res2)){
                
                echo $row2["nome_musica"]."(<b>".$row2["nome_banda"]."</b>) <br> ".$row2["nome_genero"]." <br> <iframe width='400' height='200' src='https://www.youtube.com/embed/".$row2["url_youtube"]."' frameborder='0' allow='accelerometer'; autoplay; clipboard-white; encrypted-media; gyroscope; picture-in-picture; allowfullscreen></iframe><br>";
                echo "<br>";
            }
            $testehr++; 
        }
    }

    function selecionar_playlist(){
        include "conexao.php";
        $select = "SELECT * FROM playlist ORDER BY nome";
        $res = mysqli_query($con, $select);
        while ($row = mysqli_fetch_assoc($res)){
            $id = $row['id_playlist'];
            $nome = $row['nome'];
            echo "<option value='$id'>$nome</option>";
        }
    }

    function listar_playlist_tamanho(){
        include "conexao.php";

        $select = "SELECT * FROM playlist ";
        
        if($_POST){
            $playlist_filtrar = $_POST['playlist_filtrar'];
            $select .= "WHERE playlist.id_playlist like '%$playlist_filtrar%' ";
        }

        $select .= "ORDER BY nome";
        $res = mysqli_query($con, $select)
                or die(mysqli_error($con));
        $tamanho = 600;
        while($row = mysqli_fetch_assoc($res)){
            $id_playlist = $row["id_playlist"];
            $select2 = "SELECT playlist.nome as nome_playlist, musica.nome as nome_musica, musica.youtube as url_youtube,
                        banda.nome as nome_banda, genero.nome as nome_genero  
                        FROM musica_playlist 
                        INNER JOIN playlist ON musica_playlist.cod_playlist = playlist.id_playlist 
                        INNER JOIN musica ON musica_playlist.cod_musica = musica.id_musica
                        INNER JOIN banda ON musica.cod_banda = banda.id_banda
                        INNER JOIN genero ON banda.cod_genero=genero.id_genero
                        WHERE cod_playlist = '$id_playlist' ";

            $select2 .= "ORDER BY musica_playlist.id_musica_playlist, playlist.nome, musica.nome";
            $tamanho = $tamanho + 600;
            $res2 = mysqli_query($con, $select2);
            while($row2 = mysqli_fetch_assoc($res2)){
                $tamanho = $tamanho + 300;
            }
            return $tamanho;
        }
    }
?>