<?php
$connection = mysqli_connect("localhost","root","","php_db");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



// Associative array
//$row=mysqli_fetch_all($result);


/*echo '<pre>';
print_r($row);
die();

printf ("%s (%s)\n",$row["Name"],$row["Email"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);*/

