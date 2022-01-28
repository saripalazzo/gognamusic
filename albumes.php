<?php
$p = null;
if (isset($_GET['id']))
    $p = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOGNA MUSIC</title>
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav>
            <div class="nombre">
                <img src="assets/imgs/pera.jpg" class="icono" alt="">
                <h3 class="titulo">GOGNA MUSIC</h3>
            </div>
        </nav>
        <section class="reproductor">
            <div class="total">
                <div class="contenedor">
                    <!-- Buscar como implementar las diferentes  -->
                    <img src="" alt="" id='imagen'>
                    <p id="artista">Artista</p>
                    <p id="cancion">Cancion</p>
                </div>
                <div class="repro">
                    <audio src="" id="track"></audio>
                    <input type="range" name="" id="barra" value="0" step="any">
                    <button class="botons" type="button" id="rebobinar"><img src="assets/imgs/rebobinar.png" class="icons-repro"></button>
                    <button class="botons" type="button" id="play"><img src="assets/imgs/play.png" class="icons-repro"></button>
                    <button class="botons" type="button" id="avanzar"><img src="assets/imgs/avance-rapido.png" class="icons-repro"></button>
                    <input type="range" name="" id="volumen" value="0,5" min="0" max="1" step="any">
                </div>
            </div>
        </section>
    </header>
    <section class="seccion_principal">
        <div class="container">
            <div class="row">
                <div class="lateral col-4">
                    <div class="busqueda mt-3">
                        <form class="form-inline">
                            <input type="text" class="form-control form-input" placeholder="Buscar">
                        </form>
                    </div>
                    <div class="escuchar mt-3">
                        <img src="assets/iconos-sara/play-circle-fill.svg" alt="">
                        <span>Escuchar</span>
                    </div>
                    <div class="explorar mt-3">
                        <img src="assets/iconos-sara/binoculars-fill.svg" alt="">
                        <span>Explorar</span>
                    </div>
                    <div class="radio mt-3">
                        <img src="assets/iconos-sara/ear-fill.svg" alt="">
                        <span>Radio</span>
                    </div>
                    <div class="biblioteca mt-3">
                        <h4 class="mt-3">Biblioteca</h2>
                            <hr class="my-4">
                            <div class="added mt-3">
                                <img src="assets/iconos-sara/clock.svg" alt="">
                                <span>Añadido recientemente</span>
                            </div>
                            <div class="artistas mt-3">
                                <img src="assets/iconos-sara/mic.svg" alt="">
                                <span>Artistas</span>
                            </div>
                            <div class="albumes mt-3">
                                <img src="assets/iconos-sara/music-note-list.svg" alt="">
                                <span>Álbumes</span>
                            </div>
                            <div class="canciones mt-3">
                                <img src="assets/iconos-sara/file-music.svg" alt="">
                                <span>Canciones</span>
                            </div>
                    </div>
                </div>
                <div class="principal col-8 mt-4">
                    <div class="portada container" id="portada">
                        <div class="row m-3">
                            <div class="col">
                                <img class="col-10 imgPortada" alt="" id="<?= $p ?>">
                            </div>
                            <div class="col">
                                <h2 class="titulo-album" id="tituloCancion"></h2>
                                <h3 class="artista mt-2"></h3>
                                <div class="botones mt-2">
                                    <button class="btn" id="btn-reproducir">Reproducir</button>
                                    <button class="btn" id="btn-aleatorio">Aleatorio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lista-canciones col mt-5 m-3">
                        <!-- <ol>
                            <li class="m-3" id="always-1">Always Feel the Cold</li>
                            <li class="m-3" id="always-2">Big Sleep</li>
                            <li class="m-3" id="always-3">C.R.Y.</li>
                            <li class="m-3" id="always-4">Dead Dreams</li>
                            <li class="m-3" id="always-5">Everlasting Room</li>
                            <li class="m-3" id="always-6">Somebody Kill Me</li>
                        </ol> -->
                    </div>
                    <div class="volver m-5">
                        <button class="btn"><a href="index.html">Volver</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/albumes.js"></script>
</body>

</html>