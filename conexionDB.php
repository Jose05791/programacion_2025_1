<?php
$hostDB = "localhost";     //ruta ip o url donde esta el motor de bases de datos
$userDB = "root";           //usuario de la base de datos
$pwdDB = "";                //contraseña de la base de datos (va vacia porque no tiene)
$nameDB = "programacion_avanzada_db1";               //nombre de la base de datos
//$portDB = "3306";            //puerto de la base de datos
$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);              //tiene la instancia de la base de datos los socket permiten una conexion directa a la base de datos (se abre una puerta de conexion)
if($conexDB ->connect_error){   //connect_error manda un mensaje de error de conexion
    echo $conexDB ->connect_error;
    die();
}

echo "conexion exitosa <br>";

$sql = "select * from estudiantes";  //extrae la info de una tabla
$resultadosSQL = $conexDB ->query($sql);
if($resultadosSQL->num_rows>0){
    while($row = $resultadosSQL -> fetch_assoc()){
        $id = $row['id'];
        $nombre = $row['nombre'];
        $cod = $row['codigo'];
        $email = $row['email'];
        echo "$id $cod $nombre $email <br>";
    }

}else{
    echo "<br>No hay registros";
}

$sql = "insert into estudiantes (codigo, nombre, email) values";
$sql .= "(23555, 'Maria', 'maria@testt.com')";

$resultadosSQL = $conexDB ->query($sql);
if($resultadosSQL){
    echo "<br>Datos guardados<br>";
}else{
    echo "<br>No fue posible guardar la informacion<br>";
}



$conexDB->close();      //cierra la puerta de conexion
