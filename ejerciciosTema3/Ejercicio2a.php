<!DOCTYPE html>
<!--
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado..
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $hora = $_GET['hora'];
        if ($hora >= 6 && $hora <= 12) {
            echo 'BUENOS DIAS!';
        } else {
            if ($hora >= 13 && $hora <= 20) {
                echo 'BUENAS TARDES';
            } else {
                if ((($hora >= 21) && ($hora < 24)) || (($hora <= 5) && ($hora >= 0))) {
                    echo 'BUENAS NOCHES ';
                } else
                    echo 'ESA HORA NO EXISTE';
            }
        }
        ?>
    </body>
</html>
