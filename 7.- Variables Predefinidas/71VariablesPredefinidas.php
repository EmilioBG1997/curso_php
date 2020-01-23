<html>
<head>
    <title> 7 - 1: Variables Predefinidas</title>
    <link rel="shortcut icon" href="../img/logo.ico">

</head>
<body>
    <?php
        echo $_SERVER['SCRIPT_NAME']; //Regresa el nombre y ruta del archivo php en el servidor
        echo '<br>'. $_SERVER['HTTP_HOST'] ;//Regresa el nombre del servidor
        echo '<br> <img src="../img/$server.jpg">';

    ?>
</body>
</html>