
<?php
if (isset($_POST['btn'])){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_db";

   $Name = $_POST['Name'];



// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE register SET Name = $Name WHERE ID = 2";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>databinsert</title>

    </head>
    <body>

        <form action="update_form.php" method="post">
            <!--ID:  <input type="number" name="ID">-->
            <br/>
            name: <input type="text" name="Name">

            <!--<br/>
            Email: <input type="text" name="Email">
            <br/>
            Phone number: <input type="text" name="phone">
            <br/>-->

            <input type="submit" name="btn" value="Update">
        </form>

    </body>


</html>