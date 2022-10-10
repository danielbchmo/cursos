<?php
/*FUNCION PARA JSON DECODE
*Los formatos JSON son información que envian algunas apis, como para consumir
*un video, donde contiene información como url, nombre, autor, etc.
*/
//cada corchete representa información
$jsonContenido='[ 
    {"nombre":"Oscar","apellido":"Bachomo"},
    {"nombre":"Jose","apellido":"Garcia"}
 ]';


 $resultado=json_decode($jsonContenido);//convierte el string de jsonContenido en un resultado.
 //print_r($resultado);

 //resultado se tranforma en persona para leer y recorres todo el resultado.
 foreach($resultado as $persona){
   echo ($persona->nombre)." ".($persona->apellido)."<br>";
 }