<!DOCTYPE html>
<!--
Ejercicio 7
Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero = $_POST['numero'];
        $intentos = $_POST['intentos'];
        $numeroapertura = 1234;
       
            if ($numero == $numeroapertura) {
                echo" ¡Enhorabuena el numero es correcto!";
            } else {
                if ($intentos == 1) {
                    echo "ha gastado todos los intentos";
                } else {
                        $intentos--;
                        echo '<br>te quedan ',$intentos,' intentos<br>';
                        echo 'Introduce un número de cuatro cifras.';
                        echo '<form action="Ejercicio7a.php" method="post">';
                        echo '<input type="text" name="numero" maxlength="4">';
                        echo '<input type="hidden" name="intentos" value="', $intentos, '">';//escondido para ir contando los intentos 
                        echo '<input type="submit" value="Probar">';
                        echo '</form>';
                }
            }
        
        ?>
    </body>
</html>
