<html>
<head>
    <title> 6 - 4: Sentencia Return</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
        <?php
            /*
            Una funcion puede regresar un valor utilizando la sentencia return. 
            esto tambien detiene la ejecución de la misma función
            */
            function regresaAlgo($Num){
                if($Num==1){
                    return "<p>Metiste un uno </p>";
                }
                elseif($Num==2){
                    return "<p>Metiste un dos </p>";
                }
                elseif($Num==3){
                    return "<p>Metiste un tres </p>";
                }
                else{
                    return "<p> No se que metiste x) </p>";
                }
            }
            echo regresaAlgo(4);

            function func($arg)  {
                $result = 0;
                for($i=0; $i<$arg; $i++) {
                  $result = $result + $i;
                }
                return $result;
              }
              echo func(5);

        ?>

</body>
</html>