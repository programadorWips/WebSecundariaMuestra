<?php

    require_once("php/conexion.php");

        Conexion::abrirConexion();
        $conexion2 = Conexion::obtenerConexion();
        $conexion3 = Conexion::obtenerConexion();
        $conexion4 = Conexion::obtenerConexion();
        $conexion5 = Conexion::obtenerConexion();

        $nombreProf = array();
        $cedulaProf = array();
        $cargoProf = array();
        $telefonoProf = array();;
        $estadoProf = array();
        $materiaProf = array();
        $nProf = 0;


        $nombreEstudiante = array();
        $cedulaEstudiante = array();
        $cargoEstudiante = array();
        $telefonoEstudiante = array();
        $estadoEstudiante = array();
        $periodo = array();
        $nEstud = 0;

    // Tabla usuarios --------------------------------------------------------------------------
    $query2 = "SELECT * FROM usuarios WHERE cargo=?";
    $resultado2 = $conexion2->prepare($query2);
    $resultado2->execute(array("profesor"));

    $query3 = "SELECT * FROM usuarios WHERE cargo=?";
    $resultado3 = $conexion3->prepare($query3);
    $resultado3->execute(array("estudiante"));
    // Tabla usuarios --------------------------------------------------------------------------
    

    while($registro2 = $resultado2->fetch(PDO::FETCH_ASSOC)){
        
        $nombreProf[] = $registro2["nombre"];
        $cedulaProf[] = $registro2["cedula"];
        $cargoProf[] = $registro2["cargo"];
        $edadProf[] = $registro2["edad"];
        $direccionProf[] = $registro2["direccion"];
        $telefonoProf[] = $registro2["telefono"];
        $estadoProf[] = $registro2["estado"];
        $materiaProf[] = campoExtra("materiasProfesores","cedulaProf",$registro2["cedula"],$conexion4);
        //echo(campoExtra("cedulaProf",$registro2["cedula"],$conexion4));
        $nProf++;

        
    }

    while($registro3 = $resultado3->fetch(PDO::FETCH_ASSOC)){

        $nombreEstudiante[] = $registro3["nombre"];
        $cedulaEstudiante[] = $registro3["cedula"];
        $cargoEstudiante[] = $registro3["cargo"];
        $edadEstudiante[] = $registro3["edad"];
        $direccionEstudiante[] = $registro3["direccion"];
        $telefonoEstudiante[] = $registro3["telefono"];
        $estadoEstudiante[] = $registro3["estado"];
        $periodo[] = campoExtra("peridoAlumnos","cedulaAlum",$registro3["cedula"],$conexion5);
        //echo(campoExtra("peridoAlumnos","cedulaAlum",$registro3["cedula"],$conexion5));
        $nEstud++;
    }


    function campoExtra($tabla,$campo,$miCedula,$miConexion){

        // Tabla materiasProfesores -------------- Tabla peridoAlumnos ------------------------------------------------------------
        $query5 = "SELECT * FROM " . $tabla . " WHERE " . $campo . "=?";
        $resultado5 = $miConexion->prepare($query5);
        $resultado5->execute(array($miCedula));

        $miRegistro = $resultado5->fetch();
        return $miRegistro[3];
    }

?>