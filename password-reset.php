<?php
include('./config/navbar.php');
include ('./config/database.php');
session_start();
$email = $_GET['email'];



if(isset($_POST['email'])){


  $user= "SELECT * FROM users_customer WHERE email ='".$_POST['email']."'  " ;

  $res1= mysqli_query($connect,$user);
  
  
  $user = mysqli_fetch_row($res1);

  if($res1){
  mysqli_query($connect,"UPDATE users_customer set password='".$_POST['password']."' WHERE email='".$_POST['email']."'  ");

  // header ('Location:order.php');
  echo "<p>UPDATED Succufully!</p>";
  
  
}
else{

$user2= "SELECT * FROM users_company WHERE email ='$email' " ;

$res2= mysqli_query($connect,$user2);

$user2 = mysqli_fetch_row($res2);

  if($res2){
  mysqli_query($connect,"UPDATE users_company set password='".$_POST['password']."' WHERE email='".$_POST['email']."'  ");

  // header ('Location:order.php');
  echo "<p>UPDATED Succufully!</p>";
  
  
}
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
  <title>Reset Password</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <form   class="box" method="POST">
                    <h1>Reset Password</h1> <br> <br>
                    <p id="p1" class="text-muted"> Please enter your New password</p> <br>
                    <input value="<?= $email ?>" type="hidden" name="email" > 
                     <input type="password" id="password" name="password" placeholder="New Password" > 
                     <input type="password" id="confirm_password" name="password1" placeholder="confirm password" > 

                       <input type="submit" name="update" value="Update Password " > 
                       
                </form>
            </div>
        </div>
    </div>
</div> <br> <br> <br> 

  




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

</body>
</html> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
 


<?php
include('./config/footer.php');
?>