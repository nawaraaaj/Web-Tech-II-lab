<?php
// Indexed Array
$fruits = array("Apple", "Banana", "Cherry");

// Traversing Indexed Array
echo "Indexed Array Elements:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

echo "<br>";

// Associative Array
$person = array(
    "name" => "Nawaraj",
    "age" => 21,
    "city" => "Kathmandu"
);

// Traversing Associative Array
echo "Associative Array Elements:<br>";
foreach ($person as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
