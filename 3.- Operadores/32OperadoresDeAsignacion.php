<html>
<head>
    <title>3 - 2: Operadores de Asignación</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
        $num1 = 4;
        $num2 = $num1; //num2 ahora vale lo que num1, lo que significa que vale 4
        echo "<p>Numero uno: $num1 <br>
                 Numero dos: $num2 </p> ";

        $num1+=$num2;  //num1 vale lo que vale  num1 agregado num2, es decir ahora vale 8
        echo "<p>Num1+=Num2: $num1 </p>";
        $num1-=$num2; //num1 vale lo que vale num1 menos lo que vale num2, es decir ahora vale 4
        echo "<p>Num1-=Num2: $num1 </p>";

        /*
        esto puede hacerse para todos 
        los operadores aritmeticos, *=, /=, %=
        */
        $num1*=$num2;
        echo "<p>Num1*=Num2: $num1 </p>";
        $num1/=$num2;
        echo "<p>Num1/=Num2: $num1 </p>";
        $num1%=$num2;
        echo "<p>Num1%=Num2: $num1 </p>";

    ?>
</body>
</html>