<!DOCTYPE html>
<!--
Ejercicio 1
Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dia = $_GET['dia'];
        switch ($dia){
        case '1' : echo "Lunes - Desarroyo Web Entorno Servidor "; break;
        case '2' : echo "Martes - Desarroyo Web Entorno Cliente "; break;
        case '3': echo "Miercoles - Desarroyo Web Entorno Servidor "; break;
        case '4' : echo "Jueves - Desarroyo Web Entorno Cliente "; break;
        case '5' : echo "Viernes - Diseño de Interfaces Web "; break;
        case '6' : echo "Sabado - libre"; break;
        case '7' : echo "Domingo - libre"; break;
        default: echo "Escriba un numero entre 1 y 7";
        }
        
        ?>
    </body>
</html>
