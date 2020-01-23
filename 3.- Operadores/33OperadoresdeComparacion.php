<html>
<head>
    <title>3 - 3: Operadores de Comparacion</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
        $x=3;   $a=3;
        $y=3.0; $b=4;
        $z="3";
        echo "<p>x= $x int<br>
                 y= $y float<br> 
                 z= $z string<br>
                 a= $a int<br>
                 b= $b int</p>";


        echo "<p>x = = y: ". ($x==$y) . "<br>" ;  //regresa true (1) si las variables valen lo mismo
        echo "x = = z: "  . ($x==$z) . "<br>"; // y false ( ) si las variables tienen diferente valor
        echo "y = = z: "  . ($y==$z) . "</p>";

        echo "<p>x =  = = y: ". ($x===$y) . "<br>" ;  //regresa true (1) si las variables valen lo mismo
        echo "x = = = a: "  . ($x===$a) . "<br>"; // y false ( ) si las variables tienen diferente valor
        echo "y = = = z: "  . ($y===$z) . "</p>"; //con este, se revisan tambien los tipos de variable

        echo "<p>x ! = y: ". ($x!=$y) . "<br>" ;  //regresa true (1) si las variables valen diferente
        echo "x ! = z: "  . ($x!=$z) . "<br>"; // y false ( ) si las variables tienen el mismo valor
        echo "y ! = b: "  . ($y!=$b) . "</p>";

        echo "<p>x !  = = y: ". ($x!==$y) . "<br>" ;  //regresa true (1) si las variables valen diferente
        echo "x ! = = a: "  . ($x!==$a) . "<br>"; // y false ( ) si las variables tienen mismo valor
        echo "y ! = = a: "  . ($y!==$a) . "</p>"; //con este, se revisan tambien los tipos de variables

        /*
        Nota, el operador "$a< >$b " cumple la misma funcion que
        el operador "$a!=$b"
        */
        echo "<p>======================================================</p>";
        $x=3;   $a=3;
        $y=4.0; $b=4;
        $z="5";
        echo "<p>x= $x int<br>
                 y= $y float<br> 
                 z= $z string<br>
                 a= $a int<br>
                 b= $b int</p>";

         echo "<p>x < y: ". ($x<$y) . "<br>" ;  //regresa true si "x" es menor que "y"   
         echo "x > y: ". ($x>$y) . "<br>" ;  //regresa true si "x" es mayor que "y"  
         echo "x <= y: ". ($x<=$y) . "<br>" ;  //regresa true si "x" es menor o igual que "y" 
         echo "b >= y: ". ($b>=$y) . "<br>" ;  //regresa true si "b" es menor o igual que "y"             
    ?>

</body>
</html>