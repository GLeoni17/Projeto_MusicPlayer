<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cabecalho.css" />
    <script src="./jquery-3.5.1.min.js"></script>
    <script>
        
        $(document).ready(function() {
            var botao = $('.bt1');
            var dropDown = $('.ul-cadastro'); 
            var botao2 = $('.bt2');
            var dropDown2 = $('.ul-listar');    

            botao.on('click', function(event){
                dropDown.stop(true,true).slideToggle();
                event.stopPropagation();
            });
            
            
            botao2.on('click', function(event){
                dropDown2.stop(true,true).slideToggle();
                event.stopPropagation();
            });
        });
    </script>
</head>
<body>
    <nav>
        <ul id="ul-principal">
            <li class="li-p">
            <a href="javascript://" class="bt1">Cadastrar</a>
                <ul class="ul-cadastro">
                    <li><a class="a_cabecalho" href="registrar_genero.php">Genero</a></li>
                    <li><a class="a_cabecalho" href="">Banda</a></li>
                    <li><a class="a_cabecalho" href="">Musica</a></li>
                    <li><a class="a_cabecalho" href="">Playlist</a></li>
                </ul>
            </li>
            <li class="li-p">
            <a href="javascript://" class="bt2">Listar</a>
                <ul class="ul-listar">
                    <li><a class="a_cabecalho" href="">Genero</a></li>
                    <li><a class="a_cabecalho" href="">Banda</a></li>
                    <li><a class="a_cabecalho" href="">Musica</a></li>
                    <li><a class="a_cabecalho" href="">Playlist</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</body>
</html>
        
