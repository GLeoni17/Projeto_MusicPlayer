<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./images/icon.svg" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    

</head>
<style>
    nav{
        background-color:#C1CDCD;
        -webkit-box-shadow: 0 5px 2px -6px rgba(0,0,0,0.75);
        -moz-box-shadow: 0 5px 2px -6px rgba(0,0,0,0.75);
        box-shadow: 0 8px 10px -6px rgba(0,0,0,0.75);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
</style>
<body>

    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="index.php"><img src="./images/icon.svg" alt="Icone bottom bar" width="30px" height="30px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="escolher_registrar.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropup">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
                <div class="dropdown-menu" aria-labelledby="dropdown10">
                    <a class="dropdown-item" href="form_genero.php">Gênero</a>
                    <a class="dropdown-item" href="form_banda.php">Banda</a>
                    <a class="dropdown-item" href="form_musica.php">Música</a>
                    <a class="dropdown-item" href="form_playlist.php">Playlist</a>
                </div>
            </li>
            <li class="nav-item dropup">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listar</a>
                <div class="dropdown-menu" aria-labelledby="dropdown10">
                    <a class="dropdown-item" href="listar_genero.php">Gênero</a>
                    <a class="dropdown-item" href="listar_banda.php">Banda</a>
                    <a class="dropdown-item" href="listar_musica.php">Música</a>
                    <a class="dropdown-item" href="listar_playlist.php">Playlist</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    
</body>
</html>