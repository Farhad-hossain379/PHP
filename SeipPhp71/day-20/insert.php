<?php
   $con = mysqli_connect('127.0.0.1','root','');

    if(!$con){
        echo 'Not connected to the server';
    }

    if (!mysqli_select_db($con,'team')){
        echo 'Database not selected';
    }
    $id =  $_POST['id'];
    $Name = $_POST['username'];
    $Email = $_POST['email'];

    $sql = "insert into person(id, Name,Email) values ('$Name','$Email')";

