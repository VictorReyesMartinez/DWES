<!DOCTYPE html>
<!--
Ejercicio 10

Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $num = $_POST['num'];
            $total = $_POST['total'];
            $cuenta = $_POST['cuenta'];
            $media = 0;
            if(isset($num)){//si $n se ha inicializado
                if($num<0){
                    $media = $total/$cuenta;
                    echo "La media de los numeros introducidos es: $media"; 
                }else{
                     $total += $num;
                     $cuenta++;
              
                echo 'Introduzca otro numero (negativo para terminar)';
                echo '<form action="Ejercicio10.php" method="post">';
                echo '<input type="number" name="num"><br>';
                echo '<input type="hidden" name="total" value="',$total,'">';
                echo '<input type="hidden" name="cuenta" value="',$cuenta,'">';
                echo '<input type="submit" value="Introducir">';
                echo '</form>';
                
                }
                
            }else{// primera vez que inicia el formulario, con total y cuenta inicializado a 0.
                $total = 0;
                $cuenta = 0;
                
                echo 'Introduzca un numero';
                echo '<form action="Ejercicio10.php" method="post">';
                echo '<input type="number" name="num"><br>';
                echo '<input type="hidden" name="',$total,'">';
                echo '<input type="hidden" name="',$cuenta,'">';
                echo '<input type="submit" value="Introducir">';
                echo '</form>';

            }

        ?>
    </body>
</html>
<!--
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
        php
        $num = $_POST['num'];
        $cantnum = $_POST['cantnum'];
        $suma = $_POST['suma']; 
        if ($num < 0) {
            $media = $suma / $cantnum;
            echo "la media de los numeros introducidos es: <br> ";
            echo $media;
        } else {
            
          
            echo 'Introduzca el numero';
            echo '<form action="Ejercicio10a.php" method="post">';
            echo '<input type="number" name="num";><br>';
            echo '<input type="hidden" name="',$suma+=$num,'";>';
            echo '<input type="hidden" name="',$cantnum++,'";>';
            echo '<input type="submit" value="Introducir">';
            echo '</form>';
            echo $suma,'<br>';
            echo $cantnum;
          
        }
        ?>
    </body>
</html>
-->