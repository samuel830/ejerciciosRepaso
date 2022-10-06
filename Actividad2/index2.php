<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $contenido = array();
        $manejador = fopen("prueba.csv","r");
        while(!feof($manejador)){
            $linea = fgets($manejador);
            $lineaSinComa = explode(";",$linea);
            array_push($contenido,$lineaSinComa);
        }
        fclose($manejador);

        /*print_r($contenido);
        echo "<br>";*/

        foreach($contenido as $clave => $valores){
            echo "<label><b>".$valores[0]."</b></label><br>";
            switch($valores[1]){
                case "text":
                    echo "<input type='$valores[1]'><br>";
                    break;
                case "number":
                    echo "<input type='$valores[1]'><br>";
                    break;
                case "radio":
                    $opciones = explode(",",$valores[2]);
                    for($i=0;$i < sizeof($opciones);$i++){
                        echo "<input type='$valores[1]'>".$opciones[$i]."<br>";
                    }
                    break;
                case "checkbox":
                    $opciones = explode(",",$valores[2]);
                    for($i=0;$i < sizeof($opciones);$i++){
                        echo "<input type='$valores[1]'>".$opciones[$i]."<br>";
                    }
                    break;
                case "textarea":
                    echo "<".$valores[1]."></".$valores[1]."><br>";
                    break;
                case "select":
                    $opciones = explode(",",$valores[2]);
                    echo "<".$valores[1].">";
                    for($i=0;$i < sizeof($opciones);$i++){
                        echo "<option>$opciones[$i]</option>";
                    }
                    echo "</".$valores[1].">";
                    break;
            }
            echo "<br>";
        }
        echo "<input type='submit'><br>";
    ?>
</body>
</html>