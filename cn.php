<?php
//Crear una variable con los siguientes parametros
//servidor,usuario,contraseña,nombre_baseDeDatos
$conexion = mysqli_connect("localhost", "root", "", "basedatos1");

/*if(!$conexion)
{
    echo 'Error en la conexion a la base de datos';
}
else
{
    echo 'Conexion exitosa a la base de datos';
}
*/