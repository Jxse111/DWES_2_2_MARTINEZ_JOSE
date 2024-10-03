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
        <?php
        //Creación de variables
        $valor1 = 10;
        $valor2 = "11";
        if (gettype($valor1) == gettype($valor2)) {
            $resultado1 = "Las variables son iguales";
        } else {
            $resultado1 = ("Ambas variables son distintas, \$var1 es de tipo : " . gettype($valor1) . ", la variable \$var2 es de tipo: " . gettype($valor2));
        }
        ?> 
        <?php
        $valor1 = 2;
        $valor2 = 4;
        if ($valor2 > $valor1 || $valor1 % $valor2 == 0) {
            $multiplicacion = $valor1 * $valor2;
            $resultado2 = "La multiplicación de ambos da como resultado: $valor1 * $valor2 = " . $multiplicacion;
        }
        ?>
        <?php
        $valor1 = 10;
        switch ($valor1) {
            case 0 :
                $resultado3 = "\$valor1 acaba en 0";
                break;

            case 10 :
                $resultado3 = "\$valor1 acaba en 0";
                break;

            case 20 :
                $resultado3 = "\$valor1 acaba en 0";
                break;
            default: "\$valor1 no termina en 0";
        }
        ?>
        <?php
        $valor2 = 21;
        switch ($valor2) {
            case 1 :
                $resultado4 = "\$valor2 acaba en 1";
                break;

            case 11 :
                $resultado4 = "\$valor2 acaba en 1";
                break;

            case 21 :
                $resultado4 = "\$valor2 acaba en 1";
                break;
            default: "\$valor2 no termina en 1";
        }
        ?>
        <h1>Resultado de las comprobaciones: </h1>
        <ol>
            <li><?php echo $resultado1; ?></li>
            <li><?php echo $resultado2; ?></li>
            <li><?php echo $resultado3; ?></li>
            <li><?php echo $resultado4; ?></li> 
        </ol>
    </body>
</html>
