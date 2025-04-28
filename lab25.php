<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "crudoperation"; // replace with your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all records from a table (e.g., 'students')
$sql = "SELECT name, email, mobile FROM crud";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Student Records</h2>

<?php
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
            </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>". $row["name"] ."</td>
                <td>". $row["email"] ."</td>
                <td>". $row["mobile"] ."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}
echo "Nawaraj Neupane";
// Close the connection
$conn->close();
?>

</body>
</html>
