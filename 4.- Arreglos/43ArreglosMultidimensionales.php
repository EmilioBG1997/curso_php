<html>
<head>
    <title>4 - 3: Arreglos Multidimensionales</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
        $BidimensionalAsoc=array(
            "Primero" => array("Emilio","Barrera","González"),
            "Segundo" => array("Fernando","Garcia","Morales"),
            "Tercero" => array("Jesus","Rodriguez","Martinez")
        );//arreglo asociativo bidimencional
        echo "<p>". $BidimensionalAsoc["Primero"][0]. "<br>";
        echo  $BidimensionalAsoc["Segundo"][1]. "<br>";
        echo  $BidimensionalAsoc["Tercero"][2]. "</p>";

        $BidimensionalNum=array(
            array("Emilio","Barrera","González"),
            array("Fernando","Garcia","Morales"),
            array("Jesus","Rodriguez","Martinez")
        );//arreglo numerico bidimencional
        echo "<p>". $BidimensionalNum[0][0]. "<br>";
        echo  $BidimensionalNum[1][1]. "<br>";
        echo  $BidimensionalNum[2][2]. "</p>";
    ?>
</body>
</html> 