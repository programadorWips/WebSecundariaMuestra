<?php
    require_once("conexion.php");
    Conexion::abrirConexion();
    $conexion = Conexion::obtenerConexion();
    $conexion2 = Conexion::obtenerConexion();

    $estudEdit = $_POST['estudEdit'];
    $profEdit = $_POST['profEdit'];
    
    $usuario = $_POST["usuarioP"];
    $password = $_POST["passwordP"];
    $cedula = $_POST["cedulaP"];
    $nombre = $_POST["nombreP"];
    $edad = $_POST["edadP"];
    $direccion = $_POST["direccionP"];
    $cargo = $_POST["cargoP"];
    $telefono = $_POST["telefonoP"];
    $foto = $_FILES["fotoP"]["name"];
    $estado = $_POST["estadoP"];

    $encriptado = password_hash($password, PASSWORD_BCRYPT);

    $dir_subida = $_SERVER['DOCUMENT_ROOT'] . "/PaginasMuestrasPHP/WebEscuela2019/img/";
    $fichero_subido = $dir_subida . basename($_FILES['fotoP']['name']);

    if($estudEdit != "" || $profEdit != ""){

        try{

            $query = "UPDATE usuarios SET usuario = ?, password = ?, nombre = ?, edad = ?, cedula = ?, cargo = ?, direccion = ?, telefono = ?, foto = ?, estado = ? WHERE cedula = ?";
            $resultado = $conexion->prepare($query);
            $resultado->execute(array($usuario,$encriptado,$nombre,$edad,$cedula, $cargo, $direccion, $telefono, $foto, $estado, $cedula));

            if (move_uploaded_file($_FILES['fotoP']['tmp_name'], $fichero_subido)) {
                echo "El fichero es válido y se subió con éxito.";
            }

            $estudEdit = "";
            $profEdit = "";
            
            header("Location:" . SERVIDOR . "/");

        }catch(Exception $e){
            echo "Error: " . $e->getMessage() . "" . $e->getLine();
        }
        
    }else{

        try{

            $query = "INSERT INTO usuarios(usuario, password, nombre, edad, cedula, cargo, direccion, telefono, foto, estado) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $resultado = $conexion->prepare($query);
            $resultado->execute(array($usuario,$encriptado,$nombre,$edad,$cedula, $cargo, $direccion, $telefono, $foto, $estado ));

            if (move_uploaded_file($_FILES['fotoP']['tmp_name'], $fichero_subido)) {
                echo "El fichero es válido y se subió con éxito.";
            }

            if($cargo == "estudiante"){

            }

            header("Location:" . SERVIDOR . "/");

        }catch(Exception $e){
            echo "Error: " . $e->getMessage() . "" . $e->getLine();
        }
    }


    
?>