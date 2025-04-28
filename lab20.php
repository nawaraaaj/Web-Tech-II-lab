<?php
// Creating and using an anonymous class
$greeting = new class {
    public function sayMyName() {
        return "Nawaraj Neupane";
    }
};

// Call the method
echo $greeting->sayMyName();
?>
