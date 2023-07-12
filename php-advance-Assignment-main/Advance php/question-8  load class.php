.>load class
=> PHP load classes are used for declaring its object etc. in object oriented applications. PHP parser loads it automatically, if it is registered with spl_autoload_register() function. PHP parser gets the least chance to load class/interface before emitting an error.

Syntax:
<?php
spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});
?>
The class will be loaded from its corresponding “.php” file when it comes into use for the first time.
