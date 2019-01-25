<?php require_once("php/config.php");

    $inicioSesion = true;

    if(isset($_SESSION["cedula"])){
        $inicioSesion = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colegio Francisco de Miranda</title>

    <link rel="stylesheet" href="<?php echo RUTA_CSS ?>Bootstrap.css" >
    <link rel="stylesheet" href="<?php echo RUTA_CSS ?>head.css" >
    <link rel="stylesheet" href="<?php echo RUTA_CSS ?>footer.css" >

    <link rel="stylesheet" href="<?php echo RUTA_CSS ?>localizacion.css">

    <link rel="stylesheet" href="<?php echo RUTA_CSS ?>vistaMission.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="<?php echo RUTA_JS ?>Jquery.js"></script>
    <script src="<?php echo RUTA_JS ?>Popper.js"></script>
    <script src="<?php echo RUTA_JS ?>Bootstrap.js"></script>

    <script src="<?php echo RUTA_JS ?>cancelarPerfiles.js"></script>
    <script src="<?php echo RUTA_JS ?>codigoMapa.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWiqYMl8EhQzpt74NIuHlwi2irUb3-5UM&callback=initMap" async defer></script>
</head>
<body>

    <div class="jumbotron-fluid miJumbo">

    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo SERVIDOR; ?>">Francisco Miranda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo SERVIDOR; ?>"><i class="fas fa-desktop"></i> Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTA_LOCALIZACION; ?>"><i class="fas fa-book"></i> Conocenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-exclamation"></i> Ayuda</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLong2">
                    <i class="fas fa-book-open"></i> Carta de Buena Conducta
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle2">Carta de buena conducta</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-fluid img-thumbnail documentos" src="<?php echo RUTA_IMG; ?>ConstanciaConducta.jpg" alt="Carta de buena">
                                </div>
                                <div class="modal-footer">
                                    <p class="text-justify">Informacion referente a documentos de secundaria modelo actual.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLong3">
                    <i class="fas fa-book-open"></i> Constancia de Estudio
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle3" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle3">Constancia de Estudio</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-fluid img-thumbnail documentos" src="<?php echo RUTA_IMG; ?>ConstanciaEstudio.jpg" alt="Carta de buena">
                                </div>
                                <div class="modal-footer">
                                    <p class="text-justify">Informacion referente a documentos de secundaria modelo actual.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

<?php
    if($inicioSesion){
?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
            <h4><i class="far fa-address-card"></i> Login</h4>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-hamsa"></i>Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <img src="<?php echo RUTA_IMG; ?>google.jpg" alt="">
                            <form action="<?php echo DATOS_LOGIN; ?>" method="post">
                                <div class="form-group">
                                    <input type="text" name="usuarioL" id="usuarioL" required class="form-control form-control-lg" placeholder="V-23996773"/>
                                <br>
                                    <input type="password" name="passwordL" id="passwordL" required class="form-control form-control-lg" placeholder="123456"/> 
                                </div>
                                <br>          
                                <input type="button" class="btn btn-danger btn-block" data-dismiss="modal" value="Cancelar"/>
                                <input type="submit" class="btn btn-dark btn-block" value="Logiar"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>

<?php
    }
    else
    {
?>
            <a href="<?php echo RUTA_CERRARSESSION; ?>" class="btn btn-dark">
                <h5><i class="far fa-arrow-alt-circle-left"></i> Cerrar Sesion</h5>
            </a>
        </div>
    </nav>
<?php
    }
?>