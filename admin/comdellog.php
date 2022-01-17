<?php
   $connect = mysqli_connect("localhost","root","", "yalla_diesel");
   ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Company Admin login</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-130">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
           <form method="POST">
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Company Admin Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>

                <input type="email" name="email_admin" id="typeEmailX" class="form-control form-control-lg " required />
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Password</label>

                <input type="password" name="pass_admin" id="typePasswordX" class="form-control form-control-lg" required />
              </div>
              <?php
   

                session_start();

                if (isset($_POST["login"])) {
                $a1=$_POST["email_admin"];
                $a2=$_POST["pass_admin"];

                                    

                $admin="SELECT * FROM   company_admin  WHERE email= '$a1' and password='$a2' " ;

                $admin1 = mysqli_query($connect,$admin);

                $admin2 = mysqli_fetch_row($admin1);
                                    

                if ($admin2>0){

                    $_SESSION['email_dash'] = $a1;
                    $_SESSION['username1'] = $admin2[1];
                    header ('Location:indexcom.php' );
                       }
                       else {
                         echo "<p>The email or password you’ve entered is incorrect.</p>";
                             }
                                }
                
                ?>


              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button name="login" class="btn btn-outline-light btn-lg px-5" type="submit">Login</button> <br> <br>
              <button  class="btn btn-outline-light btn-lg px-5" type="submit">Company</button>

             
           
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

</body>
</html>