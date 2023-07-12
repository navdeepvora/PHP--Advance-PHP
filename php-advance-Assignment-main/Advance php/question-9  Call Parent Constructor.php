How to Call Parent Constructor?

=> To call a parent constructor in PHP, you can use the parent::__construct() method. This method calls the constructor of the parent class.

Here's an example:
<?php

class ParentClass {
  public function __construct() {
    // parent constructor logic
  }
}

class ChildClass extends ParentClass {
  public function __construct() {
    parent::__construct(); // calling parent constructor
    // child constructor logic
  }
}
?>

In the example above, the ChildClass extends ParentClass. In the constructor of the ChildClass, parent::__construct() is called to invoke the constructor of the parent class. This allows the parent class to perform its initialization logic before the child class does its own initialization.