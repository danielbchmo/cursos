<?php

class persona {
    public $nomb;//propiedades
    private $edad;//Solo es accesible por la clase.
    protected $altura;//Definido como solo accesible de la misma clase y herencia.

    function __construct($nuevoNombre){//constructor
            $this->nomb=$nuevoNombre;
    } 

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

$objetoAlumno = new persona("Oscar Bachomo");
//$objetoAlumno->asignarNombre("Pedro<br>");
$objetoAlumno->imprimirNombre();


?>