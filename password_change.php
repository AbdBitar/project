<?php
session_start();
include ('./config/database.php');
include ('./config/navbar.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Changepassword</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            
            <div class="card">
                <?php
                if($_GET['key'] && $_GET['reset'])
                {
                  $email=$_GET['key'];
                  $pass=$_GET['reset'];
                  
                  $select = "SELECT (email,password) FROM users_customer WHERE md5(email)='$email' and md5(password)='$pass'  ";

                  $select1= mysqli_query($connect,$select);
                
                  if(mysqli_num_rows($select1)==1)
                  {
                
                ?>
                <form action="password-reset-code.php"  class="box" method="POST">
                    <h1>Reset Password</h1> <br> <br>
                    <p id="p1" class="text-muted"> Please enter your email!</p> <br>
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <!-- <input type="hidden" name="password_token" > -->
                     <!-- <input type="text" name="email"  placeholder="Enter Your Email Address" >  -->
                     <input type="password" name="new_password" placeholder="New Password" > 
                     <!-- <input type="password" name="confirm_password" placeholder="Confirm new password" >  -->
                       <input type="submit" name="password_update" value="Update password " >
                       
                </form>
                <?php
                  }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- value="<?php if (isset($_GET['email']) ){echo $_GET['email']; } ?>" -->
<!-- value="<?php if (isset($_GET['email']) ){echo $_GET['email']; } ?>" -->
</body>
</html>
<?php
include('./config/footer.php');
?>