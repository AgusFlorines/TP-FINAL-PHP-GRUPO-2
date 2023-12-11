<?php

require "conexion.php";


echo "Estoy actualizando un Registro";



//mostrar Datos.....usuario

//traer....id

$usuarioID = "15";
$nombreID = "Martin";

?>
  



    <h2>Tabla de datos</h2>




$queryActualizar = "UPDATE alumnos4 SET nombre='juan gabriel' WHERE id_alumno = '$usuarioID'";

$actualizarRegistro = mysqli_query($conexion,$queryActualizar);

if($actualizarRegistro){
    echo "Actualizado";
}