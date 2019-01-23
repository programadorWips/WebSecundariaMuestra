<?php

class Conexion{
	
	private static $conexion;
	
	public static function abrirConexion(){
		
		if(!isset(self::$conexion)){
			
			try{
			
				include_once("config.php");
				
				self::$conexion = new PDO('mysql:host=' . DATOSH . '; dbname=' . DATOSB, DATOSR, DATOSP);
				self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
				
			}catch(Exception $e){
				
				echo "Error: " . $e->getMessage() . "" . $e->getLine();
				
			}
			
		}
		
	}
	
	public static function cerrarConexion(){
		
		if(isset(self::$conexion)){
			
			self::$conexion = null;
			
		}
		
	}
	
	public static function obtenerConexion(){
		
		return self::$conexion;
	}
	
}

?>