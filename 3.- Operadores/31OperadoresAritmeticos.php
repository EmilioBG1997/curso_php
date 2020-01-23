<html>
<head>
    <title>3 - 1: Operadores Aritmeticos </title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>

    <?php
        $int1=25;
        $int2=5;
        $suma= $int1+$int2; //Para sumar dos variables solo usamos el singo "+"
        $resta= $int1-$int2; //Para restar dos variables solo usamos el singo "-"
        $multiplicacion = $int1*$int2; //Para multiplicar dos variables solo usamos el singo "*"
        $division = $int1/$int2; //Para dividir dos variables solo usamos el singo "/"
        $modulo = $int1%$int2; //Para obtener el residuo de una division usamos el signo "%"

        echo "<p>Numero uno: "  . $int1 . "</p>";
        echo "<p>Numero dos: "  . $int2 . "</p><br>";
        echo "<p>Suma: "  . $suma . "</p>";
        echo "<p>Resta: "  . $resta . "</p>";
        echo "<p>Multiplicacion: "  . $multiplicacion . "</p>";
        echo "<p>Division: "  . $division . "</p><br>";
        echo "<p> ----------------------------------------------<br>
              Incremento y decremento de variables </p>";
        $int3=1;
        echo "<p>Valor inicial: " . $int3 . "</p>";
        $int3++; //de esta forma agregamos 1 a nuestro valor
        echo "<p>Valor despues del incremento: " . $int3 . "</p>";   
        $int3--; //de esta forma quitamos 1 a nuestro valor
        echo "<p>Valor despues del decremento: " . $int3 . "</p>";
        /*
        Alternativamente, podemos agregar los signos "++" o "--" antes de nuestra variable para de esta manera obtener
        los valores antes del incremento o decremento respectivamente
        Ejemplo:
        */
        $a  = 2; $b = $a++; // $a=3,  $b=2
        $a  = 2; $b = ++$a; // $a=3,  $b=3
    ?>
</body>
</html>