<!DOCTYPE html>
<!--
Ejercicio 16
Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 16</title>
    </head>
    <body>
        <?php
        $num = $_GET['num'];

        if (!isset($num)) { // si no se ha inicializado $num
            echo 'Introduce un numero y te diré si es primo o no.';
            echo '<form action="Ejercicio16.php" method="get">';
            echo '<input type="number" name="num"><br>';
            echo '<input type="submit" value="Aceptar">';
        } else {
            for ($i = 1; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $cuenta++;
                }
            }
            if($cuenta>=2){
                echo 'no es primo';
            }else{
                echo 'es primo';
            }
        }
        ?>
    </body>
</html>
