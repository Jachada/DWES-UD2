<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        $variable1 = "1234";
        echo $variable1;
        echo "<br>";
        echo "Comprobar que tipo es la variable1 con gettype:  ", gettype($variable1);
        echo "<br>";
        echo "Comprobar que tipo es la variable1 con is_string:  ", var_export(is_string($variable1));
        echo "<br>";
        echo "Comprobar que tipo es la variable1 con is_numeric:  ", var_export(is_numeric($variable1));
        echo "<br>";

        $variable1 = 12.34;
        echo $variable1;
        echo "<br>";
        echo "Comprobar que tipo es la variable1 con is_float:  ", var_export(is_float($variable1));
        echo "<br>";
        echo "Comprobar que tipo es la variable1 con is_string:  ", var_export(is_string($variable1));
        echo "<br>";
        echo "Comprobar que tipo es la variable1 con is_scalar:  ", var_export(is_scalar($variable1));
        echo "<br>";

        echo (integer)$variable1;
        echo "<br>";

        $variable2 = "82var28";
        echo $variable2;
        echo "<br>";
        echo (integer)$variable2; // Al forzar un String que empieza por un número a Int si se convierte pero sólamente la parte anterior a la primera letra
    ?>
</body>
</html>