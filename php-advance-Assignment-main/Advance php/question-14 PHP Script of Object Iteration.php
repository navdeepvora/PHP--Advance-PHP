Write PHP Script of Object Iteration?
<br>
=>
<?php

class Person {
    public $name;
    public $age;
    
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person1 = new Person("John", 25);
$person2 = new Person("Jane", 30);
$person3 = new Person("Bob", 40);

$people = [$person1, $person2, $person3];

foreach ($people as $person) {
    echo "Name: " . $person->name . ", Age: " . $person->age . "<br>";
}

?>
