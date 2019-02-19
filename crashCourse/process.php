<?php

$cann = mysqli_connect('localhost','root','','ajax');

if(isset($_GET['name'])){
    echo 'Your name is '.$_GET['name'];
}
if(isset($_POST['name'])){
    $name= mysqli_real_escape_string($cann,$_POST['name']);
    echo 'Your name is '.$_POST['name'];
    
    $query = "INSERT INTO user(email,password) VALUES('$name','$name')";
    if(mysqli_query($cann,$query)){
        echo 'user added';
        
    }else{
        echo 'ERROR';
    }
}
?>