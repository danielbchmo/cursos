<?php
//CONEXION A BASE DE DATOS
$servidor="localhost";//comunicarse con la red local -> 127.0.0.1
$usuario="root";
$contraseña="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contraseña);//clase para conectar a base de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql= "SELECT * FROM `fotos`";//selección de los campos fotos

    $sentencia=$conexion->prepare($sql);//Se ejectua la acción de $sql
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();//devuelve el resultado de la sentencia

    //print_r($resultado);

    foreach($resultado as $foto){
        print_r($foto['nombre']); 
    }

    echo "Conexión exitosa";

}catch(PDOException $error){
    echo "Conexión erronea".$error;

}


?>