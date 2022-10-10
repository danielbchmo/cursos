<?php 
//Escritura de archivos
$nombArchivo="archivo.txt";
$contenidoArchivo="Hola gente, saludos.";

$crearArchivo=fopen($nombArchivo,"w");

fwrite($crearArchivo,$contenidoArchivo);//escribir archivo
fclose($crearArchivo);//cerrar archivo

?>