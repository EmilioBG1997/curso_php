<html>
<head>
    <title>5 - 7: switch</title>
    <link rel="shortcut icon" href="../img/logo.ico" />
</head>
<body>
    <?php
       //Switch es una alternativa elegante a Anidar ifs
       $a=1;
       switch($a){
            case 1: 
                echo "<p>\"a\"  vale: 1";
                break;
            case 2: 
                echo "<p> \"a\"  vale: 2";
                break; 
            case 3: 
                echo "<p> \"a\" vale: 3";
                break;   
            default:
                echo "No se cuanto valga \"a\" ";
                break;  
       }
     ?>
</body>
</html> 