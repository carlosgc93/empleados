<?php
class Conexion
{
    private static $dbDatabase = "garca";
    private static $dbHost = "localhost";
    private static $dbUsuario = "root";
    private static $dbContrasena = "smtavo1991";
    private static $conexion = null;
    private static $opcionesDriver = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

    public static function conectar()
    {
        if( null == self::$conexion  )
        {
            try
            {
                self::$conexion = new PDO('mysql:host='. self::$dbHost .'; dbname='.self::$dbDatabase,self::$dbUsuario,self::$dbContrasena,self::$opcionesDriver);
                self::$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                self::$conexion->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
            }
            catch(PDOException $ex)
            {
                die( $ex->getMessage() );
            }
        }
        return self::$conexion;
    }

    public static function desconectar()
    {
        self::$conexion = null;
    }
}
