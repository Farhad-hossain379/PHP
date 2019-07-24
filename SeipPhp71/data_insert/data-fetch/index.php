<?php
include_once ('connection.php');
$sql="SELECT * FROM register";
$result=mysqli_query($connection,$sql);
?>

<!
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fetch data from database</title>
    </head>
    <body>

        <table border="1"; width="400px"; align="center"; line>
            <tr>
                <th colspan="4"> <h3> Engineers Record</h3></th>


            </tr>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Email </th>
                <th> Phone</th>
            </tr>
        <?php
            while ($rows = mysqli_fetch_all($result))
            {

        ?>
            <tr>
                <td> <?php echo $rows['ID'] ?></td>
                <td> <?php echo $rows['Name']?></td>
                <td> <?php echo $rows['Email'] ?></td>
                <td> <?php echo $rows['phone']?></td>

            </tr>

        <?php
            }
        ?>

        </table>
    </body>
</html>