<html>
<head>
    <title>5 - 2: ELSEIF </title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
        $emilio=100;
        $brenda=200;
        $ale=50;
        if($emilio>$brenda){
            echo "<p>Emilio tiene más dinero que brenda</p>";
        }
        elseif($ale>$brenda){
            echo "<p>ALe tiene más dinero que brenda</p>";
        }
        else{
            echo "<p>Brenda es la que tiene mas dinero</p>";
        }
     ?>
</body>
</html> 