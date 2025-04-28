<?php
// 2. Comments
// This is a single-line comment
# This is another single-line comment

/*
This is a 
multi-line comment
*/

// 3. Identifiers (Variable & Function Names)
$variable = "PHP";  // Valid variable
$_name = "Lexical Structure"; // Valid identifier

// Function declaration
function myFunction() {
    echo "<b>Nawaraj Neupane</b><br>";
}
myFunction();
// 4. Keywords
class Example {
    public function display() {
        echo "This is a PHP class method!<br>";
    }
}

// Create an object of the Example class
$obj = new Example();
$obj->display(); // Output: This is a PHP class method!

// 5. Literals (String, Numeric, Constant)
$str1 = "Hello";
$intNum = 100; // Integer
$floatNum = 3.14; // Float
define("SITE_NAME", "nawarajneupane.com");
echo "$str1<br>"; 
echo "Integer: $intNum, Float: $floatNum<br>"; 
echo "Website Name: " . SITE_NAME . "<br>"; 

// 6. Operators
$a = 100;
$b = 25;
echo "Sum: " . ($a + $b) . "<br>"; // Output: Sum: 15


// 8. Statements & Blocks
if ($a > $b) {
    echo "$a is greater than $b<br>";
}
?>
