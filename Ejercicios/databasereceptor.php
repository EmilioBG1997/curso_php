<?php
        $Nombre=$_POST["Nombre"]; //Agarras el valor desde el enviador
        $Apellido=$_POST["Apellido"]; //Agarras el valor desde el enviador
        $Fecha=date("Y-m-d"); //Agarras el valor desde el sistema
        $user = "root"; //El nombre de tu usuario de la base de datos
        $password =""; //Contraseña de tu base de datos
        $server = "localhost";
        $con= mysqli_connect($server, $user, $password, "ciudad"); //Se hace la conexion
        if($con){
            echo "<p> CONEXION CREADA CON EXITO</p>"; //Mostrado en caso de que se haya hecho la conexion
        }
        else{
            echo "BLA"; //EN caso de que no se haya hecho la conexion
        }
        $sql="INSERT INTO `persona` (`nombre`, `apellido`, `fechanac`) VALUES ('$Nombre', '$Apellido', '$Fecha');";
        //^se almacena el query en una variable, para mas placer
        if(mysqli_query($con,$sql)){ //Ejecuta el query pero aparte va a verificar que se haya hecho
            echo "<p>SI NACIó</p>"; // Muestra en caso de que si haya funcionado
        }
        else{
            echo "<p>NO NACIó</p>"; //En caso de que no haya funcionado la query
        }
        
?>
        
