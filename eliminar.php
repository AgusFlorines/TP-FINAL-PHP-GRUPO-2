<?php

require "conexion.php";

$queryEliminar = "DELETE FROM oradores WHERE id_orador = '30'";

$deleteRegistro = mysqli_query($conexion,$queryEliminar);

if($deleteRegistro){
    echo "Eliminado";
}

?>