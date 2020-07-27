<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "megadeals";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

$stmt = $conn->prepare("INSERT INTO user (name, password, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $_POST["name"], $_POST["passowrd"], $_POST["email"]);

$stmt->execute();
$stmt->close();

$conn->close();
header("Location: ../login.html");
?>