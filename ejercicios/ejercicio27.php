<?php

class UnaClase{
    public static function unMetodo(){
        echo "Hola soy un método estatico";
    }
}

/*$obj=new UnaClase();
$obj->unMetodo();*/

UnaClase::unMetodo(); //Es el acceso al metodo estatico :: . Los mismo que arriba 

?>