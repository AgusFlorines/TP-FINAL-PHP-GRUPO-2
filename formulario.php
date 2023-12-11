<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
</head>

<body>

<br><br>
    <!-- Form -->
    <h4 id="Orador2">CONVIÉRTETE EN UN </h4>
    <h2>ORADOR</h2>

    <div id="Formulario">
        <form action="datos.php" method="POST" class="container">
            <p>Anótate como orador para dar una <a id="subrayado">charla ignite</a>. Cuéntanos de qué quieres hablar!
            </p>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
            <br>
            <input type="mail" name="mail" id="mail" placeholder="Correo electrónico" required>
            <input type="date" name="fecha_alta" id="fecha_alta">
            <br>
            <textarea name="tema" id="tema" placeholder="Sobre qué quieres hablar?" required cols=66 rows=3></textarea>
            <br>
            <br>
            <h6>Recuerda incluir un título para tu charla</h6>

            <input type="submit" value="Enviar" id="Enviar">
        </form>
    </div>

    <!-- FIN Form -->

    
    <br><br>


</body>

</html>