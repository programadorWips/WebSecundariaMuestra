<?php

require_once("php/conexion.php");

Conexion::abrirConexion();
$conexion = Conexion::obtenerConexion();
$conexion2 = Conexion::obtenerConexion();
$conexion3 = Conexion::obtenerConexion();

$query = "SELECT * FROM progresoacademico WHERE cedulaAlumno=? ORDER BY periodo";
$resultado = $conexion->prepare($query);
$resultado->execute(array($_SESSION["cedula"]));


$materiaEstudiantes = array();
$periodoEstudiantes = array();
$promedio1Estudiantes = array();
$promedio2Estudiantes = array();
$promedio3Estudiantes = array();
$totalEstudiantes = array();

$pensum = array();
$recorre = 0;

while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

    $materiaEstudiantes[] = $registro['materia'];
    $periodoEstudiantes[] = $registro['periodo'];
    $promedio1Estudiantes[] = $registro['promedio1'];
    $promedio2Estudiantes[] = $registro['promedio2'];
    $promedio3Estudiantes[] = $registro['promedio3'];
    $totalEstudiantes[] = $registro['nota'];

    $recorre++;

}

$query2 = "SELECT * FROM peridoalumnos WHERE cedulaAlum=? ORDER BY periodo";
$resultado2 = $conexion2->prepare($query2);
$resultado2->execute(array($_SESSION["cedula"]));

if($registro2 = $resultado2->fetch(PDO::FETCH_ASSOC)){

    $periodoActual = $registro2['periodo'];

    if($periodoActual == "1"){
        
        $query3 = "SELECT periodo1 FROM pensum ";
        $resultado3 = $conexion3->prepare($query3);
        $resultado3->execute();

        while($registro3 = $resultado3->fetch(PDO::FETCH_ASSOC)){
            $pensum[] = $registro3['periodo1'];
        }

        
    }else if($periodoActual == "2"){
        
        $query3 = "SELECT periodo2 FROM pensum ";
        $resultado3 = $conexion3->prepare($query3);
        $resultado3->execute();

        while($registro3 = $resultado3->fetch(PDO::FETCH_ASSOC)){
            $pensum[] = $registro3['periodo2'];
        }
        
    }else if($periodoActual == "3"){
                
        $query3 = "SELECT periodo3 FROM pensum ";
        $resultado3 = $conexion3->prepare($query3);
        $resultado3->execute();

        while($registro3 = $resultado3->fetch(PDO::FETCH_ASSOC)){
            $pensum[] = $registro3['periodo3'];
        }
        
    }else if($periodoActual == "4"){
                
        $query3 = "SELECT periodo4 FROM pensum ";
        $resultado3 = $conexion3->prepare($query3);
        $resultado3->execute();

        while($registro3 = $resultado3->fetch(PDO::FETCH_ASSOC)){
            $pensum[] = $registro3['periodo4'];
        }
        
    }else if($periodoActual == "5"){
        
        $query3 = "SELECT periodo5 FROM pensum ";
        $resultado3 = $conexion3->prepare($query3);
        $resultado3->execute();

        while($registro3 = $resultado3->fetch(PDO::FETCH_ASSOC)){
            $pensum[] = $registro3['periodo5'];
        }

    }
    
}



?>