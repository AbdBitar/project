
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
    <link rel="stylesheet" href="css/login.css">
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
  
  <img src="./images/manaseer1.jpg"  style="width:100%">
</div>

<div class="mySlides fade">
  
  <img src="./images/manaseer2.png"  style="width:100%">
</div>

<div class="mySlides fade">
 
  <img src="./images/manaseer3.jpg"  style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div>
        <h1>Why choose Manaseer Group</h1> <br> <br> <br>
        <h2>When you choose Maaseer Group for your heating needs, you will test the Manaseer difference by:</h2> <br>
        <p>Manaseer Oil and Gas Company transports ready-made petroleum products to its various clients throughout the Kingdom,
           through a fleet of 200 modern tankers.</p> <br>
           <p>The Ministry of Energy and Mineral Resources granted Manaseer Oil and Gas a 10-year license to distribute, market, transport and import petroleum products in Jordan.
            Manaseer Oil & Gas became one of the first private sector fuel suppliers in the country. 
            Under this license signed on November 21, 2012 AD.; Manaseer Oil and Gas Company has the right to provide fuel to the stations, 
            in addition to the company's 85 service stations. Which will account for 40% of the retail network market share.</p>
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
