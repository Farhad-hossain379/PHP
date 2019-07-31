
<!DOCTYPE html>
<html>

    <head>
        <title>Slide Show</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--A <meta> viewport element gives the browser instructions on how to control the page's dimensions and scaling.

        The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).

        The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser. -->
        <link rel="stylesheet" href="slide-slyle.css">

    </head>

    <body>

    <div class="slide-show-container">

        <div class="mySlides fade">
            <div class="numberText">1 / 3</div>
            <img src="slide-photos\photo1.jpeg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numberText">2 / 3</div>
            <img src="slide-photos\photo2.jpeg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numberText">3 / 3</div>
            <img src="slide-photos\photo3.jpeg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script src="slide-show.js"></script>

    </body>
</html>

