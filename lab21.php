<?php
class Sample {
    public $property1 = "Public Property";
    private $property2 = "Private Property";

    public function method1() {
        return "This is a public method.";
    }

    private function method2() {
        return "This is a private method.";
    }
}

$obj = new Sample();

// Get class name
echo "Class Name: " . get_class($obj) . "<br><br>";

// Get class methods
echo "Class Methods:<br>";
print_r(get_class_methods($obj));
echo "<br><br>";

// Get class properties
echo "Class Properties:<br>";
print_r(get_class_vars('Sample'));
echo "<br><br>";

// Get object properties
echo "Object Properties:<br>";
print_r(get_object_vars($obj));
echo "<br><br>";

// Get parent class (if any)
echo "Parent Class: " . (get_parent_class($obj) ?: "None") . "<br><br>";

// Get implemented interfaces
echo "Implemented Interfaces:<br>";
print_r(class_implements($obj));
echo "<br><br>";

// Get parent classes
echo "Parent Classes:<br>";
print_r(class_parents($obj));
echo"<br>Nawaraj Neupane";
?>
