<?php

use persona as GlobalPersona;

class persona {
    public $nomb;//propiedades
    private $edad;//Solo es accesible por la clase.
    protected $altura;//Definido como solo accesible de la misma clase y herencia.

    public function asignarNombre($nuevoNombre){//acciones o métodos con la palabra function
        $this->nomb=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nomb."<br>";
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

class trabajador extends persona{
    public $puesto;//propiedad nueva
    public function presentarComoTrabajador(){
        echo "Hola soy ".$this->nomb." y mi puesto es ".$this->puesto;
    }
}

$objetoTrabajador = new trabajador('');//instancia o creación de un objeto
$objetoTrabajador->asignarNombre("Oscar Bachomo");//asignación de valor
$objetoTrabajador->puesto="Profesor";
$objetoTrabajador->presentarComoTrabajador();


?>