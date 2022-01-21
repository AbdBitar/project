<?php
// include ('./config/database.php');
// if (isset($_SESSION['$email'])){
//   header ('Location :order.php');
//   exit;
// }
?>

<?php
session_start();
$connect = mysqli_connect("localhost","root","", "yalla_diesel");


if (isset($_POST["but"])){
    $o1=$_POST["order1"];
    $o2=$_POST["order2"];
    $o3=$_POST["order3"];
    $o4=$_POST["order4"];
    $o5=$_POST["order5"];
    $o6=$_POST["order6"];
    $o7=$_POST["order7"];
    // $o8=$_POST["order8"];
    $pay=$_POST["pay"];

    $order="INSERT INTO order_yalla (email,phonenumber,streetadd,postcode,company,daterecived,liters,payment) VALUES ('$o1','$o2','$o3','$o4','$o5','$o6','$o7','$pay')" ;
    $order1=mysqli_query($connect,$order);


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<style>
    .dropdown_menu{
     position:absolute;
     left: 10;
     top: 25%;
     margin-left: -40px;
     background:rgba(0, 0, 0, 0.349) ;
     height: 120px;
     width: 220px;
     margin-top: 55px;
     font-size: 6px;

   }
   .dropdown_menu ul{
     display: block;
     margin: -2px;
     margin-top: 1px;
     margin-right: -50px;  

     
   }
   .dropdown_menu ul li{
     width: 250px;
     padding: 0px;
     
   }
   .dropdown_menu{
     display: none;
   }
   #header ul li:hover .dropdown_menu {
     display: block;
   }

   #header .dropdown_menu ul li:hover a {
	color: white;
  
}



.imge{
  width: 100px;
  height: 60px;
  margin-top: 5px;
  margin-left: 30px;
}





* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
}

p {
    color: grey;
}

#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal;
   
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 80%;
    margin: 0;
    padding-bottom: 20px;
    position: relative;
    margin-left: 40px;
}

.form-card {
    text-align: left;
}

#msform fieldset:not(:first-of-type) {
    display: none;
}

option{
    background-color: white;
    font-size: 15px;
}

#msform input,
#msform textarea,
#msform select {
    padding: 8px 15px 8px 15px ;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px;
}
#radio{
    margin-left: -300px ;
    
}
#label{
    margin-left: -500px ;
    margin-top: -35px;
    
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0;
}

#msform .action-button {
    width: 100px;
    background: #673AB7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px ;
    float: right;
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #311B92;
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px ;
    float: right;
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000;
}

.card {
    z-index: 0;
    border: none;
    position: relative;
    width: 800px;
   margin-left: -100px;
}

.fs-title {
    font-size: 25px;
    color: #673AB7;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left;
}

.purple-text {
    color: #673AB7;
    font-weight: normal;
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right;
}

.fieldlabels {
    color: gray;
    text-align: left;
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
}

#progressbar .active {
    color: #673AB7;
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 20%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e";
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f570";
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f571";
}
#progressbar #payment1:before {
    font-family: FontAwesome;
    content: "\f53d";
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c";
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px;
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1;
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #673AB7;
}

.progress {
    height: 20px;
}

.progress-bar {
    background-color: #673AB7;
}

.fit-image {
    width: 100%;
    object-fit: cover;
}
.container-fluid{
    margin-top: 5%;
   height: 1000px;
} 
.brand a{
    text-decoration: none;
}

    
.reqError {
        color: #ff0000; /*Red Color*/
        font-weight: bold;
        font-size: 12px;
    }
    
    #exampleModalLabel{
        margin-left: 160px;
    }
    
.modal-content{
    background-color:black
}
</style>
</head>

<body>
    
    
    <!-- Header -->
