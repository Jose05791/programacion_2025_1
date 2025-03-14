<?php

interface  FigurasGeometricas{  //es como armar una plantilla solo define su nombramiento no su comportamiento
    function area();
    function toString();
    
} 

abstract class Model
{       //hay que anteponerle abstrac para que no defina sus comportamientos
    abstract function prueba();

    function set($prop, $val)
    {
        $this->{$prop} = $val;
    }

    function get($prop)
    {
        return $this->{$prop};
    }
}


class Figura extends Model implements FigurasGeometricas{
    function area()
    {     //bloque
        echo 'Area';
    }

    function toString()
    {   //bloque
        echo 'toString';
    }

    function prueba(){
        echo 'Prueba';
    }
}



class Cuadrado extends Figura{
    protected $arista;
    function area()
    {
        return pow($this->arista, 2);     //Pow permite elevar al cuadrado
    }
    function toString()
    {
        $area = $this->area();
        return "Cuadrado con area $area";
    }
    function prueba()
    {
        parent::prueba();                   //para llamar elementos padre
        $area = pow($this->arista, 2);
        return "Cuadrado Prueba con area $area";
    }
}

class Triangulo extends Figura{
    protected $base;
    protected $altura;
    function area()
    {
        return ($this->base * $this->altura)/2;
    }
    function toString(){
        $area = $this->area();
        return "Triangulo con area $area";
    }
}

$cuadrado = new Cuadrado();
$cuadrado->set('arista', 5);
echo '<br>'.$cuadrado->prueba();

$triangulo = new Triangulo();
$triangulo ->set('base', 5);
$triangulo ->set('altura', 2);
echo '<br>' .$triangulo->toString();











