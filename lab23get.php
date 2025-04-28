<!DOCTYPE html>
<html>
<head>
  <title>GET Form</title>
</head>
<body>

<h2>Form using GET method</h2>
<form method="get" action="">
  Name: <input type="text" name="name"><br>
  Age: <input type="text" name="age"><br>
  <input type="submit" value="Submit using GET">
</form>

<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']);
    $age = htmlspecialchars($_GET['age']);

    echo "<h3>Data received via GET:</h3>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
}
?>

</body>
</html>
