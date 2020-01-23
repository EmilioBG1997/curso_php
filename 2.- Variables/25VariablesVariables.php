<html>
<head>
    <title>2 - 5: Variables Variables </title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
  <p> Una variable variable es aquella cuyo nombre puede variar <br>
     y utiliza el valor de otra variable como su nombre.
  </p>
  <?php
    $variable1= "valor"; //Declaramos una variable y le asignamos un valor
    $$variable1= "confianza"; //nuestra segunda variable toma como nombre el valor asignado a la variable anterior
    echo $valor; //Al imprimirla obtendremos el resultado "Confianza"
  ?>
</body>
</html>
