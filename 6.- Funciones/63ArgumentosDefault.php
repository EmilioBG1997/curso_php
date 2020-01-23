<html>
<head>
    <title> 6 - 3: Argumentos default</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
        <?php
            function setContador($contador = 10){ //asi se pone una variable default
                echo "<p> $contador </p>"; 
            }
            setContador(); //Imprimira un 10
            $mevale=11;
            setContador($mevale); //Imprimira 11
        ?>
</body>
</html>