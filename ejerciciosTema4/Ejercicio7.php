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
        <title>Caja fuerte</title>
    </head>
    <body>
        Introduzca los numeros para abrir la caja fuerte.
         <form action="Ejercicio7a.php" method="post">
            <input type="hidden" name="numero" value="0000" >
            <input type="hidden" name="intentos" value ="5" >
            <input type="submit" value="Empezar">
        </form>
        
    </body>
</html>
