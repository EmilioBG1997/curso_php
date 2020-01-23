<html>
<head>
    <title>4 - 1: Arreglos Numerico</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
        $nombres1=array("Emilio","Wii","Xbox360"); //Forma de declarar un arreglo y llenarlo
        echo "<p>nombres1 en posicion 0: $nombres1[0]</p>"; //forma de acceder a una posicion de un arreglo
        
        /*Otra forma de llenar un arreglo
        es asignar un valor individualmente
        a cada uno de sus subindices*/
        $nombres2[0]="Emilio";
        $nombres2[1]="Wii";
        $nombres2[2]="Xbox360";
        echo "<p>nombres2 en posicion 2: $nombres2[2]</p>";
       
        /*Alternativamente podemos combinar ambos 
        metodos para seguir agregando valores
        a nuestros arreglos*/
        $nombres1[3]="Nintendo Switch";
        echo "<p>nombres1 en posicion 3: $nombres1[3]</p>";

        /*En un arreglo de php no importan los tipos de datos
        es decir podemos tener un int, un string o un float
        dentro del mismo y esto no nos genera conflictos*/
        $objetos=array("Emilio","es",1,"dios");//casi todos los elementos son String, menos 1
        echo "<p>objetos en posicion 3: $objetos[2]</p>";
    ?>
</body>
</html> 