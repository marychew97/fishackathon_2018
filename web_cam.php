<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="stuff, to, help, search, engines, not" name="keywords">
<meta content="What this page is about." name="description">
<meta content="Display Webcam Stream" name="title">
<title>Display Webcam Stream</title>
  
<style>
.booth{
    width:400px;
    background-color:#ccc;
    border:10px solid #ddd;
    margin:0 auto;
}

.booth-capture-button,.match-button{
    display:block;
    margin:10px 0;
    padding:10px 20px;
    background-color:cornflowerblue;
    color:#fff;
    text-align:center;
    text-decoration:none;
}
</style>
</head>
  
<body>
    <div class="booth">
        <video id="video" width="400" height="300"></video>
        <a href="#" id="capture" class="booth-capture-button">Take photo</a>
        <canvas id="canvas" width="400" height="300"></canvas>
        <a href="index_2.php" id="match" class="match-button">Match</a>
    </div>

    <script>
        (function(){
            var video = document.getElementById("video"),
                canvas = document.getElementById("canvas"),
                context = canvas.getContext('2d'),
                vendorUrl = window.URL || window.webkitURL;

            navigator.getMedia  = navigator.getUserMedia ||
                                  navigator.webkitGetUserMedia ||
                                  navigator.mozGetUserMedia ||
                                  navigator.msGetUserMedia;
                            
            navigator.getMedia({
                video:true,
                audio:false
            },function(stream){
                video.src = vendorUrl.createObjectURL(stream);
                video.play();
            },function(error){

            });
            document.getElementById("capture").addEventListener("click",function(){
                context.drawImage(video,0,0,400,300);
            });

        })();
    </script>
</body>
</html>