<? 
echo "Hola mundo!!!";
$nombre='pepe';
echo "hola ".$nombre;
echo "hola $nombre <br>";

$edad = 30;
$altura = 1.75;
$estudia = True;    //FALSE

/*
    Bloque
*/

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$ejemplo = [1, 'texto', 15.6, TRUE, []];

echo $numeros[1].'<br>';

$persona = [        //array con indices
    "nombre"=>'Pepe',
    "apellido" => 'Gomez',
    "edad" => 35,
];

echo $persona['apellido'];

?>