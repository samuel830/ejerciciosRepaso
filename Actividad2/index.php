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
            array_push($contenido,explode(";",$linea));
        }
        fclose($manejador);

        foreach($contenido as $clave => $valores){
        echo "<label for='".$valores[0]."'>".ucfirst($valores[0])."</label>";
        switch($valores[1]){
            case "text":
                echo "<input type='".$valores[1]."' name='".$valores[0]."'><br>";
                break;
            case "radio":
                $opciones = explode(",", $valores[2]);
                echo "<br>";
                foreach($opciones as $clave => $valor) {
                    echo "<input type='".$valores[1]."' name='".$valores[0]."' value='".$valor."'> ".ucfirst($valor)."<br>";
                }
                break;
            case "checkbox":
                $opciones = explode(",", $valores[2]);
                echo "<br>";
                foreach($opciones as $clave => $valor) {
                  echo "<input type='".$valores[1]."' name='".$valores[0]."' value='".$valor."'> ".ucfirst($valor)."<br>";
                }
                break; 
            case "textarea":
                echo "<br>";
                echo "<".$valores[1]." name='".$valores[0]."' rows=5 cols=50></".$valores[1]."><br>";
                break;
        }
        echo "<br>";
        }
        echo "<input type='submit'/>";
    ?>
</body>
</html>