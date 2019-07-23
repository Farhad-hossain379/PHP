<?php

if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test_db";


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];


    $connect = mysqli_connect($hostname, $username, $password, $databaseName);


    $query = "INSERT INTO users(`fname`, `lname`, `age`) VALUES ('$fname','$lname','$age')";

    $result = mysqli_query($connect,$query);


    if($result)
    {
        echo 'Data Inserted';
    }
    else{
        echo 'Data Not Inserted';
    }

   // mysqli_free_result($result);
    mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

<head>

    <title> PHP INSERT DATA </title>

    <meta charset="UTF-8">

</head>

<body>
<form action="insert_database.php" method="post">

    <input type="text" name="fname" ><br><br>

    <input type="text" name="lname" ><br><br>

    <input type="number" name="age" ><br><br>

    <input type="submit" name="insert" value="Add Data To Database">

</form>

</body>

</html>