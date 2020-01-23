<html>
<head>
    <title> 5 - 9: Include</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
        <?php
            include '59header.php'; //Con este Include podemos meter cosas de otros phps a este
            /*
            Alternativamente podemos cambiar el include por un require
            la diferencia es que con un include, si el archivo no esta, 
            el script sigue ejecutandose solo mostrando un error
            pero al cambiarlo por un require, esto nos daría un error
            fatal que detiene la ejecucion completa
            */
 
        ?>
         <p> Prueba 2<br>

</body>
</html>