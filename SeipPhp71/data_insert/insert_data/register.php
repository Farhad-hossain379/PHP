<?php
//
//$id_value = $_POST['id'];
$name_value = $_POST['name'];
$email_value = $_POST['Email'];
$phone_value = $_POST['phone'];

/*echo '<pre>';
print_r($name_value);
print_r($email_value);
print_r($phone_value);
die();*/

$connection=mysqli_connect("localhost","root","","php_db");


if(!$connection){
    die("Error in database connection");
}

$query="insert into register (`Name`,`Email`,`phone`) values('$name_value','$email_value', '$phone_value')";

/*echo '<pre>';
print_r($query);
die();*/

$result = mysqli_query($connection,$query);
// query value er modde obossoi id er variable dite hobe



if(!$result){
    die("Error in query");
}
else{

    echo "Data inserted successfully" ;

}
/*else
{

    echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="data_insert_form.php"';
    echo '</script>';
}*/






