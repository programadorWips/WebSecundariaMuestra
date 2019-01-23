<?php

    session_start();
    if(!isset($_SESSION["cedula"])){
        header("Location:home");
    }

    require_once("php/BuscaDataUsuarios.php");
    require_once("plantillas/head.php");

?>

<div class="container">
    <div class="row">

        <div class="col-md-5">
            <div class="card" style="width: 22rem;">
                <img src="<?php echo RUTA_IMG . $_SESSION['foto'];?>" height="300" class="card-img-top" alt="...">
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
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4><i class="far fa-address-card"></i> Ingreso de Personal</h4>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <?php 
                            if($parametroEdit2Cargo == ""){

                        ?>
                            <form action="<?php echo RUTA_REGISTRAR_PERSONAL;?>" method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Usuario</span>
                                    </div> 
                                    <input type="text" class="form-control" placeholder="V-23944077" name="usuarioP" id="usuarioP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2">Clave</span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="12345" name="passwordP" id="passwordP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Nombre</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Brayan Gutierres" name="nombreP" id="nombreP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon4">Edad</span>
                                    </div>
                                    <input type="number" min=10 max=50 class="form-control" placeholder="16" name="edadP" id="edadP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon5">Cedula</span>
                                    </div>
                                    <input type="number" max=50000000 class="form-control" placeholder="27055044" name="cedulaP" id="cedulaP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Asignar Cargo:</label>
                                    <select class="form-control" id="cargoP" name="cargoP">
                                        <option>admin</option>
                                        <option>estudiante</option>
                                        <option>profesor</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Direccion</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Bello Monte Caripito Estado Monagas" name="direccionP" id="direccionP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon5">Telefono</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="0412-1093622" name="telefonoP" id="telefonoP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Estado:</label>
                                    <select class="form-control" id="estadoP" name="estadoP">
                                        <option>Activo</option>
                                        <option>Inactivo</option>
                                        <option>Retirado</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fotoP" class="form-label">Foto de Perfil</label>
                                    <input type="file" class="btn btn-block btn-dark" name="fotoP" id="fotoP" >
                                </div>

                                <div class="form-group mb-3">
                                    <input type="button" class="btn btn-danger" onclick="limpiar()" value="Cancelar" >
                                    <input type="submit" class="btn btn-success" value="Guardar" >
                                </div>
                            </form>
                        <?php

                            }else if($parametroEdit2Cargo == "estudiante"){
                        ?>

                            <form action="<?php echo RUTA_REGISTRAR_PERSONAL;?>" method="post" enctype="multipart/form-data">
                                <input type="text" hidden=true name="estudEdit" id="estudEdit" value="<?php echo 'estudiante';?>">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Usuario</span>
                                    </div> 
                                    <input type="text" class="form-control" placeholder="V-23944077" value="<?php echo $cedulaEstudiante[$parametroEditId]; ?>" name="usuarioP" id="usuarioP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2">Clave</span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="12345"  name="passwordP" id="passwordP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Nombre</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Brayan Gutierres" value="<?php echo $nombreEstudiante[$parametroEditId]; ?>" name="nombreP" id="nombreP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon4">Edad</span>
                                    </div>
                                    <input type="number" min=10 max=50 class="form-control" placeholder="16" value="<?php echo $edadEstudiante[$parametroEditId]; ?>" name="edadP" id="edadP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon5">Cedula</span>
                                    </div>
                                    <input type="number" max=50000000 class="form-control" placeholder="27055044" value="<?php echo $cedulaEstudiante[$parametroEditId]; ?>" name="cedulaP" id="cedulaP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Asignar Cargo:</label>
                                    <select class="form-control" id="cargoP" name="cargoP">
                                        <option>admin</option>
                                        <option>estudiante</option>
                                        <option>profesor</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Direccion</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Bello Monte Caripito Estado Monagas" value="<?php echo $direccionEstudiante[$parametroEditId]; ?>" name="direccionP" id="direccionP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon5">Telefono</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="0412-1093622" name="telefonoP" value="<?php echo $telefonoEstudiante[$parametroEditId]; ?>" id="telefonoP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Estado:</label>
                                    <select class="form-control" id="estadoP" name="estadoP">
                                        <option>Activo</option>
                                        <option>Inactivo</option>
                                        <option>Retirado</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fotoP" class="form-label">Foto de Perfil</label>
                                    <input type="file" class="btn btn-block btn-dark" name="fotoP" id="fotoP" >
                                </div>

                                <div class="form-group mb-3">
                                    <input type="button" class="btn btn-danger" onclick="limpiar()" value="Cancelar" >
                                    <input type="submit" class="btn btn-success" value="Guardar" >
                                </div>
                            </form>
                        <?php

                        }else if($parametroEdit2Cargo == "profesor"){

                        ?>
                            <form action="<?php echo RUTA_REGISTRAR_PERSONAL;?>" method="post" enctype="multipart/form-data">
                                <input type="text" hidden=true name="profEdit" id="profEdit" value="<?php echo 'profesor';?>" >
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Usuario</span>
                                    </div> 
                                    <input type="text" class="form-control" placeholder="V-23944077" value="<?php echo $cedulaProf[$parametroEditId]; ?>" name="usuarioP" id="usuarioP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2">Clave</span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="12345"  name="passwordP" id="passwordP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Nombre</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Brayan Gutierres" value="<?php echo $nombreProf[$parametroEditId]; ?>" name="nombreP" id="nombreP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon4">Edad</span>
                                    </div>
                                    <input type="number" min=10 max=50 class="form-control" placeholder="16" value="<?php echo $edadProf[$parametroEditId]; ?>" name="edadP" id="edadP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon5">Cedula</span>
                                    </div>
                                    <input type="number" max=50000000 class="form-control" placeholder="27055044" value="<?php echo $cedulaProf[$parametroEditId]; ?>" name="cedulaP" id="cedulaP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Asignar Cargo:</label>
                                    <select class="form-control" id="cargoP" name="cargoP">
                                        <option>admin</option>
                                        <option>estudiante</option>
                                        <option>profesor</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Direccion</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Bello Monte Caripito Estado Monagas" value="<?php echo $direccionProf[$parametroEditId]; ?>" name="direccionP" id="direccionP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon5">Telefono</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="0412-1093622" name="telefonoP" value="<?php echo $telefonoProf[$parametroEditId]; ?>" id="telefonoP" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Estado:</label>
                                    <select class="form-control" id="estadoP" name="estadoP">
                                        <option>Activo</option>
                                        <option>Inactivo</option>
                                        <option>Retirado</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fotoP" class="form-label">Foto de Perfil</label>
                                    <input type="file" class="btn btn-block btn-dark" name="fotoP" id="fotoP" >
                                </div>

                                <div class="form-group mb-3">
                                    <input type="button" class="btn btn-danger" onclick="limpiar()" value="Cancelar" >
                                    <input type="submit" class="btn btn-success" value="Guardar" >
                                </div>
                            </form>
                        <?php

                        }

                        ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4><i class="far fa-address-card"></i> Registro de Estudiantes</h4>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Cedula</th>
                                        <th scope="col">Cargo</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Periodo</th>
                                        <th>Ediciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  for($i=0; $i<$nEstud; $i++){
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $i+1; ?></th>
                                        <td><?php echo $nombreEstudiante[$i]; ?></td>
                                        <td><?php echo $cedulaEstudiante[$i]; ?></td>
                                        <td><?php echo $cargoEstudiante[$i]; ?></td>
                                        <td><?php echo $estadoEstudiante[$i]; ?></td>
                                        <td><?php if($periodo[$i] != ""){ echo $periodo[$i]; }else{ echo "No Asignado"; } ?></td>
                                        <td><a class="btn btn-success" href="<?php echo(SERVIDOR . '/' . RUTA_PERFILADMIN . '/'. $i . '/' . $cargoEstudiante[$i]); ?>" ><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                <?php
                                  }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            <h4><i class="far fa-address-card"></i> Registro de Profesores</h4>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Cedula</th>
                                        <th scope="col">Cargo</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Materia</th>
                                        <th>Ediciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  for($i=0; $i<$nProf; $i++){
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $i+1; ?></th>
                                        <td><?php echo $nombreProf[$i]; ?></td>
                                        <td><?php echo $cedulaProf[$i]; ?></td>
                                        <td><?php echo $cargoProf[$i]; ?></td>
                                        <td><?php echo $estadoProf[$i]; ?></td>
                                        <td><?php if($materiaProf[$i] != ""){ echo $materiaProf[$i]; }else{ echo "No Asignado"; } ?></td>
                                        <td><a class="btn btn-success" href="<?php echo(SERVIDOR . '/' . RUTA_PERFILADMIN . '/'. $i . '/' . $cargoProf[$i]); ?>" ><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                <?php
                                  }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                    <h2 class="mb-0 text-center">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            <h4><i class="far fa-address-card"></i> Agregado de Actividades</h4>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php 
                        if($parametroEdit2Cargo == ""){

                        ?>
                            <p>No hay Registros.....</p>
                        <?php

                        }else if($parametroEdit2Cargo == "estudiante"){
                        ?>

                            <form action="<?php echo INGRESA_PERIODOS;?>" method="post">
                                <input type="text" hidden=true name="cargo" id="cargo" value="<?php echo 'estudiante';?>">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend disabled">
                                        <span class="input-group-text" id="basic-addon1">Usuario</span>
                                    </div> 
                                    <input type="text" class="form-control" placeholder="V-23944077" value="<?php echo $cedulaEstudiante[$parametroEditId]; ?>" name="usuarioRegistrado" id="usuarioeRegistrado" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Nombre</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Brayan Gutierres" value="<?php echo $nombreEstudiante[$parametroEditId]; ?>" name="nombreRegistrado" id="nombreRegistrado" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon5">Periodo del Estudiante</span>
                                    </div>
                                    <input type="number" min=1 max=5 class="form-control" placeholder="3" name="datoInsertar"  id="datoInsertar" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
 
                                <div class="form-group mb-3">
                                    <input type="button" class="btn btn-danger" onclick="limpiar()" value="Cancelar" >
                                    <input type="submit" class="btn btn-success" value="Guardar" >
                                </div>
                            </form>
                        <?php

                        }else if($parametroEdit2Cargo == "profesor"){

                        ?>
                            <form action="<?php echo INGRESA_PERIODOS;?>" method="post" >
                                <input type="text" hidden=true name="cargo" id="cargo" value="<?php echo 'profesor';?>" >
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Usuario</span>
                                    </div> 
                                    <input type="text" class="form-control" placeholder="V-23944077" value="<?php echo $cedulaProf[$parametroEditId]; ?>" name="usuarioRegistrado" id="usuarioRegistrado" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Nombre</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Brayan Gutierres" value="<?php echo $nombreProf[$parametroEditId]; ?>" name="nombreRegistrado" id="nombreRegistrado" required aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Asignar Cargo de Materia:</label>
                                    <select class="form-control" id="datoInsertar" name="datoInsertar">
                                        <option>Castellano</option>
                                        <option>Ingles</option>
                                        <option>Matematica</option>
                                        <option>Educacion Fisica</option>
                                        <option>Ciencias Naturales</option>
                                        <option>Arte</option>
                                        <option>Geografia</option>
                                        <option>Fisica</option>
                                        <option>Quimica</option>
                                        <option>Biologia</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="button" class="btn btn-danger" onclick="limpiar()" value="Cancelar" >
                                    <input type="submit" class="btn btn-success" value="Guardar" >
                                </div>
                            </form>
                        <?php

                        }

                        ?>
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