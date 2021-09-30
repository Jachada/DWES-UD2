<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        echo $_SERVER["PHP_SELF"]; // El nombre de archivo del script que se está ejecutando actualmente, en relación con la raíz del documento.
        echo "<br>";
        echo $_SERVER["SERVER_ADDR"]; // Devuelve la dirección IP del servidor host.
        echo "<br>";
        echo $_SERVER["SERVER_NAME"]; // Indica el nombre del servidor host.
        echo "<br>";
        echo $_SERVER["DOCUMENT_ROOT"]; // Ruta absoluta para documentar la raíz del sitio web en el sistema de archivos del servidor.
        echo "<br>";
        echo $_SERVER["REMOTE_ADDR"]; // Proporciona la dirección IP desde la cual se envió la solicitud al servidor web.
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"]; // Recupera el método de solicitud utilizado para acceder a la página.
        echo "<br>";
        echo "<br>";

        variables();
        function variables() {
            GLOBAL $varGlobal;
            STATIC $varEstatica;
            $varLocal = "Local";
            $varGlobal = "Global";
            $varEstatica = "Estatica";
            echo $varLocal;
            echo "<br>";
            echo $varEstatica;
            echo "<br>";
            echo $varGlobal;
            echo "<br>";
            echo "<br>";
        }
        echo "Llamando a la variable local desde fuera: ", $varLocal;
        echo "<br>";
        echo "Llamando a la variable estática desde fuera: ", $varEstatica;
        echo "<br>";
        echo "Llamando a la variable global desde fuera: ", $varGlobal;
        
    ?>
    
</body>
</html>