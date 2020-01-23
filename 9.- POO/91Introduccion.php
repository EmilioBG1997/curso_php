<html>
<head>
<title> 9 - 1: Introduccion POO</title>
<link rel="shortcut icon" href="../img/logo.ico">
</head>
<body>
<?php
class Person {
  public $edad; //Propiedad_atributo
  public $nombre;

  public function __construct($nombre, $edad){ //Constructor
    $this->edad=$edad;
    $this->nombre=$nombre;
  }
  public function speak(){  //Metodo_Funcion
    echo "Hola!";
  }
  public function getAge(){ //Metodo_Funcion
    echo $this->edad;
  }  
  public function toString(){
    return "<br>Nombre: $this->nombre <br>"
            . "edad: $this->edad";
  }
  public function __destruct(){       //Destruye un objeto, se ejecuta automaticamente al finalizar
    echo "<br>Objeto destruido<br>";  //un script
  }
}
  $p1= new Person("something",0); //Instanciacion : Crear un objeto de la clase
  $p1->edad = 22; //Forma de acceder a un atributo de un objeto
  echo "La persona dice: ";
  $p1->speak(); //Forma de utilizar un metodo
  echo "<br>La edad de la persona es: ";
  $p1->getAge();
  unset($p1); //destruye un objeto sin necesidad de finalizar el script
  //$p2 = new Person("Emilio",22);
  //echo $p2->toString();




  
?>
</body>
</html>