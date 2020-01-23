<html>
<head>
    <title>5 - 6: FOREACH </title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
        $arreglo = array(1,2,"Facultad de Sistemas",4,5);
        foreach($arreglo as $valor){                //Primera forma de declarar un foreach
            echo "<p> El elemento es $valor</p>";   //$valor recorre y toma de uno en
                                                    //uno cada elemento de arreglo, al terminar
                                                    //cada vuelta del ciclo, agarra
                                                    //siguiente indice
        }
     ?>
</body>
</html> 