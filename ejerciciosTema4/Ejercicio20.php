<!DOCTYPE html>
<!--
Ejercicio 19
Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
de las 5 que se deben dar a elegir mediante un formulario

Ejercicio 20
Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <img src="imagenes/Illuminati.png" alt="illuminati"/>
        <?php
        $hintro = $_GET['h'];
        $h = 1;


        if (!isset($hintro)) {
            echo '<form action="Ejercicio20.php" method="get">';
            echo 'Introduzca la altura de la piramide:<br> <input type="number" name="hintro">';
            echo '<input type="submit" value="Aceptar"><br>';
           
        } else {
            if ($h <= 0) {
                echo 'El valor introducido es negativo, por favor introducir un valor positivo';
                echo '<form action="Ejercicio20.php" method="get">';
                echo '<input type="number" name="h">';
                echo '<input type="submit" value="Aceptar">';
            } else {
               for($i =0; $i<$hintro-1; $hintro++){
                   echo '<img src="espacio.png" width="40" height="40">';
               }
               
            }
        }
        ?>
    </body>
</html>
