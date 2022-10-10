<?php
//CONEXION A BASE DE DATOS
$servidor="localhost";//comunicarse con la red local -> 127.0.0.1
$usuario="root";
$contraseña="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contraseña);//clase para conectar a base de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg')";

    $conexion->exec($sql);//ejecuta la cadena de sql.
    
    echo "Conexión exitosa";

}catch(PDOException $error){
    echo "Conexión erronea".$error;
    
}

?>