<html>
<head>
    <title>Potencias positivas con recursividad</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
  <?php
        function potencia($x, $n){
            if($n==0){
                return 1; //numeros a la potencia 0 son 1
            }
            elseif($n==1){
                return $x; // regresa el numero original
            }
            else{
                return $x * potencia($x , ($n-1));
            }
        }

        $start = round(microtime(true)*1000);
        echo potencia(5,100000); 
        $end =  round(microtime(true)*1000);
        echo "<br> Tiempo: " .($end-$start) ." Milisegundos";

        $x=5;
        $n=100000;
        $resultado = 1;
        $start = round(microtime(true)*1000);
        for($i=1;$i<=$n;$i++){
            $resultado *= $x;
        }
        $end =  round(microtime(true)*1000);
        
        echo "<br>$resultado";
        echo "<br> Tiempo: " .($end-$start) ." Milisegundos";
  ?>
</body>
</html> 