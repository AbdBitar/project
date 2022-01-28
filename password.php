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
    <title>Restpassword</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <form   class="box" method="POST">
                    <h1>Reset Password</h1> <br> <br>
                    <p id="p1" class="text-muted"> Please enter your email!</p> <br>
                     <input type="email" name="email" placeholder="Email" > 
                       <input type="submit" name="reset_password" value="Reset Password " >
                   <?php   
                        session_start();
                        if (isset($_POST["reset_password"])) {
                            $e=$_POST["email"];

                            $compare1="SELECT * FROM  users_customer WHERE email= '$e' " ;

                            $res1 = mysqli_query($connect,$compare1);

                            $row1 = mysqli_fetch_row($res1);
                        

                            if ($row1>0){

                                header ("Location:reset_password.php?email=$e" );
                            }
                            $compare2= "SELECT * FROM users_company WHERE email ='$e' ";
                            $res2= mysqli_query($connect,$compare2);
                            $row2 = mysqli_fetch_row($res2);
                            
                        
                            if ($row2>0){
                            
                                header ("Location:reset_password.php?email=$e");
                            }

                            else
                            echo "<p>The email you’ve entered is incorrect.</p>";
                        }

                      ?> 
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>


<?php
include ('./config/footer.php');
?>