<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <h1><span>Ya</span>LLa <span>Die</span>sel</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="nav">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="index.php" data-after="Home"> <i class="fas fa-home"></i> Home</a></li>
            <li><a href="#offers" data-after="offrs"> <i class="fa fa-tag fa-lg"></i> Offers</a></li>
            <li><a href="#services" data-after="Service"> <i class="fas fa-cogs"></i> Services</a></li>
            <li><a href="#prices" data-after="About"> <i class="fas fa-hand-holding-usd"></i> prices</a></li>
            <li><a href="#contact" data-after="Contact"> <i class="fas fa-id-card-alt"></i> Contact Us</a></li>
            <li ><a href="#"> <i class="fas fa-user-circle" ></i><?= $_SESSION['name']; ?> <i class="fas fa-caret-down"></i></a>
          
            <div class="dropdown_menu">
              <ul>
              <li><a href="profile.php"> <i class="fas fa-user-edit"></i> View profile</a></li>
              <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
              </ul> 
            </div> 
          </li>

          </ul>


        </div>
        
      </div>
      
    </div>
    
  </section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title text-white" id="exampleModalLabel">Are You sure logout</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center text-white">
            <h4>If you logout ,You will dissmiss everything .</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><h4>Cancel</h4></button>
                <a href="logout.php"><button type="button" class="btn btn-danger"><h4>Logout</h4></button></a>
            </div>
            </div>
        </div>
        </div>

  <!-- End Header -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Make Order</h2>
                <p>Fill all form field to go to next step</p>
                <form id="msform" method="POST" onsubmit="return checkReqFields()">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Contact Info</strong></li>
                        <li id="personal" class=""><strong>Order Info</strong></li>
                        <li id="payment" class=""><strong>Subtotal Info</strong></li>
                        <li id="payment1" class=""><strong>Payment</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset style="position: relative; opacity: 1;">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Contact Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 5</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">Email: *</label>
                             <input id="email" type="email" name="order1" placeholder="john@example.com" required  >
                             <span id="reqTxtemail" class="reqError"></span> <br> <br>
                              <label class="fieldlabels">Phone Number: *</label> 
                              <input id="phone" type="text" name="order2" placeholder="+962" required > 
                              <span id="reqTxtphone" class="reqError"></span> <br> <br>
                              <label class="fieldlabels">Address: *</label>
                               <input id="add" type="text" name="order3" placeholder="House number,Apartment, suite, unit etc. and street name" required>
                               <span id="reqTxtadd" class="reqError"></span> <br> <br>
                                <label class="fieldlabels">PostCode/ZIP: *</label> 
                                <input id="zip" type="text" name="order4" placeholder="ZIP" required >
                                <span id="reqTxtzip" class="reqError"></span> <br> <br>
                          </div> 
                                 <input onmousedown="return checkReqFields()" type="button" name="next" class="next action-button" value="Next">
                       </fieldset>
                    <fieldset style="opacity: 0; position: relative; display: none;">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Order Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 5</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">Company Delivery: *</label> 
                             <select  name="order5" id="company" required >
                              <option value="">Select a Company ...</option>
                              <option value="Jo Petrol" >JO Petrol</option>
                              <option value="Manaseer" >Manaseer</option>
                              <option value="Total Energies" >TotalEnergies</option> 
                              </select>  

                            <label class="fieldlabels">Date received  order: *</label> 
                            <input type="date" name="order6"> 

                            <label class="fieldlabels">Liters (Qty): *</label> 
                            

                             <select onchange="getLiter()" name="order7" id="liters" required>
                            
                              <option value=" ">Select a Liters ...</option>
                              <option value="500L" >500L</option>
                              <option  value="700L">700L</option>
                              <option value="900L">900L</option> 
                              <option value="1500L">1500L</option> 
                              <option value="2000L">2000L</option>
                              <option value="2500L">2500L</option>  
                              <option value="3000L">3000L</option>
                              <option value="3500L">3500L</option> 
                              <option value="4000L">4000L</option> 
                              <option value="4500L">4500L</option> 
                              <option value="5000L">5000L</option> 
                              <option value="10000L">10000L</option> 
 
                        </select> 
                        </div> 
                        <input onclick="setProperties()"  type="button" name="next" class="next action-button" value="Next"> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                    </fieldset>
                    <fieldset style="display: none; opacity: 0; position: relative;">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Subtotal Info:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 5</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">Liters (QTY):</label>
                             <input id="literCount" type="text" name="" disabled > 
                             <label class="fieldlabels">Shipping fess (JD):</label>
                              <input id="fee" type="text" name="" disabled>
                              <label class="fieldlabels">Subtotal (JD):</label>
                              <input id="subtotal" type="text" name="" disabled>
                        </div> 
                        
                        <input type="button" name="next" class="next action-button" value="Next">
                         <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                    </fieldset>
                    <fieldset style="display: none; opacity: 0; position: relative;">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Payment method:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 5</h2>
                                </div>
                            </div> 
                            
                             <input id="radio" type="radio" name="pay" value="eFAWATEER-COM"> <label id="label">eFAWATEER-COM </label> <br>
                               
                            <img src="./images/eFAWATEERcom.jpg" class="imge"> 
     
                          <p>
                           Make your payment directly into eFAWATEER-COM. <br>
                           Please use your phone Number and this id="6589741202" as the payment reference. <br>
                           Your order will not be shipped until the funds have cleared in our account.
                             </p> <br> <br>
      
                    <input id="radio"  type="radio" name="pay" value="Cash on Delivery" ><label id="label" >Cash on Delivery </label> 
                    
      
                        </div> 
                        <input type="submit" name="but" class="next action-button" value="Submit">
                         <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 5 - 5</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">Your Order Has Successfully</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                </form>
            </div>
        </div>
    </div>
</div>								                           

<script type="text/javascript">$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});



