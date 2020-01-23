<html>
<head>
    <title> 6 - 2: Parametros En Funciones</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
        <?php
          function sumadeNumeros($num1, $num2){ //Dentro del parentesis se especifican las variables
              echo "<p>". ($num1+$num2) ."</p>" ;                         //que recibira  la funcion
          }
          sumadeNumeros(1,2); //para llamarla se especifican los valores o las variables de la misma manera
        ?>

</body>
</html>