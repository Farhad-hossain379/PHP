<?php
include_once('connection.php');
$sql = "SELECT * FROM register";
$result = mysqli_query($connection, $sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

/*Testing data*/
/*echo '<pre>';
print_r($rows);
die();*/
/*End Testing data*/
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fetch data from database</title>
        <link rel="stylesheet" href="style_for_dropdownbutton.css">

    </head>
    <body>
        <!--<div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>-->

        <table border="1" ; align="center" ; line>
            <tr>
                <th colspan="5"><h3> Engineers Record(Skylark Soft Limited )</h3></th>
            </tr>
            <tr>
                <th> ID</th>
                <th> Name</th>
                <th> Email</th>
                <th> Phone</th>
                <th width="40px" > Action</th>
            </tr>
                <?php foreach ($rows as $row)
                { ?>
                    <tr>
                        <td> <?=$row['ID']?></td>
                        <td> <?=$row['Name']?></td>
                        <td> <?=$row['Email']?></td>
                        <td> <?=$row['phone']?></td>
                        <td> <div class="dropdown">
                                <button onclick="myFunction('myDropdown<?=$row['ID']?>')" class="dropbtn">Dropdown</button>
                                <div id="myDropdown<?=$row['ID']?>" class="dropdown-content">
                                    <a href="...\insert_data\data_insert_form.php">Home</a>
                                    <a href="#about">About</a>
                                    <a href="#contact">Contact</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                <?php } ?>

        </table>



        <script>
            /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
            function myFunction(id_name) {
                document.getElementById(id_name).classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>






    </body>
</html>