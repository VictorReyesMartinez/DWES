<!DOCTYPE html>
<!--
Ejercicio 1
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for($i=0;$i>=(100/5);$i++){
            
            if(5 % $i = 0){
            echo "5 * $i = "+5*$i+" <br>";
            }
        }
        ?>
    </body>
</html>
