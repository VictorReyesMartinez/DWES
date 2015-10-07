<!DOCTYPE html>
<!--
Ejercicio 10
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dia = $_GET['dia'];
        $mes = $_GET['mes'];
        switch ($mes){
            case 1: echo ($dia >= 1  && $dia <= 20)?  "Capricornio": "Acuario";      break;
            case 2: echo ($dia >= 1  && $dia <= 19)?"Acuario":"Piscis";              break;
            case 3: echo ($dia >= 1  && $dia <= 20)?"Piscis":"Aries";                break; 
            case 4: echo ($dia >= 1  && $dia <= 21)?"Aries":"Tauro";                 break;
            case 5: echo ($dia >= 1  && $dia <= 21)?"Tauro":"Géminis";               break;
            case 6: echo ($dia >= 1  && $dia <= 22)?"Géminis":"Cancer";              break;
            case 7: echo ($dia >= 1  && $dia <= 22)?"Cancer":"Leo";                  break;
            case 8: echo ($dia >= 1  && $dia <= 24)?"Leo":"Virgo";                   break;
            case 9: echo ($dia >= 1  && $dia <= 24)?"Virgo":"Libra";                 break;
            case 10: echo ($dia >= 1  && $dia <= 24)?"Libra":"Escorpio";             break;
            case 11: echo ($dia >= 1  && $dia <= 24)?"Escorpio":"Sagitario";         break;
            case 12: echo ($dia >= 1  && $dia <= 24)?"Sagitario":"Capricornio";      break;
          default : echo 'El mes o dia introducido no es correcto.';
                           
        }
        
        ?>
    </body>
</html>
