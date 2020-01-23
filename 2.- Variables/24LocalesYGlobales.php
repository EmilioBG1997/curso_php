<html>
<head>
    <title>2 - 4: Variable Globales y Locales </title>
    <link rel="shortcut icon" href="../img/logo.ico" />
<body>
<?php
  $name = 'Emilio'; //Esto es una variable Global
  function getName() { //Asi se declara una función o metodo
    global $name; /*Para usar una variable global
                  en una función necesitaremos usar el prefijo "global" 
                  y luego la llamamos */ 
    $lastName = " Barrera"; /*Esto es una variable local de 
                            la funcion y solo puede ser utilizada por ella*/
    echo $name; //Ahora si podemos imprimirla
    echo $lastName;
  }
  getName();

?>
</body>
</html>
