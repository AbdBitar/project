

<?php
include ('./config/navbar.php');
include ('./config/database.php');
?>


<?php

// from indiviual 
if (isset($_POST["sign-individual"])){
    $x1=@$_POST["name1"];
    $x2=@$_POST["name2"];
    $x3=@$_POST["name3"];
    $x4=@$_POST["name4"];
    $x5=@$_POST["name5"];
    $x6=@$_POST["name6"];
    $x13=@$_POST["name13"];


    if ($x13===$x6){
        
    $insertind="INSERT INTO users_customer (firstname,lastname, city ,phonenumber, email, password ) VALUES ('$x1','$x2','$x3','$x4','$x5','$x6') " ;
    $individual=mysqli_query($connect,$insertind);
    if ($individual){
        header('Location:order.php');
    }
    
}

}
// from company
if (isset($_POST["sign-company"])){
    $x7=@$_POST["name7"];
    $x8=@$_POST["name8"];
    $x9=@$_POST["name9"];
    $x10=@$_POST["name10"];
    $x11=@$_POST["name11"];
    $x12=@$_POST["name12"];
    $x13=@$_POST["name13"];
    

    if ($x13===$x12){

    $insertcom="INSERT INTO users_company (commercialregistrationnumber,name, city ,phonenumber, email, password ) VALUES ('$x7','$x8','$x9','$x10','$x11','$x12') " ;
    $company=mysqli_query($connect,$insertcom);
    if ($company){
        header('Location:order.php');
    }


}
}
//  if ($connect){
//      echo " Yes You Connect";


//  }
//  else{
//  echo "no connect";
//  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/intlTelInput.css">
    <title>Sign up</title>
</head>
<body>
    
   
        <div class="form-box">
            <div class="button-box">
                <div id="btn-rg"></div>
                <button type="button" class="toggle-btn" onclick="Individual()"><i class="fas fa-user"></i> Individual</button>
                <button type="button" class="toggle-btn" onclick="Company()"><i class="fas fa-users"></i> Company</button>
            </div>
         
            <form id="Individual" class="box-rg"  method="Post">
            <h1>Sign Up</h1> <br>
                    <label id="label" >First Name</label>
                     <input type="text" name="name1" placeholder=" Enter Your First Name" required >
                     <label id="label"  >Last Name</label>
                      <input type="text" name="name2" placeholder="Enter Your Last Name" required > 
                      <label id="label" >City</label>
                      <select name="name3" id="city" required>
                      <option value="select">Select a City ....</option>
                      <option value="Amman">Amman</option>
                      <option value="Zarqa">Zarqa</option>
                       <option value="Irbid">Irbid</option>
                        <option value="Ajlon">Ajlon</option>
                        <option value="Mafreq">Mafreq</option>
                        <option value="Karak">Karak</option>
                        <option value="Ma'an">Ma'an</option>
                        <option value="Aqaba">Aqaba</option>
                    </select>
                      <label id="label" >Phone Number</label> <br>
                      <input id="phone" type="text" name="name4" placeholder="Number" required >  <br> <br>
                      <label id="label" > Email</label> 
                      <input type="email" name="name5" placeholder="john@example.com" required>
                      <label id="label" >Password</label>
                      <input type="password" name="name6" placeholder="Enter Your Password" id="password" required> <br>
                      <label id="label">Confirm Password</label>
                      <input type="password" name="name13" placeholder=" Password" id="confirm_password" required> <br>     
                      <input type="checkbox" class="chech-box" required> <span>I agree to the terms & conditions</span>
                      <input type="submit" name="sign-individual" value="Sign Up " >
            </form>

            <form id="Company"  class="box-rg"  method="POST">
            <h1>Sign Up</h1> <br>
                     <label id="label"> Registration Number</label>
                      <input type="text" name="name7" placeholder=" Commercial Registration Number" required >
                      <label id="label" > Name</label>
                      <input type="text" name="name8" placeholder="Name Of Company" required > 
                      <label id="label" >City</label>
                      <select name="name9" id="city" required>
                      <option value="select">Select a City ....</option>
                      <option value="Amman">Amman</option>
                      <option value="Zarqa">Zarqa</option>
                       <option value="Irbid">Irbid</option>
                        <option value="Ajlon">Ajlon</option>
                        <option value="Mafreq">Mafreq</option>
                        <option value="Karak">Karak</option>
                        <option value="Ma'an">Ma'an</option>
                        <option value="Aqaba">Aqaba</option>
                    </select>
                      <label id="label" ">Phone Number</label> <br>
                      <input id="phone1" type="text" name="name10" placeholder="Number" required > <br> <br>
                      <label id="label" >Email</label>
                      <input type="email" name="name11" placeholder=" yalla@example.com" required>
                      <label id="label">Password</label>
                      <input type="password" name="name12" placeholder=" Password" id="password1" required> <br>
                      <label id="label">Confirm Password</label>
                      <input type="password" name="name13" placeholder=" Password" id="confirm_password1" required> <br>
                
                      <input type="checkbox" class="chech-box" required> <span>I agree to the terms & conditions</span>
                      <input type="submit" name="sign-company" value="Sign Up " >
            </form>
        </div>
        
        
    <script>
        var x = document.getElementById("Individual");
        var y = document.getElementById("Company");
        var z = document.getElementById("btn-rg");

        function Company(){
            x.style.left = "-800px";
            y.style.left = "-5px";
            z.style.left = "125px";
        }
        function Individual(){
            x.style.left = "300px";
            y.style.left = "600px";
            z.style.left = "0px";
        }
    </script>

    
    <script src="js/intlTelInput.js"></script>
    <script > var input = document.querySelector("#phone");
    window.intlTelInput(input, {
     dropdownContainer: document.body,
       onlyCountries: ['Jo'],
        separateDialCode: true,
        
      
    });</script>

<script > var input = document.querySelector("#phone1");
    window.intlTelInput(input, {
     dropdownContainer: document.body,
       onlyCountries: ['Jo'],
        separateDialCode: true,
        
      
    });</script>

    <!-- <script src="./js/cleave.min.js"></script>
    <script>
        var cleave = new Cleave('#phone', {
    blocks: [2, 3,4],  
});
    </script>

<script>
        var cleave = new Cleave('#phone1', {
    blocks: [2, 3,4],
});
    </script> -->
   <script >
       var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

   </script>

   <script >
       var password1 = document.getElementById("password1")
  , confirm_password1 = document.getElementById("confirm_password1");

function validatePassword(){
  if(password1.value != confirm_password1.value) {
    confirm_password1.setCustomValidity("Password Don't Match");
  } else {
    confirm_password1.setCustomValidity('');
  }
}

password1.onchange = validatePassword;
confirm_password1.onkeyup = validatePassword;

   </script>
</body>
</html>

<?php
include ('./config/footer.php');

?>