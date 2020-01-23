<html>
<head>
</head>
<body>
     <?php
        /*
         r: abre el archivo como solo lectura
         w: abre el archivo para solo escritura. borra el contenido actual o crea un archivo en caso de que no exista
         a: abre el archivo solo para escritura
         x: crea un nuevo archivo solo para escritura
         r+: abre archivo para lectura y escritura. 
         w+: abre el archivo para lectura y escritura. borra el contenido actual o crea un archivo en caso de que no exista
         a+: abre el archivo para lectura y escritura. crea un nuevo archivo si este no existe
         x+: crea nuevo archivo para lectura o escritura
        */

        $myfile= fopen("archivo1.txt","w"); //Creamos el archivo "archivo1.txt"
        $texto = "Hola, me llamo emilio\n";
        fwrite($myfile,$texto); //Escribimos el texto en el archivo
        fclose($myfile);//cerramos el archivo

        $myfile=fopen("archivo1.txt","a"); //para agregar contenido sin borrar nada
        $texto = "Este es una segunda linea en el texto creada con \"a\"";
        fwrite($myfile,$texto);
        fclose($myfile);
     ?>
</body>
</html>