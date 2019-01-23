<?php

$componentes_url = parse_url($_SERVER["REQUEST_URI"]);
$ruta = $componentes_url['path'];

$partes_rutas = explode("/", $ruta); // esto sirve para roper un string apartir de sierto caracter

//--------------- paramaetros para editar Usuarios ---------------------------------------------------
$parametroEditId = 0;
$parametroEdit2Cargo = "";

//------------------------------------------------------------------------------------------------------

if($partes_rutas[3] == ""){
    include_once("vistas/home.php");

}else if($partes_rutas[3] == "home"){
    include_once("vistas/home.php");

}else if($partes_rutas[3] == "mision"){
    include_once("vistas/mision.php");

}else if($partes_rutas[3] == "localizacion"){
    include_once("vistas/localizacion.php");

}else if($partes_rutas[3] == "ingresaPeriodos"){
    include_once("php/ingresaPeriodos.php");

}else if($partes_rutas[3] == "login"){
    include_once("php/login.php");

}else if($partes_rutas[3] == "cerrarSession"){
    include_once("php/cerrarSession.php");

}else if(count($partes_rutas) == 6){

    $parametroEditId = $partes_rutas[4];
    $parametroEdit2Cargo = $partes_rutas[5];
    include_once("vistas/perfilAdmin.php");
    

}else if(count($partes_rutas) == 5){

    if($partes_rutas[4] == "registroPersonal"){
        include_once("php/registroPersonal.php");
    
    }
    
}else if($partes_rutas[3] == "perfilAdmin"){   
    include_once("vistas/perfilAdmin.php");

}else if($partes_rutas[3] == "perfilEstudiante"){
    include_once("vistas/perfilEstudiante.php");

}else if($partes_rutas[3] == "perfilProfesor"){
    include_once("vistas/perfilProfesor.php");

}else if($partes_rutas[3] == "ingresaNotas"){
    include_once("php/ingresaNotas.php");

}else if($partes_rutas[3] == "historia"){
    include_once("vistas/historia.php");

}else{
    include_once("vistas/404.php");
}


?>