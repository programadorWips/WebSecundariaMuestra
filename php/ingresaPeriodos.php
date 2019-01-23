<?php

require_once("php/conexion.php");

Conexion::abrirConexion();
$conexion = Conexion::obtenerConexion();
$conexion2 = Conexion::obtenerConexion();
$conexion3 = Conexion::obtenerConexion();
$conexion4 = Conexion::obtenerConexion();

$nombre = $_POST['nombreRegistrado'];
$cedula = $_POST['usuarioRegistrado'];
$datoAInsertar = $_POST['datoInsertar'];

$cargo = $_POST['cargo'];



if($cargo == "profesor"){
    
    try{

        $query = "SELECT * FROM materiasprofesores WHERE cedulaProf=?";
        $resultado = $conexion2->prepare($query);
        $resultado->execute(array($cedula));

        if($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

            $query = "UPDATE materiasprofesores SET nombre = ?, cedulaProf = ?, materia = ? WHERE cedulaProf=?";
            $resultado = $conexion->prepare($query);
            $resultado->execute(array($nombre,$cedula,$datoAInsertar,$cedula));

        }else{

            $query = "INSERT INTO materiasprofesores(nombre, cedulaProf, materia) VALUES (?,?,?)";
            $resultado = $conexion->prepare($query);
            $resultado->execute(array($nombre,$cedula,$datoAInsertar));

        }      
    
        $cargoProf = "";
        header("Location:" . SERVIDOR . "/");
    
    }catch(Exception $e){
        echo "Error: " . $e->getMessage() . "" . $e->getLine();
    }

}else if($cargo == "estudiante"){
    
    try{

            $query = "SELECT * FROM peridoalumnos WHERE cedulaAlum=?";
            $resultado = $conexion2->prepare($query);
            $resultado->execute(array($cedula));
    
        if($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

            $query = "UPDATE peridoalumnos SET nombre = ?, cedulaAlum = ?, periodo = ? WHERE cedulaAlum=?";
            $resultado = $conexion->prepare($query);
            $resultado->execute(array($nombre,$cedula,$datoAInsertar,$cedula));


        }else{

            $query = "INSERT INTO peridoalumnos(nombre, cedulaAlum, periodo) VALUES (?,?,?)";
            $resultado = $conexion->prepare($query);
            $resultado->execute(array($nombre,$cedula,$datoAInsertar));

            insertarEstudiante($cedula, $datoAInsertar, $conexion3);

        }      
    
        $cargoEstud = "";
        header("Location:" . SERVIDOR . "/");
    
    }catch(Exception $e){
        echo "Error: " . $e->getMessage() . "" . $e->getLine();
    }
}


function insertarEstudiante($cedula, $periodo, $miconexion){

    $miqueryI = "INSERT INTO progresoacademico(cedulaAlumno, periodo) VALUES (?,?)";
    //$miqueryU = "UPDATE progresoacademico SET periodo = ?  WHERE cedulaAlum=? AND periodo=?";
    $resultado = $miconexion->prepare($miqueryI);
    $resultado->execute(array($cedula, $periodo));

}

?>