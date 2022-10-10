<?php

class conexion{

    private $servidor="localhost";
    private $usuario="root";
    private $contrasenia="";
    private $conexion;

    public function __construct(){//incializa la conexion
        //Crear estancia de conexión con PDO
        try{
            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            return "falla de conexión".$ex;
        }
    }
    
    public function ejecutar($sql){//ejecutar, actualizar, borrar
        //Die(var_dump($sql));
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();//Instrucción que ejecuta un sql y regresa un Id de insercción.
    }
    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();//retornar los registros de la consulta sql.
    }
}

?>