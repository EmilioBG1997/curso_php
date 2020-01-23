<html>
<head>
    <title> 5 - 8: Breaks y continues</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
        <?php
            for($i=0;$i<=10;$i++){
                if($i==5){
                    echo "<br> aqui me salto x)";
                    continue; //Esto hara que el ciclo no ejecute la instruccion cuando i valga 5
                }
                echo "<br>$i";
            }
            echo "<p>=====================</p>";
            for($i=0;$i<=10;$i++){
                if($i==5){
                    echo "<br> aqui me corto x)";
                    break; //Esto hara que el ciclo se corte cuando i valga 5
                }
                echo "<br>$i";
            }
        ?>

</body>
</html>