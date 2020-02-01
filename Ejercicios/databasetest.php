<html>
<head>
</head>
<body>
    <!--USAMOS DOS ARCHIVOS, este y su receptor-->
    <h1>NACE UNA PERSONA</h1> <!--TItulo-->
    <form action="databasereceptor.php" Method="POST"> <!--Declaras el form y lo que hace-->
        <label for="Nombre">Nombre</label> 
        <input type="text" name="Nombre"> <br>
        <label for="Apellido">Apellido</label> 
        <input type="text" name="Apellido"> <br>
        <input type="submit" value="YA NACIÓ"> <!--Boton para que se manden los datos-->
    </form>
</body>
</html>