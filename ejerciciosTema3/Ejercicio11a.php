<!DOCTYPE html>
<!--
Ejercicio 11
Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que
faltan para llegar a la medianoche.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $hora = $_GET['hora'];
        $minuto = $_GET['minuto'];
        
        $segundosPasados = ($hora*3600)+($minutos*60);
        $segundosFaltan = (24*3600) - $segundosPasados;
        echo "Faltan $segundosFaltan para media noche.";
                
        ?>
    </body>
</html>
