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
 $result = mysqli_query($conn,"SELECT * From user");

 $data=array();
 while ($row = mysqli_fetch_assoc($result)) {
 	$data[]=$row;
 	# code...
 }
 echo json_encode($data);
 ?>