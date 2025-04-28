<!DOCTYPE html>
<html>
<head>
  <title>POST Form</title>
</head>
<body>

<h2>Form using POST method</h2>
<form method="post" action="">
  Name: <input type="text" name="name"><br>
  Age: <input type="text" name="age"><br>
  <input type="submit" value="Submit using POST">
</form>

<?php
if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    echo "<h3>Data received via POST:</h3>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
}
?>

</body>
</html>
