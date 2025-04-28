<?php
$message = "";

// Handle file upload when request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
        $targetDir = "uploads/";
        $file = $_FILES["image"];
        $targetFile = $targetDir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $check = getimagesize($file["tmp_name"]);
        if ($check === false) {
            $message = "File is not an image.";
        } elseif ($file["size"] > 2 * 1024 * 1024) {
            $message = "File too large. Max 2MB allowed.";
        } elseif (!in_array($imageFileType, ["jpg", "jpeg", "png"])) {
            $message = "Only JPG and PNG formats are allowed.";
        } else {
            if (!is_dir($targetDir)) {
                mkdir($targetDir);
            }
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                $message = "File uploaded successfully: " . htmlspecialchars($file["name"]);
            } else {
                $message = "Failed to move uploaded file.";
            }
        }
    } else {
        $message = "Upload error: " . $_FILES["image"]["error"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
    <script>
        function autoSubmit() {
            document.getElementById('uploadForm').submit();
        }
    </script>
</head>
<body>
    <h2>Upload Image</h2>

    <form id="uploadForm" action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept=".jpg,.jpeg,.png" onchange="autoSubmit()" required>
    </form>

    <p><?= $message ; echo "<br>Nawaraj Neupane"; ?></p>
</body>
</html>
