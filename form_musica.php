<?php
    include "bottom_navbar.php";
    include "funcoes.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Musica</title>
    <script src="./jquery-3.5.1.min.js"></script>
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
    <link rel="stylesheet" href="./css/forms.css" />
    <link rel="icon" href="./images/icon.svg" />
</head>
<body>
    <form class="form-signin" action="cadastra_musica.php" method="post">
    <div class="text-center mb-4 container_centraliza">
        <div class="box_musica">
            <br>
            <h1 class="h3 mb-3 font-weight-normal">Cadastro de Musica</h1>
            <input type="text" name="nome_musica" placeholder="Nome da musica..."><br><br>
            <select name="nome_genero" id="nome_genero">
                <option label="Gênero da banda..."></option>
                <?php 
                    form_musica();
                ?>
            </select><br><br>
            <select name="nome_banda" id="nome_banda">
                <option label="Nome da banda..."></option> 
            </select> <br><br>
            <textarea name="url" cols="30" rows="10" placeholder="Copie e cole do youtube o código de incorporação do vídeo da música..."></textarea><br><br>
            <button class="btn btn-lg btn-primary">Cadastrar</button>
        </div>
    </div>
    </form>
    
</body>
</html>