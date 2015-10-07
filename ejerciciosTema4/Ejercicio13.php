<!DOCTYPE html>
<!--
Ejercicio 13
Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos
son negativos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cuenta = $_GET['cuenta'];
        $positivos = $_GET['positivos'];
        $n = $_GET['n'];

        if (!isset($cuenta)) {       //si la cuenta no se ha inicializado 
            echo 'Escriba 10 numeros enteros (positivos o negativos).';
            echo '<form action="Ejercicio13.php" method="get">';
            echo '<input type="number" name="n"><br>';
            echo '<input type="hidden" name="cuenta" value="0">';
            echo '<input type="hidden" name="positivos" value="0">';
            echo '<input type="submit" value="aceptar">';
            echo '</form>';
        } else {

            if ($cuenta <= 9) {
                $cuenta++;
                if ($n > 0) {
                    $positivos++;
                } 
                echo 'ha introduciro ' . $cuenta . ' numeros<br>';
                echo '<form action="Ejercicio13.php" method="get">';
                echo '<input type="number" name="n" value="' . $n . '">';
                echo '<input type="hidden" name="cuenta" value="' . $cuenta . '">';
                echo '<input type="hidden" name="positivos" value="' . $positivos . '">';
                echo '<input type="submit" value="aceptar">';
                echo '</form>';

                
            } else {
                echo 'Hay ' . $positivos . ' numeros positivos<br>';
                echo 'Hay ' . (10 - $positivos) . ' numeros negativos';
            }
        }
        ?>
    </body>
</html>
