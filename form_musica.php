<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Musica</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#nome_genero").change(function(){
                var id=$("#nome_genero").val();
                $.post("listar_banda_musica.php", {"id":id}, function(valores){
                    var option = "<option label='Nome da banda...'></option> "
                    $.each(valores, function(indice, valor){
                        option+="<option value="+valor.id_banda+"> "+valor.nome+" </option>";
                    });
                    $("#nome_banda").html(option);
                });
            });
        });
    </script>
</head>
<body>
    <form action="cadastra_musica.php" method="post">
        <input type="text" name="nome_musica" placeholder="Nome da musica..."><br>
        <select name="nome_genero" id="nome_genero">
            <option label="Genero da banda..."></option>
            <?php 
                include "conexao.php";
                $select = "SELECT * FROM genero ORDER BY nome";
                $res = mysqli_query($con, $select);
                while ($row = mysqli_fetch_array($res)){
                    echo "<option value=".$row["id_genero"].">".$row["nome"]."</option>";
                }
            ?>
        </select><br>
        <select name="nome_banda" id="nome_banda">
            <option label="Nome da banda..."></option> 
        </select> <br>
        <textarea name="url" cols="30" rows="10" placeholder="Copie e cole do youtube o código de incorporação do vídeo da música..."></textarea><br>
        <button>Cadastrar</button>
    </form>
</body>
</html>