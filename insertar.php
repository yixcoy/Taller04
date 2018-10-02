<?php


$xml = new DomDocument("1.0", "UTF=8");
$xml -> LOAD ('datos.xml');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];


$DATOSTag = $xml -> getElementsByTagName("DATOS")->ITEM(0);
$caracteristicasTag = $xml -> createElement("caracteristicas");

$nombreTag = $xml -> createElement("nombre", $nombre);
$apellidoTag = $xml -> createElement("apellido", $apellido);
$edadTag = $xml -> createElement("edad", $edad);


$caracteristicasTag -> appendChild($nombreTag); 
$caracteristicasTag -> appendChild($apellidoTag);
$caracteristicasTag -> appendChild($edadTag);




$DATOSTag -> appendChild($caracteristicasTag);

$xml-> save('datos.xml');


?>

<script lenguaje = "JavaScript" type="text/Javascript">

alert ("El registro se agregado correctamente");

</script>

<?php

	header("Location: index.html")


  ?>