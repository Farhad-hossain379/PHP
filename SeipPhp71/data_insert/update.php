<?php

$fname = $_POST['firstnae'];
$lname = $_POST['lastname'];


$connection=mysqli_connect("localhost","root","","php_db");

if(!$connection){
    die("Error in database connection");
}

$result = mysqli_query($connection,"update register values('$fname','$lname')");


if(!$result){
    die("Error in query");
}
else{
    echo "Data inserted successfully";
}

//header("Location: Form.html");



