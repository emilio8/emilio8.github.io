<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de Emilio Moral Díaz</title>
</head>
<body>
    <h1>Emilio Moral Diaz</h1>
    <?php
        date_default_timezone_set('Europe/Madrid');
        echo date('H:i:s');
    ?>
    <div id="relojCliente"></div>
    <script src="js/reloj.js"></script>

    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" min="1" required>
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>