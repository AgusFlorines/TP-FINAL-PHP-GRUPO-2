<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./styles.css">
</head>
<body>
    
</body>
</html>

<?php


$conexion = mysqli_connect("localhost","root","","integrador_cac");

$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellido"];
$mail = $_POST ["mail"];
$tema = $_POST ["tema"];
$fecha = $_POST ["fecha_alta"];


$instruccion_SQL = "INSERT INTO oradores (id_orador, nombre, apellido, mail, tema, fecha_alta)
 VALUES (NULL, '$nombre','$apellido','$mail', '$tema', '$fecha')";
                       
                            
        $resultado = mysqli_query($conexion,$instruccion_SQL);
        $consulta = "SELECT * FROM oradores";
        
$result = mysqli_query($conexion,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}

?>
<h4 id="Orador2">Lista de nuestros </h4>
    <h2>ORADORES</h2>
<br>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Mail</th>
      <th scope="col">Tema</th>
      <th scope="col">Fecha de alta</th>
      <th scope="col"></th>
      <th scope="col"></th>
      </tr>
  </thead>


<?php
while ($mostrar = mysqli_fetch_array($result))
 {
    ?>
    <tbody>
    <tr>
      <td><?php echo $mostrar ['id_orador']?></td>
      <td><?php echo $mostrar ['nombre']?></td>
      <td><?php echo $mostrar ['apellido']?></td>
      <td><?php echo $mostrar ['mail']?></td>
      <td><?php echo $mostrar ['tema']?> </td>
      <td><?php echo $mostrar ['fecha_alta']?></td>
      
      <td><button type="button" class="btn btn-success">
      <img src="./Imagenes/editar.png" alt="">
      Editar</button>
</td>
<td><button type="button" class="btn btn-danger"> <img src="./Imagenes/eliminar2.png" alt="">
  Eliminar</button>
</td>

    </tr>

    
<?php


    
}
echo "</table>";

mysqli_close( $conexion );


?>





