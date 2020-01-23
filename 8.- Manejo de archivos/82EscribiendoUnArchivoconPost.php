<html>
<head>
</head>
<body>
     <?php
        if(isset($_POST['nombre'])){
            $nombre=$_POST['nombre'];
            $archivo=fopen("archivo2.txt","a+");
            fwrite($archivo, "Nombre: $nombre \n");
            fclose($archivo);
        }
     ?>
     <form method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" placeholder="Ingrese nombre" />
        <input type="submit" value="Enviar"/>
     </form>
</body>
</html>