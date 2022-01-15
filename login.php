
<?php
include ('./config/navbar.php');
include ('./config/database.php');
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Sign in</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <form  class="box" method="POST">
                    <h1>Login</h1>
                    <p id="p1" class="text-muted"> Please enter your email and password!</p>
                     <input type="email" name="email" placeholder="Email" required >
                      <input type="password" name="password" placeholder="Password" required> 
                      <?php
                      session_start();
                    if (isset($_POST["signin"])) {
                        $z1=$_POST["email"];
                        $z2=$_POST["password"];

                        

                        $compare1="SELECT * FROM  users_customer WHERE email= '$z1' and password='$z2' " ;

                        $res1 = mysqli_query($connect,$compare1);

                        $row1 = mysqli_fetch_row($res1);
                       

                        if ($row1>0){

                            $_SESSION['email'] = $z1;
                            $_SESSION['name'] = $row1[1];
                            header ('Location:order.php' );
                        }

                        $compare2= "SELECT * FROM users_company WHERE email ='$z1' and password ='$z2'";
                        $res2= mysqli_query($connect,$compare2);
                        $row2 = mysqli_fetch_row($res2);
                        
                       
                        if ($row2>0){
                          
                            $_SESSION['email'] = $z1;
                            $_SESSION['name'] = $row2[2];

                            header ('Location:order.php');
                        
                        }
                        else {
                            echo "<p>The email or password you’ve entered is incorrect.</p>";
                        }

                        }
                        ?> <br>
                      <a class="forgot text-muted" href="password.php">Forgot password?</a>
                      <input type="submit" name="signin" value="Sign in " >                     
                       <a href="register.php"><input type="button" name="" value="Sign up" ></a>
   
                </form>
            </div>
        </div>
    </div>
</div>
    
<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <!-- <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script> -->


</body>
</html> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>


<?php

include('./config/footer.php');

?>