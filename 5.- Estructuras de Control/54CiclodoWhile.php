<html>
<head>
    <title>5 - 4: Do While </title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
        $a=1;
        do{
            echo "<p>Bro php es lo mismo que java x$a</p>";
            $a++;
        }while($a<=15);
        echo "<p>=======================================</p>";
        $a=16;
        do{//sin importar que la condicion no se cumpla, el codigo aqui se ejecutara almenos una vez
            echo "<p>Bro php es lo mismo que java x$a</p>";
            $a++;
        }while($a<=15);
     ?>
</body>
</html> 