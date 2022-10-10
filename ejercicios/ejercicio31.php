<?php
//Recepción de datos de un formulario
$txtNombre = "";
$radioLenguaje = "";

$checkphp = "";
$checkhtml = "";
$checkcss = "";

$lsanime = "";
$txtComentario = "";

if ($_POST) {

    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : ""; //? -> de lo contrario : -> harás lo siguiente
    ////////////Si hay información en el txt,  ? asignaselo        : de lo contrario es vacio. IF TERNARIO
    $radioLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";


    $checkphp = (isset($_POST['checkphp']) == "si") ? "checked" : "";
    $checkhtml = (isset($_POST['checkhtml']) == "si") ? "checked" : "";
    $checkcss = (isset($_POST['checkcss']) == "si") ? "checked" : "";
    //print_r($radioLenguaje  );

    $lsanime = (isset($_POST['lsanime'])) ? $_POST['lsanime'] : "";
    //print_r($lsanime);

    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <?php if ($_POST) { ?>
        <!--Se abre el php, esta parte guarda la información al recargar página-->
        <strong>Hola</strong>: <?php echo $txtNombre . "<br>"; ?>
        <!--Podemos colocar un php dentro del html-->
        <strong>Tu lenguaje es : </strong> <?php echo $radioLenguaje; ?>
        <br>
        <strong>Estas aprendiendo: </strong>
        <?php echo ($checkphp == "checked") ? "PHP" : ""; ?>
        <?php echo ($checkhtml == "checked") ? "HTML" : ""; ?>
        <?php echo ($checkcss == "checked") ? "CSS" : ""; ?>
        <br>
        <strong>El anime que elegiste fue: </strong>
        <?php echo $lsanime; ?>
        <br>
        <strong>Tu mensaje es: </strong><?php echo $txtComentario; ?>
        <br><br><br>
    <?php } ?>
    <!--Se cierra el php-->

    <form action="ejercicio31.php" method="post">

        Nombre:<br>
        <!--El value funciona para dejar los valores colocados en la barra de texto-->
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        </br>
        ¿Te gusta?:<br>
        <br>php:<input type="radio" <?php echo ($radioLenguaje == "php") ? "checked" : ""; ?> name="lenguaje" value="php" id=""><br>
        <!--radio -> boton seleccionador-->
        <br>html:<input type="radio" <?php echo ($radioLenguaje == "html") ? "checked" : ""; ?> name="lenguaje" value="html" id=""><br>
        <br>css:<input type="radio" <?php echo ($radioLenguaje == "css") ? "checked" : ""; ?> name="lenguaje" value="css" id=""><br>

        <!--CHECK BOX-->
        <br> Estas aprendiendo:
        <br>php: <input type="checkbox" <?php echo $checkphp; ?> name="checkphp" value="si" id="">
        <br>html: <input type="checkbox" <?php echo $checkhtml; ?> name="checkhtml" value="si" id="">
        <br>css: <input type="checkbox" <?php echo $checkcss; ?> name="checkcss" value="si" id="">

        <!--INPUT SELECT-->
        <br><br>¿Qué anime te gusta?:<br>
        <select name="lsanime" id="">
            <option value="">[Ninguna serie]</option>
            <option value="naruto" <?php echo ($lsanime == "naruto") ? "selected" : ""; ?>>Naruto</option>
            <option value="bleach" <?php echo ($lsanime == "bleach") ? "selected" : "" ?>>Bleach</option>
            <option value="onepiece" <?php echo ($lsanime == "onepiece") ? "selected" : "" ?>>One Piece</option>
        </select>
        <br><br>

        <!--Text Area-->
        ¿Tienes alguna duda?
        <br><textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario; ?>
        </textarea>

        <br><input type="submit" value="Enviar información">
    </form>

</body>

</html>