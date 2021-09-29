<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $num1 = 3434;
        $num2 = 123;
        
        printf("El valor en binario de la variable1 es %b <br>", $num1);
        printf("El valor en binario de la variable2 es %b <br>", $num2);
        printf("El resultado de la operación de comparación bit a bit AND es %b <br>", $num1 & $num2);
        printf("El resultado de la operación de comparación bit a bit OR es %b <br>", $num1 | $num2);
        printf("El resultado de la operación de comparación bit a bit XOR es %b <br>", $num1 ^ $num2);
        printf("El resultado de la operación de comparación bit a bit NOT de variable1 es %b <br>", ~$num1);
        printf("El resultado de la operación de comparación bit a bit NOT de variable2 es %b <br>", ~$num2);

    ?>
    
</body>
</html>