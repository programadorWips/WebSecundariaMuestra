<?php

    session_start();
    if(!isset($_SESSION["cedula"])){
        header("Location:home");
    }

    require_once("php/datosDelEstudiante.php");
    require_once("plantillas/head.php");

?>

<div class="container">
    <div class="row">

        <div class="col-md-5">
            <div class="card" style="width: 22rem;">
                <img src="<?php echo RUTA_IMG . $_SESSION['foto'];?>" height="300" class="card-img-top" alt="<?php echo RUTA_IMG . $_SESSION['foto'];?>">
                <div class="card-body">
                    <h4 class="card-title text-center"><?php echo $_SESSION["nombre"]; ?></h4>
                    <h5 class="card-title text-center"><?php echo $_SESSION["cargo"]; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4><i class="far fa-address-card"></i> Perfil</h4>
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><label for="">Usuario:</label></p>
                                    <p><label for="">Nombre:</label></p>
                                    <p><label for="">Edad:</label></p>
                                    <p class=mb-4 ><label for="">Direccion:</label></p>
                                    <p><label for="">Telefono:</label></p>
                                    <p><label for="">Cargo:</label></p>
                                    <p><label for="">Estado:</label></p>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <p class="text-center"><label for=""><?php echo($_SESSION['cedula']); ?></label></p>
                                    <p class="text-center"><label for=""><?php echo($_SESSION['nombre']); ?></label></p>
                                    <p class="text-center"><label for=""><?php echo($_SESSION['edad']); ?></label></p>
                                    <p class="text-center"><label for=""><?php echo($_SESSION['direccion']); ?></label></p>
                                    <p class="text-center"><label for=""><?php echo($_SESSION['telefono']); ?></label></p>
                                    <p class="text-center"><label for=""><?php echo($_SESSION['cargo']); ?></label></p>
                                    <p class="text-center"><label for=""><?php echo($_SESSION['estado']); ?></label></p>
                                </div>
                            </div>           
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4><i class="far fa-address-card"></i> Promedio</h4>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Materia</th>
                                        <th scope="col">Periodo</th>
                                        <th scope="col">1er Corte</th>
                                        <th scope="col">2do Corte</th>
                                        <th scope="col">3er Corte</th>
                                        <th scope="col">Nota</th>
                                    </tr>
                                </thead>

                                <tbody>  
                                    <?php

                                    if($recorre != 0){

                                        for($i=0; $i<$recorre; $i++){
                                    ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $materiaEstudiantes[$i]; ?></td>
                                            <td><?php echo $periodoEstudiantes[$i]; ?></td>
                                            <td><?php echo $promedio1Estudiantes[$i]; ?></td>
                                            <td><?php echo $promedio2Estudiantes[$i]; ?></td>
                                            <td><?php echo $promedio3Estudiantes[$i]; ?></td>
                                            <td><?php echo $totalEstudiantes[$i]; ?></td>
                                        </tr>
                                    <?php
                                        }

                                    }else{ 

                                    ?>
                                        <div class="alert alert-danger">No Hay Registros</div>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div> 
                    </div> 
                </div>
                <div class="card">
                    <div class="card-header" id="heading3">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <h4><i class="far fa-address-card"></i> Pensum del Periodo</h4>
                        </button>
                    </h2>
                    </div>

                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                        <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active"><?php echo("Materias del " . $periodoActual . " Grado"); ?></li>
                            <li class="list-group-item"><?php echo  $pensum[0]; ?></li>
                            <li class="list-group-item"><?php echo  $pensum[1]; ?></li>
                            <li class="list-group-item"><?php echo  $pensum[2]; ?></li>
                            <li class="list-group-item"><?php echo  $pensum[3]; ?></li>
                            <li class="list-group-item"><?php echo  $pensum[4]; ?></li>
                            <li class="list-group-item"><?php echo  $pensum[5]; ?></li>
                            <li class="list-group-item"><?php echo  $pensum[6]; ?></li>
                        </ul>          
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