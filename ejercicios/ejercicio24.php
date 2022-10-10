<?php

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

$objetoAlumno = new persona('');//instancia o creación de un objeto
$objetoAlumno->asignarNombre("Oscar");//asignación de valor

$objetoAlumno2 = new persona('');
$objetoAlumno2->asignarNombre("Pedro<br>");
$objetoAlumno2->imprimirNombre();

echo $objetoAlumno2->nomb;
echo "Edad de: ".$objetoAlumno2->mostrarEdad(); 

echo "<br>".$objetoAlumno->nomb;//se imprime la propiedad

?>