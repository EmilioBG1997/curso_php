<html>
<head>
    <title>2 - 3: Tipos de datos</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
     echo "<p> ------------------ STRINGS  ------------------ </p> ";
     $String1= "Hola"; //Strings, pueden ir entre comillas dobles
     $String2= 'Hola';// o Simples
     echo "<p>String1: " . $String1 . "</p>";
     echo "<p>String2: " . $String2 . "</p>";

     echo "<p> ------------------   INTS    ------------------ </p> ";
     $int1= 4; //Ints o enteros pueden ser positivos
     $int2= -4; // O Negativos
     echo "<p>int1: " . $int1 . "</p>";
     echo "<p>int2: " . $int2 . "</p>";

     echo "<p> ------------------   FLOAT   ------------------ </p> ";
     $float1= 4.3; //Floats son los numeros que tienen decimales
     echo "<p>float1: " . $float1 . "</p>";

     echo "<p> ------------------  BOOLEAN   ------------------ </p> ";
     $boolean1= true; //Un booleano puede tener dos valores: verdadero
     $boolean2= false; //o falso
     echo "<p>boolean1: " . $boolean1 . "</p>"; //Imprime 1
     echo "<p>boolean2: " . $boolean2 . "</p>"; // No imprime nada


    //Alternativamente se pueden sumar dos variables de distinto tipo, ejemplo:
    echo "<p> ------------------   SUMA    ------------------ </p> ";
    $int3=20;
    $String3="10";
    $suma= $int3 + $String3;
    echo "<p>int3:" . $int3 . "</p>";
    echo "<p>String3:" . $String3 . "</p>";
    echo "<p>suma int3 y string3: " . $suma . "</p>"; //Teoricamente el resultado de este valor debería ser 30
    ?>
</body>
</html>