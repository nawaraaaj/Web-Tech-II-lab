<?php
// Sample string
$text = "My email address is nawarajneupane@gmail.com.";
echo $text . "<br>";

// Pattern to search for an email address
$pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}/";

// Use preg_match to find a match
if (preg_match($pattern, $text, $match)) {
    echo "Email found: " . $match[0] . "<br>";
} else {
    echo "No email found.";
}
?>
