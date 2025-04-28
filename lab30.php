<!-- Write a PHP code snippet that implements HTTP Basic Authentication to restrict access to a web page. --> 
<?php
echo "Nawaraj Neupane<br>";
// Define your username and password
$validUsername = 'nawaraj';
$validPassword = 'phpoutput';

// Check if the username and password have been sent via HTTP Basic Authentication
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || 
    $_SERVER['PHP_AUTH_USER'] != $validUsername || 
    $_SERVER['PHP_AUTH_PW'] != $validPassword) {
    
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    echo 'You must provide a valid username and password to access this page.';
    exit;
}

echo 'Welcome to my website, ' . $_SERVER['PHP_AUTH_USER'] . '!';
?>