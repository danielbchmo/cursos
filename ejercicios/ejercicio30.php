<?php

session_start();//Mantener información mientras el navegador este abierto

$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="logeado";

echo "Sesión iniciada"."<br>";

echo "Usuario: ".$_SESSION["usuario"]."<br>Estatus: ".$_SESSION["estatus"];

?>