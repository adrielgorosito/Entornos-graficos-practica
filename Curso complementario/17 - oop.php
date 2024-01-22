<?php 
/* --- Object Oriented Programming -- */
// Desde PHP5 se puede programar de forma procedural o de forma orientada a objetos.

class User {
  private $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function setName($name) {
    $this->name = $name;
  }

  function getName() {
    return $this->name;
  }

  function login() {
    return "User $this->name is logged in.";
  }

  // El destructor se llama cuando un objeto es destruido o al final del script
  function __destruct() {
    echo "The user name is {$this->name}.";
  }
}

// Instanciar un nuevo usuario
$user1 = new User('John', 'john@gmail.com', '123456');
echo "Nombre: " . $user1->getName() . "<br>";

// Llamado a una función de la clase
echo $user1->login() . "<br>";

// Cambiar el valor de una propiedad de la instancia
$user1->setName("Bob");

var_dump($user1);

/* ----------- Herencia ---------- */

class Employee extends User {
  private $title;

  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new employee('John','johndoe@gmail.com','123456','Manager');
echo "<br><br>Título del empleado: " . $employee1->getTitle();

echo "<br><br>";

// Aquí se imprimirá el destruct dos veces: una por $user1 y otra por $employee1