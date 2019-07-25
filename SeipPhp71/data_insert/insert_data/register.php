<?php

$id_value = $_POST['id'];
$name_value = $_POST['name'];
$email_value = $_POST['Email'];
$phone_value = $_POST['phone'];


$connection=mysqli_connect("localhost","root","","php_db");

if(!$connection){
    die("Error in database connection");
}

$result = mysqli_query($connection,"insert into register values('$id_value','$name_value','$email_value', '$phone_value')");
// query value er modde obossoi id er variable dite hobe

if(!$result){
    die("Error in query");
}
else{
    echo "Data inserted successfully";
}

header("Location: Form.html");



