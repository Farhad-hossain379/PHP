
    <img name="slide" width="100%" height="100%">
    <script>
        var i =0;
        var images=[];

        var time =2000;

        images[0]='photos/photo4.jpeg';
        images[1]='photos/photo5.jpeg';
        images[2]='photos/photo10.jpeg';

        function changeImg() {
            document.slide.src=images[i];
            console.log(i);
            if(i<images.length-1){
                i++;
            } else {
                i=0;
            }
            /* console.log(changeImg);*/
            setTimeout("changeImg()",time);
        }
        window.onload=changeImg;
    </script>
