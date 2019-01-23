<?php
    session_start();
    if(isset($_SESSION["cedula"])){
        
        if($_SESSION["cargo"] == "admin"){
            header("Location:perfilAdmin");
        
        }else if($_SESSION["cargo"] == "estudiante"){
            header("Location:perfilEstudiante");
        
        }else if($_SESSION["cargo"] == "profesor"){
            header("Location:perfilProfesor");
        }
    }

    require_once("plantillas/head.php");

?>
<!--- Primera Fila ****************************************************************************************** -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="<?php echo RUTA_IMG; ?>portadaCronograma.png" class="card-img-top" height=270 class="" alt="Cronograma">
                    <div class="card-body">
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center"></li>
                <li class="list-group-item text-center"></li>
                <li class="list-group-item text-center"><a href=""><i class="fab fa-accusoft"></i> Eventos</a></li>
                <li class="list-group-item text-center"><a href=""><i class="fas fa-bicycle"></i> Actividades</a></li>
                <li class="list-group-item text-center"><a href="<?php echo RUTA_HISTORIA; ?>"><i class="fas fa-atlas"></i> Historia</a></li>
                <li class="list-group-item text-center"></li>
                <li class="list-group-item text-center"></li>
            </ul>
            </div>

            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#"><img src="<?php echo RUTA_IMG; ?>portadaEventos.jpg" class="d-block w-100" height=300 alt="informacion"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Eventos</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="<?php echo RUTA_IMG; ?>portadaActividades.jpg" class="d-block w-100" height=300 alt="actividades"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Actividades</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="<?php echo RUTA_HISTORIA; ?>"><img src="<?php echo RUTA_IMG; ?>portadaHistoria.jpg" class="d-block w-100" height=300 alt="historia"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Historia</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<!----- Segunda Fila -------------------------------------------------------------------------------------- -->
<div class="container-fluid contenedorPrincipal">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="img/mision-vision.jpg" height=200 class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vision y Mision</h5>
                        <p class="card-text">Nuestra mision es que U.. Para poder Concenos usted deberia de ingresar en el link...</p>
                        <a href="<?php echo RUTA_MISION_VISION; ?>" class="btn btn-primary">Conocenos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="img/personal.jpg" height=200 class="card-img-top" alt="mision vision">
                    <div class="card-body">
                        <h5 class="card-title">Personal</h5>
                        <p class="card-text">Nuestra mision es que U.. Para poder Concenos usted deberia de ingresar en el link...</p>
                        <a href="#" class="btn btn-primary">Conoce mas aqui</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="img/localizacion.gif" height=200 class="card-img-top" alt="localizacion">
                    <div class="card-body">
                        <h5 class="card-title">Ubicacion</h5>
                        <p class="card-text">Nuestra mision es que U.. Para poder Concenos usted deberia de ingresar en el link...</p>
                        <a href="<?php echo RUTA_LOCALIZACION; ?>" class="btn btn-primary">Localicanos aqui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***************************************Tercera Flia**************************************************************** -->

<div class="container-fluid mt-0 contenedorSecundario">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide bordesCarrusel1" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href=""><img src="<?php echo RUTA_IMG; ?>portada3Extra1.png" height=270 class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <a href=""><img src="<?php echo RUTA_IMG; ?>portada3Extra2.png" height=270 class="d-block w-100" alt="..."></a>  
                        </div>
                        <div class="carousel-item">
                            <a href=""><img src="<?php echo RUTA_IMG; ?>portada3Extra3.jpg" height=270 class="d-block w-100" alt="..."></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide bordesCarrusel2" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href=""><img src="<?php echo RUTA_IMG; ?>vineta1.jpg" height=270 class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <a href=""><img src="<?php echo RUTA_IMG; ?>vineta2.jpg" height=270 class="d-block w-100" alt="..."></a>  
                        </div>
                        <div class="carousel-item">
                            <a href=""><img src="<?php echo RUTA_IMG; ?>vineta3.jpg" height=270 class="d-block w-100" alt="..."></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("plantillas/fin.php");
?>