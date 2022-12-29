<?php

//Suponiendo que ya he recibido los datos
$usuario = "Por favor";
$mensaje = "";

if ($usuario === "Oswaldo")
    {
    $mensaje = "Bienvenido Oswaldo";
    } 
else if ($usuario === "Daniel")
    {
    $mensaje = "Bienvenido Daniel";
    } else if ($usuario === "Karla")
    {
        $mensaje = "Bienvenida Karla";
    } else {
        $mensaje = "usuario no encontrado";
    }




echo $mensaje;

?>
