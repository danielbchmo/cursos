<?php

if ($_POST) {

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = $valorA + $valorB;
    echo "Suma: " . $suma;

    $resta = $valorA - $valorB;
    echo "<br>Resta: " . $resta;

    $producto = $valorA * $valorB;
    echo "<br>Producto: " . $producto;

    $division = $valorA / $valorB;
    echo "<br>Div: " . $division."<br>";

    //ANIDACION
    if($valorA==$valorB){

        echo "<br> El valor de A es igual al de B";

        if($valorA==4){
            echo "<br>El valor de A es igual a 4";
        }
        if($valorA==5){
            echo "<br>El valor de A es igual a 5";
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Anidado</title>
</head>

<body>
    <form action="ejercicio11.php" method="post">
        <br>
        Valor A:
        <input type="text" name="valorA" id=""><br>
        Valor B:
        <input type="text" name="valorB" id=""><br>

        <input type="submit" value="Calcular">
    </form>
</body>

</html>