<html>
<head>
</head>
<body>
    <?php
        $leer=file("archivo2.txt"); //abre un archivo y lo almacena en un arreglo, cada linea es un elemento
        foreach($leer as $linea){
            echo "$linea<br>"; //imprimimos los elementos del array
        }
        echo "numero de lineas: ".count($leer); //Cuenta el numero de elementos en el arreglo
    ?>
</body>
</html>