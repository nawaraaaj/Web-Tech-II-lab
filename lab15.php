<?php
// Creating a Multidimensional Array
$students = array(
    array("Name" => "Nawaraj", "Age" => 21, "Grade" => "A"),
    array("Name" => "Swayam", "Age" => 22, "Grade" => "A+"),
    array("Name" => "Manish", "Age" => 20, "Grade" => "A")
);

// Traversing and Printing Multidimensional Array
echo "Student Details:<br>";
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo $key . ": " . $value . ", ";
    }
    echo "<br>";
}
?>
