<?php
//class es una palabra reservada
class Persona{
    private $nombre;
    private $apellido;
    private $edad;
    private $pasatiempos;

    function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = 18;

    }

    function MayorEdad(){
        return $this -> edad >= 18 ? 'Si' : 'No';
    //Si: se asigna si el primer valor se cumple si es no asigna otro valor (es una expresion booleana)
    }       

    function setEdad($val){
        $this->edad = $val;
    }
    function getEdad(){
        return $this->edad;
    }
}

$persona = new Persona('Pepe','Gomez');
$persona ->setEdad(18);
echo $persona ->MayorEdad();

?>