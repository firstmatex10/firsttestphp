<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myStyles.css">
   
</head>
<body>

<header>
       

        <h1 id="mytitle">first test1 </h1>
       
       
        </header> 
         <nav> 
        <ul>
            <li><a style="color: white;" href="home.php"> home</a></li>
            <li><a href="about.php">about us</a></li>
            <li><a href="ourproject.php"> our prjector</a></li>
            <li><a href="contactus.php">contact us</a></li>
          
            </ul>
        
        </nav>

        <!-- slider bar -->
        <div id="container">
    <img id="slider1"  src="img/img1.jpg" alt="" >
    <!-- <div id="counter">counter</div> -->
</div>

<script>
    document.mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
    var photos = ["img1.jpg", "img2.jpg", "img3.jpg", "img4.jpg"];
    var currentPhoto = 1;
   /*  document.getElementById("counter").innerHTML = "1 / " + photos.length; */
    var slidePhotoTimer = setInterval(() => {
        if(currentPhoto < photos.length){
            document.querySelector("#container img").setAttribute("src", "img/" + photos[currentPhoto++]);
           /*  document.getElementById("counter").innerHTML = currentPhoto + " / " + photos.length; */
        }
        else{
            currentPhoto = 0;
            document.querySelector("#container img").setAttribute("src", "img/" + photos[currentPhoto++]);
            /* document.getElementById("counter").innerHTML = 1 + " / " + photos.length; */
        }
        
    }, 4000);
</script>
<br>
<br>
      

    </body>
    </html>