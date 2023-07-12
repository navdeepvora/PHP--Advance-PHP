• Are Parent Constructor Called Implicitly When Create An ObjectOf Class?

=> In PHP, if a class defines a constructor method, it will be called implicitly when an object of that class is created using the new keyword. If the class does not define a constructor method, PHP will use a default constructor that does nothing.

If a subclass extends a parent class that has a constructor method, the subclass constructor will not call the parent constructor implicitly. However, you can explicitly call the parent constructor using the parent::__construct() method within the subclass constructor.


EX.
<?php
class ParentClass {
    public function __construct() {
      echo "Parent constructor called.\n";
    }
  }
  
  class ChildClass extends ParentClass {
    public function __construct() {
      echo "Child constructor called.\n";
      parent::__construct();
    }
  }
  
  $child = new ChildClass();
  
?>

Child constructor called.
Parent constructor called.

As you can see, the child constructor explicitly called the parent constructor using: 
parent::__construct().



