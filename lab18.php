<?php
// Define a simple PHP class
class Calculator {
    // Property
    public $result;

    // Constructor to initialize the property
    public function __construct() {
        $this->result = 0;
    }

    // Method to add numbers
    public function add($a, $b) {
        $this->result = $a + $b;
        return $this->result;
    }

    // Method to subtract numbers
    public function subtract($a, $b) {
        $this->result = $a - $b;
        return $this->result;
    }
}

// Instantiate the class
$calc = new Calculator();

// Call methods and display results
echo "Addition Result: " . $calc->add(100, 50) . "<br>";
echo "Subtraction Result: " . $calc->subtract(100, 50). "<br>";
echo "Nawaraj Neupane";
?>
