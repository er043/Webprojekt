<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    <title>Startseite</title>
    <link rel="stylesheet" href="index.css">


    <!-- BILDERSLIDE -->





</head>



<body>














<div class="wrapper" >
    <ul>

        <li><div class="text"><p>hi</p></div></li>

        <li>
            <div class="imgbox" id="img"></div>

        </li>

    </ul>

</div>

<!--<script>
    var i=0;
    var images=[];
    var time=3000;
    images[0]='Bilder/Bild1.jpg';
    images[1]='Bilder/Bild2.jpg';
    images[2]='Bilder/Bild3.jpg';
    images[2]='Bilder/Bild4.jpg';
    images[2]='Bilder/Bild5.jpg';

    function changeImg(){
        document.slide.src=images[i];
        if(i<images.length-1)
        {
            i++;
        }
        else
        {
            i=0;
        }
        setTimeout("changeImg()",time);
    }
    window.onload=changeImg;

</script>-->


<!--<script>
    var i=0;
    var images=[];
    var time=3000;
    images[0]='Bilder/Bild1.jpg';
    images[1]='Bilder/Bild2.jpg';
    images[2]='Bilder/Bild3.jpg';
    images[3]='Bilder/Bild4.jpg';
    images[4]='Bilder/Bild5.jpg';

    function changeImg(){
        document.getElementById("img").style.backgroundImage="url("+images[i]+")";
        if(i<images.length-1)
        {
            i++;
        }
        else
        {
            i=0;
        }
        setTimeout("changeImg()",time);
    }
    window.onload=changeImg;




</script>
-->


<script>
    var i = 1;
    var bannerTimer = 3000;

    function bannerLoop() {



            document.getElementById("img"+(i+1)%3).style.opacity="0";
            setTimeout(function () {
                document.getElementById("img"+i%3).style.right="0px";
                document.getElementById("img"+i%3).style.zIndex="1000";
                document.getElementById("img"+(i+1)%3).style.right="-1200";
                document.getElementById("img"+(i+1)%3).style.zIndex="1500";
                document.getElementById("img"+(i+2)%3).style.right="1200";
                document.getElementById("img"+(i+2)%3).style.zIndex="500";
                },500);
            setTimeout(function () {
                document.getElementById("img"+(i+1)%3).style.opacity="1";

            }1000);

        if(i<3) {
            i++;
        }else{
            i=0;
        }
        setTimeout("bannerLoop()",bannerTimer);
    }
</script>









<?php
$servername = "mysql:dbhost=localhost;dbname=webprojekt";
$username = "root";
$password = "";

try {
    $conn = new PDO($servername, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected successfully";*/
}
catch(PDOException $e)
{
    /*echo "Connection failed: " . $e->getMessage();*/
}

?>


<!--<a href="registrierung.php">Registrierung</a>-->


</body>
</html>