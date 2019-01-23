<?php
require_once("php/conexion.php");

Conexion::abrirConexion();
$conexion = Conexion::obtenerConexion();
$conexion2 = Conexion::obtenerConexion();

$query = "SELECT * FROM materiasprofesores WHERE cedulaProf=?";
$resultado = $conexion->prepare($query);
$resultado->execute(array($_SESSION["cedula"]));
$materia = "";

$cedulaEstudiantes = array();
$periodoEstudiantes = array();
$promedio1Estudiantes = array();
$promedio2Estudiantes = array();
$promedio3Estudiantes = array();
$totalEstudiantes = array();
$recorre = 0;

if($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
    $materia = $registro['materia'];

    $query2 = "SELECT * FROM progresoacademico WHERE cedulaProfesor=? AND materia=? ";
    $resultado2 = $conexion2->prepare($query2);
    $resultado2->execute(array($_SESSION["cedula"],$materia));

    while($registro2 = $resultado2->fetch(PDO::FETCH_ASSOC)){

        $cedulaEstudiantes[] = $registro2['cedulaAlumno'];
        $periodoEstudiantes[] = $registro2['periodo'];
        $promedio1Estudiantes[] = $registro2['promedio1'];
        $promedio2Estudiantes[] = $registro2['promedio2'];
        $promedio3Estudiantes[] = $registro2['promedio3'];
        $totalEstudiantes[] = $registro2['nota'];

        $recorre++;
    }
}

?>