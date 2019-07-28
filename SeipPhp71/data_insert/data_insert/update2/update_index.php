<?php
if (isset($_POST['btn'])){
    include_once ('update_form.html');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_db";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE register SET Name = '".$name."',Email = '".$email."',phone = '".$phone."' WHERE register.ID = $id ";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

