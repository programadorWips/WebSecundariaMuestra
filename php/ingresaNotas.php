<?php


$cedulaProfesor = $_POST['NotaCedulaProfesor'];
$materiaProfesor = $_POST['ingresaNotaMateria'];

$cedulaAlumno = $_POST['ingresaNotaCedula'];
$periodoAlumno = $_POST['ingresaNotaPeriodo'];

$promedio = $_POST['promedio'];

require_once("php/conexion.php");

Conexion::abrirConexion();
$miconexion = Conexion::obtenerConexion();
$conexion2 = Conexion::obtenerConexion();

    $query2 = "SELECT * FROM progresoacademico WHERE cedulaAlumno=? AND periodo=?";
    $resultado2 = $conexion2->prepare($query2);
    $resultado2->execute(array($cedulaAlumno, $periodoAlumno));

    if($registroNota = $resultado2->fetch(PDO::FETCH_ASSOC)){

        if($registroNota['promedio1'] == 0){

            $miqueryU = "UPDATE progresoacademico SET promedio1 = ?, cedulaProfesor = ?, materia = ?  WHERE cedulaAlumno=? AND periodo=?";
            $resultado = $miconexion->prepare($miqueryU);
            $resultado->execute(array($promedio, $cedulaProfesor, $materiaProfesor, $cedulaAlumno, $periodoAlumno));
        
        }else if($registroNota['promedio2'] == 0){

            $miqueryU = "UPDATE progresoacademico SET promedio2 = ?, cedulaProfesor = ?, materia = ?  WHERE cedulaAlumno=? AND periodo=?";
            $resultado = $miconexion->prepare($miqueryU);
            $resultado->execute(array($promedio, $cedulaProfesor, $materiaProfesor, $cedulaAlumno, $periodoAlumno));

        }else if($registroNota['promedio3'] == 0){

            $total = ($registroNota['promedio1'] + $registroNota['promedio2'] + $promedio)/3;

            $miqueryU = "UPDATE progresoacademico SET promedio3 = ?, nota = ?, cedulaProfesor = ?, materia = ?  WHERE cedulaAlumno=? AND periodo=?";
            $resultado = $miconexion->prepare($miqueryU);
            $resultado->execute(array($promedio, $total, $cedulaProfesor, $materiaProfesor, $cedulaAlumno, $periodoAlumno));

        }else{
            echo "no entro en ningun if";
        }

        header("Location:" . RUTA_PERFILPROFESOR);

    }else{
        echo "No se encontraron resultados";
    }

    //$miqueryI = "INSERT INTO progresoacademico(cedulaAlumno, periodo) VALUES (?,?)";
    //$miqueryU = "UPDATE progresoacademico SET cedulaProfesor = ?, materia = ?  WHERE cedulaAlum=? AND periodo=?";
    //$resultado = $miconexion->prepare($miqueryU);
    //$resultado->execute(array($cedulaProfesor, $materiaProfesor, $cedulaAlumno, $periodoAlumno));



?>