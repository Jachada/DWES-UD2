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
        $variable1;
        $variable2;
        $variable3;
    ?>
    <h1>Tabla de verdad del operador and</h1>
    <table border=1>
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <?php
                $variable1 = true;
                $variable2 = true;
                $variable3 = true;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 && $variable2 && $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = true;
                $variable2 = true;
                $variable3 = false;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 && $variable2 && $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = true;
                $variable2 = false;
                $variable3 = true;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 && $variable2 && $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = false;
                $variable2 = true;
                $variable3 = true;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 && $variable2 && $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = true;
                $variable2 = false;
                $variable3 = false;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 && $variable2 && $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = false;
                $variable2 = false;
                $variable3 = true;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 && $variable2 && $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = false;
                $variable2 = true;
                $variable3 = false;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 && $variable2 && $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = false;
                $variable2 = false;
                $variable3 = false;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 && $variable2 && $variable3); ?></td>
        </tr>
    </table>
    <h1>Tabla de verdad del operador or</h1>
    <table border=1>
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <?php
                $variable1 = true;
                $variable2 = true;
                $variable3 = true;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 || $variable2 || $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = true;
                $variable2 = true;
                $variable3 = false;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 || $variable2 || $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = true;
                $variable2 = false;
                $variable3 = true;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 || $variable2 || $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = false;
                $variable2 = true;
                $variable3 = true;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 || $variable2 || $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = true;
                $variable2 = false;
                $variable3 = false;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 || $variable2 || $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = false;
                $variable2 = false;
                $variable3 = true;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 || $variable2 || $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = false;
                $variable2 = true;
                $variable3 = false;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 || $variable2 || $variable3); ?></td>
        </tr>
        <tr>
            <?php
                $variable1 = false;
                $variable2 = false;
                $variable3 = false;
            ?>
            <td><?php var_export($variable1); ?></td>
            <td><?php var_export($variable2); ?></td>
            <td><?php var_export($variable3); ?></td>
            <td><?php var_export($variable1 || $variable2 || $variable3); ?></td>
        </tr>
    </table>
</body>
</html>