<?php
// Set the cookie only if it's not already set
if (!isset($_COOKIE['username'])) {
    setcookie("username", "Nawaraj", time() + 3600, "/"); // valid for 1 hour
    $message = "Cookie 'username' has been set. Please refresh the page to see the value.";
} else {
    $username = $_COOKIE['username'];
    $message = "Welcome back, $username!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h2>PHP Cookie Demo</h2>
    <p><?= $message ?></p>
    <span>Nawaraj Neupane</span>
</body>
</html>
