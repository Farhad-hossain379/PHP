<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Test</title>
        <!--<link rel="stylesheet" href="test-style.css">-->


    </head>
    <body>
     <!--   <div class="slide-show-container">

         <div class="mySlides  "></div>
            <div class="numberTex">1 / 3</div>
           <img src="photos/photo2.jpeg" width="100%" height="100%">
            <div class="text"></div>
        </div>
-->


        <img name="slide" width="400px" height="300px">

        <script>
            var i =0;
            var images=[];

            var time =2000;

            images[0]='photos/photo1.jpeg';
            images[1]='photos/photo2.jpeg';
            images[2]='photos/photo3.jpeg';

            function changeImg() {
                document.slide.src=images[i];
                console.log(i);
                if(i<images.length-1){
                    i++;
                } else {
                    i=0;
                }
               /* console.log(changeImg);*/
                setTimeout("changeImg()");
            }
            window.onload=changeImg;
        </script>


    </body>
</html>