<?php

//indices no numericos "p"=>"pera"
$frutas=array("f"=>"fresa","p"=>"pera","m"=>"manzana");

//print_r($frutas);

echo $frutas["m"]."<br>";

foreach($frutas as $i=>&$valor){

    //echo $i."<br>";//muestra unicamente los indices

    echo $frutas[$i]." tiene el indice de: ".$i."<br>"; //muestra el nombre de las frutas
}

?>
