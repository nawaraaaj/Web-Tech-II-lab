<?php
// Associative Array
$user = array(
    "name" => "Nawaraj Neupane",
    "age" => 21,
    "country" => "Nepal"
);

// Convert array to individual variables
extract($user);

// Now you can use $name, $age, $country as separate variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Country: " . $country . "<br>";
?>