<html>
<head>
    <title>3 - 4: Operadores Logicos</title>
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

    echo "<p> x= =y && y= =z: " . (($x==$y) && ($y==$z)) . "<br>"; //&& regresa true unicamente si se cumplen ambas
                                                                //condiciones
    echo "x= =y AND y= =z: " . (($x==$y) AND ($y==$z)) . "<br><br>"; //AND regresa true unicamente si se cumplen ambas
                                                                //condiciones
    echo "x= =y || y= =z: " . (($x==$y) || ($y==$z)) . "<br>"; // ||regresa true si se cumple una de las
                                                            //condiciones o ambas
    echo "x= =y OR y= =b: " . (($x==$y) OR ($y==$b)) . "<br><br>"; //OR regresa true si se cumplen una de las
                                                            //condiciones o ambas                                                                                                                        
    echo "(!((x= =y OR y= =b))): " . (!(($x==$y) OR ($y==$b))) . "<br><br>"; // ! Niega el resultado
                                                                        //es decir, si era true, ahora es false
    echo "x= =y XOR y= =b: " . (($x==$y) XOR ($y==$b)) . "<br><br>";    //XOR regresa true si se cumplen una sola de
                                                                        //las condiciones, no ambas 
    

    ?>
</body>
</html> 