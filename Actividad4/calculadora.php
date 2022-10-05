<?php
    $primerOperador = $_POST["primerOperador"];
    $operacion = $_POST["operacion"];
    $segundoOperador = $_POST["segundoOperador"];
    $resultado = 0;

    switch($operacion){
        case "+":
            $resultado = $primerOperador + $segundoOperador;
            break;
        case "-":
            $resultado = $primerOperador - $segundoOperador;
            break;
        case "/":
            $resultado = $primerOperador / $segundoOperador;
            break;
        case "*":
            $resultado = $primerOperador * $segundoOperador;
            break;
    }

    echo $resultado;
?>