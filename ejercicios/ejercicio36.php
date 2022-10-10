<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion Include</title>
</head>

<body>
    <?php include 'ejercicio36_1.php'; ?><!--Include hace que si no hay errores muestra un warning pero con las instrucciones   -->
    <?php include_once 'ejercicio36_1.php'; ?><!--Incldue_once funciona para que no repita el contenido si se cita dos veces una página-->
    <?php echo "Hola estoy en la página principal"; ?>
</body>
</html>