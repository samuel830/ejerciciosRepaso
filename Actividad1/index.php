<?php
include 'fichero.php';

$arrayNombres = array("453974717V" => "Samuel","45875896H" => "Seferino",
"74589632L" => "Juan");

$arrayTextos = array("a","q","h","j","p");

//buscar_clave_array($arrayNombres,"45875896H");
//buscar_valor_array($arrayNombres,"Samuel");
buscar_texto_fichero("abecedario.txt",$arrayTextos);
?>