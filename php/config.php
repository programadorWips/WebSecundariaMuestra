<?php

//informacion de la base de datos
define('DATOSR','root');
define('DATOSP','');
define('DATOSB','escuelaFM');
define('DATOSH','localhost');

// rutas de la web (url Vistas)

define("SERVIDOR","http://localhost/PaginasMuestrasPHP/WebEscuela2019");
define("RUTA_MISION_VISION",SERVIDOR . "/mision");
define("RUTA_LOCALIZACION",SERVIDOR . "/localizacion");
define("RUTA_HISTORIA",SERVIDOR . "/historia");
define("RUTA_REGISTRAR_PERSONAL", SERVIDOR . "/perfilAdmin/registroPersonal");

define("RUTA_PERFILADMIN","perfilAdmin");
define("RUTA_PERFILESTUDIANTE","perfilEstudiante");
define("RUTA_PERFILPROFESOR","perfilProfesor");


//rutas a datos PHP
define("DATOS_LOGIN",SERVIDOR . "/login");
define("INGRESA_PERIODOS",SERVIDOR . "/ingresaPeriodos");
define("INGRESA_NOTAS",SERVIDOR . "/ingresaNotas");
define("RUTA_CERRARSESSION",SERVIDOR . "/cerrarSession");


//recursos

define("RUTA_CSS", SERVIDOR . "/css/");
define("RUTA_JS", SERVIDOR . "/js/");
define("RUTA_IMG", SERVIDOR . "/img/");
define("DIRECTORIO_RAIZ", realpath(__DIR__ . "/.."));

?>