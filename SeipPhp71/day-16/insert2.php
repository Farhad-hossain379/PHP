<?php
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "php_db";

    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];



    $connection = mysqli_connect($hostname,$username,$password,$databaseName);
    "insert into register values ('$fname','$lname') ";


}