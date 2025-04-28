<?php
class Person {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to display details
    public function introduce() {
        return "Hi, I'm " . $this->name . " and I'm " . $this->age . " years old.";
    }
}

// Instantiate the class
$person1 = new Person("Nawaraj", 21);

// Call the method
echo $person1->introduce();
?>
