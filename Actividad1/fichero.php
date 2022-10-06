<?php

function buscar_clave_array($array,$clave){
    $existe = false;
    foreach($array as $claves => $valores){
        if($claves == $clave){
            $existe = true;
        }
    }
    echo $existe;
}

function buscar_valor_array($array,$valor){
    $existe = false;
    foreach($array as $claves => $valores){
        if($valores == $valor){
            $existe = true;
        }
    }
    echo $existe;
}

function buscar_texto_fichero($nombreFichero,$arrayTextos){
    $manejador = fopen($nombreFichero,"r");
    while(!feof($manejador)){
        $linea = fgets($manejador);
    }
    fclose($manejador);

    $letras = explode(",",$linea);
    $arrayRes = array();

    for($i = 0, $size = count($letras); $i < $size; ++$i){
        for ($j=0, $size2 = count($arrayTextos); $j < $size2; ++$j) { 
            if($letras[$i] == $arrayTextos[$j]){
                $arrayRes[$letras[$i]]+=1;
            }
        }
    }
    return $arrayRes;
}

?>