<?php
 $servername = "localhost";
$username = "root";
$password = "";
$db = "ajax";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email=$_POST["email"];
$password=$_POST["password"];
$sql = "INSERT INTO user (email,password)
VALUES ('$email', '$password')";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
}
echo "Data Saved";


 ?>