
<?php

include ('./config/navbar.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Yalla Diesel</title>
  <style>
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-top: 30px;
  width: 1500px;
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
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}



/* On smaller screens, decrease text size */

</style>
</head>

<body>
  
  <!-- Sec1 Section  -->
  <section id="sec1">  
       
    <div class="sec1 container">  
              
      <div>
        <h1>Easy <span></span></h1>
        <h1>Fast <span></span></h1>
        <h1>Economy <span></span></h1>
        <a href="login.php" type="button" class="cta">Order Now</a>
      </div>
    </div>
  </section> <br> 
  <br> <br> <br>
  <!-- End Sec1 Section  -->
<!-- offers -->
<section id="offers">
<h1 class="section-title">off<span>er</span>es</h1> 
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="./images/yalla-diesel-offer.png"  style="width:100%">
</div>

<div class="mySlides fade">
  
  <img src="./images/manaseer-offer.jpg"  style="width:100%">
</div>

<div class="mySlides fade">
 
  <img src="./images/total-offer.png"  style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</section>








<!-- End offers -->
  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Ser<span>vi</span>ces</h1> <br> <br>
        <p style="font-size: 200% "> We can deliver diesel to all customers and companies in all 
        governorates within 24/7 of your order a nominal delivery fees through our approved companies throughout the Kingdom.</p>
       
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon">
              <a href="http://jppmc.jo/"target="_blank" ><img src="./images/jopetrol_logo.jpg" /></a>
        </div>
          <h2>Jo pertol</h2>
          <p>The Petroleum Products Marketing Company is distinguished by its punctuality,
               speed in delivering orders, and confidence in delivering the required quantity throughout the week,
                through modern tankers and the advanced equipment that accompany them to ensure accurate delivery of the quantity,
                 in addition to the qualified staff working on these tanks.</p> <br>
                 <a href="readmore_jopetrol.php"><button id="btn">Read More</button> </a>
               
        </div>
        <div class="service-item">
          <div class="icon">
              <a href="https://www.mgc-gas.jo/" target="_blank" ><img src="./images/manaseer_logo.jpg" /></a>
        
        </div>
          <h2>Manaseer Group</h2>
          <p>Manaseer Oil and Gas Company is committed to its responsibility towards its customers, shareholders,
               employees, the local community and the environment, 
               through the standards it has set to continuously measure its performance and 
               work to improve its services and products to reach the best performance standards.</p> <br>
               <a href="readmore_manaseer.php"><button id="btn">Read More</button></a>
        </div>
        <div class="service-item">
          <div class="icon">
              <a href="https://jo.totalenergies.com/ar/dafa-total-diesel" target="_blank"><img src="./images/Total 7x7 final.png" /></a>
        
        </div>
          <h2>TotalEnergies</h2>
          <p>Dafa by TotalEnergies is your reliable home and office heating diesel delivery service, 
              offered by Total Jordan. Our fleet is equipped with digital electronic meters to ensure precise and accurate delivery. 
              Thanks to the professional team, the premium service and the product quality, 
              Dafa by TotalEnergies provides a first-rate service that everyone trusts!</p> <br>
              <a href="readmore_total.php"><button id="btn">Read More</button>   </a>
                
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- prices Section -->
  <section id="prices">
    <div class="prices container">
      <div class="prices-header">
        <h1 class="section-title">Diesel <span>Prices</span></h1>
      </div>
      <div class="hover-table-layout">
    <div class="listing-item">
        <figure class="image">
            <img src="./images/logo_project.png" alt="image">
        </figure>
        <div class="listing">
            <h4>Price=0.615/L</h4>
            <h4>Delivery fees=0.015/L</h4>
            <h4>Delivery time=24/7</h4>
            <h4>Minimum quantity=500L</h4>
            
        </div>
    </div>
    </section> <br> <br> <br> <br>
     <!--  -->
  <!-- End price Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div> <br>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+962 799736575</h2>
            <h2>+962 6563214</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>yalla_diesel@info.com</h2>
            <h2>info@info.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Jordan,Amman</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
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