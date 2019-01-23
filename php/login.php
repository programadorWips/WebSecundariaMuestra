<?php

    if($_POST['usuarioL']!= ""){

        require_once("php/conexion.php");

        Conexion::abrirConexion();
        $conexion = Conexion::obtenerConexion();
        $conexion2 = Conexion::obtenerConexion();
        $conexion3 = Conexion::obtenerConexion();

        $usuarioL = $_POST["usuarioL"];
        $password = $_POST['passwordL'];

        $query = "SELECT * FROM usuarios WHERE usuario=?";
        $resultado = $conexion->prepare($query);
        $resultado->execute(array($usuarioL));

        if($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

           
            if( password_verify($password, $registro[password])){
                $nombre = $registro["nombre"];
                $edad = $registro["edad"];
                $cedula = $registro["cedula"];
                $direccion = $registro["direccion"];
                $cargo = $registro["cargo"];
                $telefono = $registro["telefono"];
                $foto = $registro["foto"];
                $estado = $registro["estado"];

                if($cargo == "admin"){

                    session_start();
                    $_SESSION["cedula"] = $cedula;
                    $_SESSION["nombre"] = $nombre;
                    $_SESSION["edad"] = $edad;
                    $_SESSION["direccion"] = $direccion;
                    $_SESSION["cargo"] = $cargo;
                    $_SESSION["telefono"] = $telefono;
                    $_SESSION["foto"] = $foto;
                    $_SESSION["estado"] = $estado;

                    Header("Location:" . RUTA_PERFILADMIN);

                }else if($cargo == "estudiante"){

                    session_start();
                    $_SESSION["cedula"] = $cedula;
                    $_SESSION["nombre"] = $nombre;
                    $_SESSION["edad"] = $edad;
                    $_SESSION["direccion"] = $direccion;
                    $_SESSION["cargo"] = $cargo;
                    $_SESSION["telefono"] = $telefono;
                    $_SESSION["foto"] = $foto;
                    $_SESSION["estado"] = $estado;
                    Header("Location:" . RUTA_PERFILESTUDIANTE);

                }else if($cargo == "profesor"){

                    session_start();
                    $_SESSION["cedula"] = $cedula;
                    $_SESSION["nombre"] = $nombre;
                    $_SESSION["edad"] = $edad;
                    $_SESSION["direccion"] = $direccion;
                    $_SESSION["cargo"] = $cargo;
                    $_SESSION["telefono"] = $telefono;
                    $_SESSION["foto"] = $foto;
                    $_SESSION["estado"] = $estado;
                    Header("Location:" . RUTA_PERFILPROFESOR);

                }
            }

            
        }else{
            echo("estoy en el else");
            Header("Location:home");
        }
    }    

?>