const companies = 
{
          'Jo Petrol' : {

          '500L': {
            'fee': 7.5,
            'subtotal': 315,
            },
          '700L': {
            'fee': 10.5,
            'subtotal': 441,
            },
          '900L': {
            'fee': 22.5,
            'subtotal': 576,
            },
          '1500L': {
            'fee': 22.5,
            'subtotal': 965,
          },
          '2000L': {
            'fee': 30,
            'subtotal': 1260,
          },
          '2500L': {
            'fee': 37.5,
            'subtotal': 1611,
          },
          '3000L': {
            'fee': 45,
            'subtotal': 1890,
          },
          '3500L': {
            'fee': 52.5,
            'subtotal': 2205,
          },
          '4000L': {
            'fee': 60,
            'subtotal': 2520,
          },
          '4500L': {
            'fee': 67.5,
            'subtotal': 2835,
          },
          '5000L': {
            'fee': 75,
            'subtotal': 3150,
          },
          '10000L': {
            'fee': 150,
            'subtotal': 6300,
          },

   
    },

                'Manaseer' : {

         '500L': {
            'fee': 7.5,
            'subtotal': 266.5,
            },
          '700L': {
            'fee': 10.5,
            'subtotal': 423.5,
            },
          '900L': {
            'fee': 22.5,
            'subtotal': 553.5,
            },
          '1500L': {
            'fee': 22.5,
            'subtotal': 907.5,
          },
          '2000L': {
            'fee': 30,
            'subtotal': 1210,
          },
          '2500L': {
            'fee': 37.5,
            'subtotal': 1512.5,
          },
          '3000L': {
            'fee': 45,
            'subtotal': 17795,
          },
          '3500L': {
            'fee': 52.5,
            'subtotal': 2117.5,
          },
          '4000L': {
            'fee': 60,
            'subtotal': 2420,
          },
          '4500L': {
            'fee': 67.5,
            'subtotal': 2722.5,
          },
          '5000L': {
            'fee': 75,
            'subtotal': 3025,
          },
          '10000': {
            'fee': 150,
            'subtotal': 6050,
          },

                },
                
            'Total Energies' : {

         '500L': {
            'fee': 0,
            'subtotal': 307.5,
            },
          '700L': {
            'fee': 0,
            'subtotal': 430.5,
            },
          '900L': {
            'fee': 0,
            'subtotal': 553.5,
            },
          '1500L': {
            'fee': 0,
            'subtotal': 922.5,
          },
          '2000L': {
            'fee': 0,
            'subtotal': 1230,
          },
          '2500L': {
            'fee': 0,
            'subtotal': 1537.5,
          },
          '3000L': {
            'fee': 0,
            'subtotal': 1845,
          },
          '3500L': {
            'fee': 0,
            'subtotal': 2152.5,
          },
          '4000L': {
            'fee': 0,
            'subtotal': 2460,
          },
          '4500L': {
            'fee': 0,
            'subtotal': 2767.5,
          },
          '5000L': {
            'fee': 0,
            'subtotal': 3075,
          },
          '10000L': {
            'fee': 0,
            'subtotal': 6150,
          },


            },

};

var $literInfo = {};

function getLiter(event)
    {
        const $liter = document.getElementById('liters');
        const $literValue = $liter.options[$liter.selectedIndex].value;

        const $company=document.getElementById('company');
        const $companyValue = $company.options[$company.selectedIndex].value;
        

        $literInfo = companies[$companyValue][$literValue];
        $literInfo.liters = $literValue;
        
        
    }


   function setProperties() {

    const literCount = document.getElementById('literCount');
    const fee = document.getElementById('fee');
    const subtotal = document.getElementById('subtotal');

    literCount.value = $literInfo.liters;
    fee.value = $literInfo.fee;
    subtotal.value = $literInfo.subtotal;
    

   }
    
</script>

<script type="text/javascript">
            //function to check validation (Required field)
            function checkReqFields() {
                var returnValue;
                var email = document.getElementById("email").value;
                var phone = document.getElementById("phone").value;
                var add = document.getElementById("add").value;
                var zip = document.getElementById("zip").value;


                returnValue = true;
                if (email.trim() == "") {
                    document.getElementById("reqTxtemail").innerHTML = "* email is required.";
                    returnValue = false;
                }
                if (phone.trim() == "") {
                    document.getElementById("reqTxtphone").innerHTML = "* phone is required.";
                    returnValue = false;
                }
                if (add.trim() == "") {
                    document.getElementById("reqTxtadd").innerHTML = "* address is required.";
                    returnValue = false;
                }
                if (zip.trim() == "") {
                    document.getElementById("reqTxtzip").innerHTML = "* zipcode is required.";
                    returnValue = false;
                }
                return returnValue;
            }
        </script>

<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>



</body>
</html>


<?php
include ('./config/footer.php');
?>


