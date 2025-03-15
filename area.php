<?php
include 'oop.php';      //el include y require funcionan iguales pero el include muestra una advertencia cuando no encuentra el archivo pero aun así ejecuta el codigo
//require 'oop.php';    //Y el require muestra una advertencia tambien pero detiene la ejecucion


$arista = $_POST['arista'];     //se captura el valor
$cuadrado = new Cuadrado();
$cuadrado->set('arista', $arista);


$base = $_POST['base'];
$altura = $_POST['altura'];
$triangulo = new Triangulo();
$triangulo -> set ('base', $base);
$triangulo -> set ('altura', $altura)

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Areas</title>
</head>
<body>
    <h1>Area del cuadrado</h1>
    <p><?php
    echo $cuadrado->toString();
    
    ?></p>

    <h1>Area del Triangulo</h1>
    <p><?php
    echo $triangulo->toString();
    ?></p>
    <a href="index.html">Volver</a>
</body>
</html>