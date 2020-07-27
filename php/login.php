<?php
session_start();
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
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$flag = false;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($row["email"]==$_POST["email"] && $row["password"]==$_POST["password"])
    	{
    		header("Location: ../admin/index.php");
    		$_SESSION["login"] = "true";
    		$_SESSION["username"] = $row["name"];
    		$flag= true;
    	}
       
}}if($flag==false)
{
    header("Location: ../login.html");
}

$conn->close();
?>