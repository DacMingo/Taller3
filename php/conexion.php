<?php

class Conexion{
  private static $conexion;


  public static function abrir_conexion(){
    if(!isset(self::$conexion)){//si la variable $conexion esta iniciado
      try {
              self::$conexion = mysqli_connect("localhost", "usuario", "12345678","taller3"); 
              //print "conexion abierta";
            } catch (Exception $e) {
              print "ERROR:" . "<br>";
            }      
    }
  }
  public static function cerrar_conexion(){
    if(isset(self::$conexion)){
      self::$conexion=null;
      //print "conexion cerrada";
    }
  }

  public static function obtener_conexion(){
    return self::$conexion;
  }
}

?>