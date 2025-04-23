<?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$dbname = "test";

$conn = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $originalName = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];

    // Make filename safe + unique
    $uniqueName = time() . "_" . basename($originalName);
    $folder = "uploads/" . $uniqueName;

    if (move_uploaded_file($tempname, $folder)) {
        $sql = "INSERT INTO documents (filename, filepath, username, uploaded_at) 
                VALUES ('$originalName', '$folder', '$username', NOW())";
        $conn->query($sql);
        echo "File uploaded successfully!";
    } else {
        echo "Failed to upload file.";
    }
}
?>
