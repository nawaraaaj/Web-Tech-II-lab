<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// CREATE - Insert new student
if (isset($_POST['create'])) {
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $conn->query("INSERT INTO students (sname, email, department) VALUES ('$sname', '$email', '$department')");
}

// UPDATE - Update existing student
if (isset($_POST['update'])) {
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $conn->query("UPDATE students SET sname='$sname', email='$email', department='$department' WHERE sid=$sid");
}

// DELETE - Delete a student
if (isset($_GET['delete'])) {
    $sid = $_GET['delete'];
    $conn->query("DELETE FROM students WHERE sid=$sid");
}

// EDIT - Fetch student data to edit
$edit = false;
$sname = '';
$email = '';
$department = '';
$sid = 0;
if (isset($_GET['edit'])) {
    $edit = true;
    $sid = $_GET['edit'];
    $res = $conn->query("SELECT * FROM students WHERE sid=$sid");
    $row = $res->fetch_assoc();
    $sname = $row['sname'];
    $email = $row['email'];
    $department = $row['department'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
</head>
<body>
    <h2>Student Management</h2>
    <p>Nawaraj Neupane</p>

    <form method="post">
        <input type="hidden" name="sid" value="<?= $sid ?>">
        <input type="text" name="sname" placeholder="Name" value="<?= $sname ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?= $email ?>" required>
        <input type="text" name="department" placeholder="Department" value="<?= $department ?>" required>
        <?php if ($edit): ?>
            <button type="submit" name="update">Update</button>
        <?php else: ?>
            <button type="submit" name="create">Create</button>
        <?php endif; ?>
    </form>

    <h3>Student List</h3>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Department</th><th>Actions</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $row['sid'] ?></td>
                <td><?= $row['sname'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['department'] ?></td>
                <td>
                    <a href="?edit=<?= $row['sid'] ?>">Edit</a> |
                    <a href="?delete=<?= $row['sid'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
