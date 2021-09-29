<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        $opeDiarias = "6";
        $opeSemanal = 8;
        define("MAXOPDIARIA", 6);
        define("MAXOPSEMANAL", 30);

        // SI SE UTILIZA var_export Y LO METEMOS EN ECHO SE DEBE UTILIZAR LA CONCATENACIÓN CON , YA QUE CON + NO LO MUESTRA CORRECTAMENTE
        // MAL echo ("El número de operaciones diarias es mayor o igual que el máximo: " + var_export($opeDiarias >= MAXOPDIARIA) + <br>);
        echo "El número de operaciones diarias es mayor o igual que el máximo: ", var_export($opeDiarias >= MAXOPDIARIA);
        echo "<br>";
        echo "El número de operaciones diarias es mayor o igual que el máximo: ", var_export($opeSemanal >= MAXOPSEMANAL);
        echo "<br>";
        echo "El número de operaciones diarias es mayor o igual que el máximo: ", var_export($opeDiarias === MAXOPDIARIA);
        echo "<br>";
        echo "El número de operaciones diarias es mayor o igual que el máximo: ", var_export($opeDiarias != $opeSemanal);

        /*
        USANDO IF PORQUE ME CAMBIASTE EL ENUNCIADO A LA MITAD xD
        if ($opeDiarias >= MAXOPDIARIA) {
            echo("El número de operaciones diarias es mayor igual que el máximo<br>");
        } else {
            echo("El número de operaciones diarias es menor que el máximo<br>");
        }
        if ($opeSemanal >= MAXOPSEMANAL) {
            echo("El número de operaciones semanales es mayor igual que el máximo<br>");
        } else {
            echo("El número de operaciones semanales es menor que el máximo<br>");
        }
        if ($opeDiarias === MAXOPDIARIA) {
            echo("El número de operaciones diarias es exactamente igual al máximo<br>");
        } else {
            echo("El número de operaciones diarias es distinto al máximo<br>");
        }
        if ($opeDiarias != $opeSemanal) {
            echo("El número de operaciones diarias es distinto al de operaciones semanales<br>");
        } else {
            echo("El número de operaciones diarias es igual al de operaciones semanales<br>");
        }
        */

    ?>
    
</body>
</html>