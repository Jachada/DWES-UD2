<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $baseTriangulo = 4;
        $alturaTriangulo = 3;
        $ladoCuadrado = 5;
        $diagonalMayorRombo = 7;
        $diagonalMenorRombo = 6;
        $radioCirculo = 2;
        define ("PI", 3.14159);

        printf("El triángulo de altura %d y base %d tiene como área %d", $alturaTriangulo, $baseTriangulo, ($baseTriangulo*$alturaTriangulo)/2);
        echo ("<br>");
        printf("El cuadrado de lado %d tiene como área %d", $ladoCuadrado, ($ladoCuadrado*2));
        echo ("<br>");
        printf("El rombo de diagonal mayor %d y diagonal menor %d tiene como área %d", $diagonalMayorRombo, $diagonalMenorRombo, ($diagonalMayorRombo*$diagonalMenorRombo));
        echo ("<br>");
        printf("El circulo de rádio %d tiene como área %d", $radioCirculo, pow($radioCirculo, 2)*PI);

    ?>
</body>
</html>