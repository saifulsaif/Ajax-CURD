<?php

$cann = mysqli_connect('localhost','root','','ajax');
$query = 'SELECT * FROM user';
$result = mysqli_query($cann,$query);
while ($row = $result->fetch_assoc()) {
   echo json_encode($row);
}


