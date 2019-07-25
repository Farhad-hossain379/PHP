<?php
include_once('data-fetch/connection.php');

$sql = "UPDATE register SET `Name`='".$_POST['Name']."',
`Email`='".$_POST['Email']."',
`phone`='".$_POST['phone']."' WHERE `ID`=".$_POST['id'];
if (mysqli_query($connection, $sql)){
    echo "Record Updated Successfully";
}else{
    echo "Error in Updating";
}
