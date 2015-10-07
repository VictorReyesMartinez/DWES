<!DOCTYPE html>
<!--
Ejercicio 23

Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la
suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $num = $_GET['num'];
        $suma = $_GET['suma'];
        $cuenta = $_GET['cuenta'];
              
        $suma+=$num;
        
        if(!isset($num)){
            echo 'Introduce un numero.';
            echo '<form action="Ejercicio23.php" method="get">';
            echo '<input type="number" name="num"><br>';
            echo '<input type="hidden" name="suma" value="0">';
            echo '<input type="hidden" name="cuenta" value="0">';
            echo '<input type="submit" value="Aceptar">';   
          
        } else {
            if($suma>=1000){
                echo "la suma de la suma de los numeros introducidos supera los 1000, nos da <b>$suma</b> <br>";
                echo "Has introducido <b>$cuenta</b> numeros<br>";
                echo "la media proporcional de todos los numeros es ";
                $media = $suma / $cuenta;
                echo "<b>$media</b>";
            }else{
            $cuenta++;
            echo 'Introduzca otro numero';
            echo '<form action="Ejercicio23.php" method="get">';
            echo '<input type="number" name="num"><br>';
            echo '<input type="hidden" name="suma" value="'.$suma.'">';
            echo '<input type="hidden" name="cuenta" value="'.$cuenta.'">';
            echo '<input type="submit" value="Aceptar">';
            
            $suma+=$num;
            }
        }
        ?>
    </body>
</html>
