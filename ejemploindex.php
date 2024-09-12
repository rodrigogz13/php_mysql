<?php

$servidor = "local host";
$usuario = "root";
$contraseña = "sistemas";
$base_datos = "Alumnos";

$conexion = new mysqli($servidor, $usuario, $contraseña, $base_datos);


if ($conexion ->connect_error){
    die("Error en la conexion: " . $conexion->connect_error);
}

    echo "conexion exitosa a la base de datos";


    $sql = "SELECT id, nombre, email FROM usuarios";
    $resultado = $conexion->query($sql);


    if ($resultado->num_rows > 0) {

        while($fila = $resultado->fetch_assoc()){
            echo "ID: " . $fila ["id"]. "- Nombre:" . $fila["nombre"]. "- Email:" . $fila["email"]. "<br>;"
        }
    }else{
        echo "No se encontraron resultados.";
    }


$conexion->close();
?>