<?php
//El tipo FILE se recibe de la siguiente manera:

if ($_POST) {
    print_r($_POST);

    print_r($_FILES['archivo']['name']);//Ver la información que llega

    //Copiar los archivos a nuestro servidor
    move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);//Se va a copiar el archivo temporal (tmp_name) y lo pegara en el archivo original.

}
 
?>

<!DOCTYPE html> 
<html lang="es">

<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input tipo file</title>
</head>

<body>
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post"><!--enctype activa la compatibilidad para adjuntar archivos tipo doc-->
        Imagen:
        <input type="file" name="archivo" id=""><br>

        <br><input type="submit" name="enviar" value="Enviar">
    </form>

</body>

</html>