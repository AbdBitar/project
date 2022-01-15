

<?php
include ('./config/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Read More</title>
    <style>

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-top: 80px;
  width: 1500px;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
h1,h2,p{
  margin-left: 40px;
}


/* On smaller screens, decrease text size */

</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="./images/jo1.jpg"  style="width:100%">
</div>

<div class="mySlides fade">
  
  <img src="./images/jo2.jpg"  style="width:100%">
</div>

<div class="mySlides fade">
 
  <img src="./images/jo3.jpg"  style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div>
<h1>Why choose JoPetrol</h1> <br> <br> <br>
<h2>When you choose JoPetrol for your heating needs, you will test the Jopetrol difference by:</h2> <br>
<p>The Petroleum Products Marketing Company is distinguished by its punctuality, 
    speed in delivering orders, and confidence in delivering the required quantity throughout the week, 24 hours a day,
     through modern tankers and the advanced equipment that accompany them to ensure accurate delivery of the quantity,
      in addition to the qualified staff working on these tanks.</p> <br>
      <p>Jopetrol supplies many institutions, factories and companies with fuel during all seasons, 
          especially in the winter season, through a specialized fleet that is trained professionally and professionally.</p>
</div> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

</body>
</html> 

<?php

  include ('./config/footer.php'); 
  ?>