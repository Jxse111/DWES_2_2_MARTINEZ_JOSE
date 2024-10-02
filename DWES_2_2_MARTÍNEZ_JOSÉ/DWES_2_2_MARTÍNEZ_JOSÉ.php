<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa</title>
    </head>
    <body>
        <h3>Si $var1 y $var2 son del mismo tipo, se debe mostrar un mensaje indicando que son iguales y de qué tipo son, si son de tipos distintos, se debe mostrar de qué tipo es cada variable.</h3>
        <p>En este caso vamos a ver que las variables son distintas:</p>
        <?php
        $valor1 = 10;
        $valor2 = "11";
        $resultado = 0;

        function igualdadODistincion($var1, $var2) {
            if ($var1 === $var2) {
                echo "Las variables son iguales";
            } else {
                printf("Ambas variables son distintas, \$var1 es de tipo : %s, mientras que \$var2 es de tipo : %s"
                        , gettype($var1), gettype($var2));
            }
        }

        /* Comprobamos si las variables pasadas por parametros  son iguales o distintos tanto el tipo como el valor.
          En este caso el valor es distinto y el tipo tmb lo es. */
        echo igualdadODistincion($valor1, $valor2);
        ?> 
        <br/>
        <p>En este caso vamos a ver que las variables son iguales:</p>
        <?php
        $valor1 = 1;
        $valor2 = 1;
        //En este caso el valor y el tipo de las variables es igual.
        echo igualdadODistincion($valor1, $valor2);
        ?>
        <h3>Si $var1 es mayor que $var2 o $var1 es múltiplo de $var2, se debe calcular y mostrar el resultado de multiplicar $var1 y $var2.</h3>
        <p>El ejemplo se muestra a continuación: </p>
        <?php
        $valor1 = 2;
        $valor2 = 4;

        function multiplos($var1, $var2) {
            if ($var2 > $var1 || $var1 % $var2 == 0) {
                $resultado = $var1 * $var2;
                echo "La multiplicación de ambos da como resultado: $var1 * $var2 = " . $resultado;
            }
        }

        echo multiplos($valor1, $valor2);
        ?>
        <h3>Si $var1 vale 0,10 o 20, se debe mostrar la cadena "$var1 acaba en cero". Utiliza para ello el condicional más optimizado.</h3>
        <?php

        function numerosAcabadosEn0($var1) {
            if ($var1 == 0 || $var1 == 10 || $var1 == 20) {
                echo "\$var1 acaba en 0";
            }
        }

        $valor1 = 20;
        echo numerosAcabadosEn0($valor1);
        ?>
        <h3>Si $var2 vale 1,11 o 21, se debe mostrar la cadena "$var2 acaba en uno". En cualquier otro caso se debe mostrar la cadena "$var2 no acaba en uno". Utiliza para ello el condicional más optimizado.</h3>
        <?php

        function numerosAcabadosEn1($var2) {
            if ($var2 == 1 || $var2 == 11 || $var2 == 21) {
                echo "\$var2 acaba en 1";
            }
        }

        $valor2 = 1.11;
        echo numerosAcabadosEn1($valor2);
        ?>
    </body>
</html>
