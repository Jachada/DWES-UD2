<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $precioPantalon = 29.99;
        $compradoPantalon = 3;
        $precioCamisa = 25.99;
        $compradoCamisa = 2;
        define ("DESCUENTO", 8);
        $precioTotal = ($precioPantalon*$compradoPantalon)+($precioCamisa*$compradoCamisa);
        $precioTotalDescuentos = ($precioTotal*(1-DESCUENTO/100));
        

        echo ("El precio de un pantalón es de $precioPantalon");
        echo ("<br>");
        echo ("El precio de una camisa es de $precioCamisa");
        echo ("<br>");
        echo ("El precio sin descuento es de $precioTotal");
        echo ("<br>");
        printf ("El total con descuento es de %.2f", $precioTotalDescuentos);
        echo ("<br><br>");

        $precioZapatos = 45.99;
        $descuentoZapatos = 12;
        $precioZapatosDescuentos = ($precioZapatos*(1-$descuentoZapatos/100));
        $precioTotalDescuentos += $precioZapatosDescuentos;

        echo ("El precio de loz zapatos sin descuento es de $precioZapatos");
        echo ("<br>");
        printf ("El precio de loz zapatos con descuento es de %.2f", $precioZapatosDescuentos);
        echo ("<br>");
        printf ("El total de la cuenta es de %.2f", $precioTotalDescuentos);

    

    ?>
</body>
</html>