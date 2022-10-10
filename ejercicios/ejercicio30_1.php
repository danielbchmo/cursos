<?php
session_start();//inicia sesión en otra página

if(isset ($_SESSION["usuario"])){//ISSET -> Para saber si hay algo vacio o si tiene algo
    echo "Usuario: ".$_SESSION["usuario"]."<br>Estatus: ".$_SESSION["estatus"];
} 
else{
    echo "No hay datos";
}
?>