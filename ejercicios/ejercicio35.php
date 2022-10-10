<?php
//CONSUMIR UNA API CON PHP
$url="https://api.dailymotion.com/videos?channel=sport&limit=10";
$opc=array("ssl"=>array("verify_peer"=>false,"verify_peer"=>false));//desactiva la comptabilidad para convetirla el lectura
$respuesta=file_get_contents($url,false,stream_context_create($opc));//convertir el formato en objetos para poder leer
$objRespuesta=json_decode($respuesta);

//print_r($objRespuesta);

foreach($objRespuesta->list as $video){
    //print_r($video->title);
    //print_r($video->channel);
}
?>
<ul><!--MOSTRAR EN FORMA DE LISTA-->
    <?php foreach($objRespuesta->list as $video){?>
    <li><?php echo ($video->title);?> | <?php echo ($video->channel); ?></li>
    <?php } ?>
</ul>