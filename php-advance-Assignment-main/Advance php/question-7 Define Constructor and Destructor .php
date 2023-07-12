Constructor:-
A constructor allows you to initialize an object's properties upon creation of the object.
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
<br><br>

EX. <br>

<?php
class Fruit {
  public $name;
  public $color;
  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>
<br><br><br><br>
Destructor:-
A destructor is called when the object is destructed or the script is stopped or exited.
If you create a __destruct() function, PHP will automatically call this function at the end of the script.
<br><br>
EX.     

<?php
  class Fruites {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");
?>
