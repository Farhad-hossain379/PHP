<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Design</title>
        <link rel="stylesheet" href="styl.css">
    </head>
        <body>
            <div class="wrapper">
                <div class="header">
                    <div class="logo" >
                       <img src="logo.jpg" width="150px" height="100px">

                    </div>
                    <div class="login"> <button type="button" onclick=""> Login</button></div>
                </div>

                <!--<div id="navbar"></div>-->
                <div class="container-left-and-right">
                    <div class="container-left-menu">
                        <ul class="main-ul" >
                            <li ><a href="" >Home</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">About</a></li>
                        </ul>
                    </div>
                    <div class="right-section">
                        <div class="right-first" > <?php include 'slideshow\slideshow-index.php';?></div>

                        <div class="right-second"></div>
                    </div>
                    <div class="clear-both"></div>
                </div>

                <div class="footer"></div>
            </div>


        </body>
</html>