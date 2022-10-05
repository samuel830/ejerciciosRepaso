<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="contenedor">
        <form action="calculadora.php" method="post">
        <label class="subrayado"><b>Primer operador</b></label>
        <input type="text" name="primerOperador"><br><br>
        <label class="color"><b>Operacion</b></label>
        <select name="operacion">
            <option>seleccione una operacion</option>
            <option >+</option>
            <option >-</option>
            <option >/</option>
            <option >*</option>
        </select><br><br>
        <label class="subrayado"><b>Segundo operador</b></label>
        <input type="text" name="segundoOperador"><br><br>
        <input class="boton" type="submit">
        </form><br>
        <label class="subrayado"><b>Output = </b></label>
        
    </div>
</body>
</html>