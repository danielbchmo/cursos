<?php
//Abrir un archivo en PHP
$archivo="contenido.txt";
$archivoAbierto=fopen($archivo,"r");//abre el archivo. 
$contenido=fread($archivoAbierto,filesize($archivo));//leer el archivo

echo $contenido;

?>