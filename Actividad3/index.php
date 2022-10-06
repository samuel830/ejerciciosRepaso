<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Seleccione un equipo a mostrar:</label>
        <select name="equipo">
            <option>Equipo</option>
            <option>Ponferradina</option>
            <option>LasPalmas</option>
            <option>Tenerife</option>
        </select>
        <input type="submit">
    </form>

    <?php

    include 'equipo1.php';
    include 'equipo2.php';
    include 'equipo3.php';
    $equipoSeleccionado = $_POST["equipo"];

    function mostrarEquipo($array){
        foreach($array as $nombres => $info){
            echo "$nombres<br>";
            foreach($info as $caracteristicasC =>$caracteristicasV){
                echo "$caracteristicasC : $caracteristicasV<br>";
            }
            echo "<hr>";
        }
    }

    switch($equipoSeleccionado){
        case "Ponferradina":
            mostrarEquipo($Pontferradina);
            break;
        case "LasPalmas":
            mostrarEquipo($LasPalmas);
            break;
        case "Tenerife":
            mostrarEquipo($Tenerife);
            break;
    }

    ?>
</body>
</html>

<?php

?>