<html>
<head>
    <title>2 - 2: Constantes</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
        //Declaramos constantes de la forma "define("NOMCONST", "VALOR");"
        define('NOMBRE', 'Emilio'); //DE ESTA FORMA EL NOMBRE DE LA CONSTANTE ES CASE SENSITIVE
        define('EDAD', 21, true); //DE ESTA FORMA EL NOMBRE NO ES CASE SENSITIVE
        //Imprimimos variables de la forma "echo NOMCONST" 
        echo 'Nombre: ' . NOMBRE . '<br>'; //Usamos el punto de esta forma "'Texto:' . NOMCONST ;" para concatenar
        echo 'Edad: ' . edad . '<br>'; 
    ?>
</body>
</html>