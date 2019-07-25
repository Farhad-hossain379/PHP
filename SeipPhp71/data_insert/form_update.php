<?php
include_once('data-fetch/connection.php');

$sql = "SELECT * FROM register WHERE `ID`=".$_GET['id'];
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
if (!$row){
    die('can not update');
}

/*Testing data*/
/*echo '<pre>';
print_r($row);
die();*/
/*End Testing data*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>databinsert</title>
</head>
<body>
<form action="update.php" method="post">
    <!-- ID:        <input type="number" name="id">-->
    <br/>
          <input type="hidden" name="id" value="<?=$row['ID']?>">
    name: <input type="text" name="name" value="<?=$row['Name']?>">
    <br/>
    Email: <input type="text" name="Email" value="<?=$row['Email']?>">
    <br/>
    Phone number: <input type="text" name="phone" value="<?=$row['phone']?>">
    <br/>

    <input type="submit" value="register">
</form>

</body>
</html>