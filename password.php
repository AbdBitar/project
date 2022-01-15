<?php
include ('./config/navbar.php');
include ('./config/database.php');
?>



















 <?php
// require './config/PHPMailer-master/src/Exception.php';
// require './config/PHPMailer-master/src/PHPMailer.php';
// require './config/PHPMailer-master/src/SMTP.php';
//     use PHPMailer\PHPMailer\PHPMailer;
//     use PHPMailer\PHPMailer\SMTP;
//     use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;


//  require './vendor/phpmailer/phpmailer/src/Exception.php';
//  require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
//  require './vendor/phpmailer/phpmailer/src/SMTP.php';




// //Load Composer's autoloader
// require 'vendor/autoload.php';
  
// if(isset($_POST['password_reset_link']) && $_POST['email'])
// {

//     // $select= "SELECT * From users_customer WHERE email='$email'";
//     $select = "SELECT (email,password) FROM users_customer WHERE email='$email'  ";

//     $select1= mysqli_query($connect,$email);
  
//   if(mysqli_num_rows($select1)==1)
//   {
//     while($row=mysqli_fetch_array($select1))
//     {
//       $email=md5($row['email']);
//       $pass=md5($row['password']);
//     }
//     $link="<a href='www.samplewebsite.com/reset.php?key=".$email."&reset=".$pass."'>http://localhost/project/password_change.php</a>";
//     require_once('./vendor/autoload.php');
    
//     $mail = new PHPMailer();
//     $mail->CharSet =  "utf-8";
//     $mail->IsSMTP();
//     // enable SMTP authentication
//     $mail->SMTPAuth = true;                  
//     // GMAIL username
//     $mail->Username = "abd.bitar.98@gmail.com";
//     // GMAIL password
//     $mail->Password = "abd.bitar.98@gmail.com";
//     $mail->SMTPSecure = "tls";  
//     // sets GMAIL as the SMTP server
//     $mail->Host = "smtp.gmail.com";
//     // set the SMTP port for the GMAIL server
//     $mail->Port = "587";
//     $mail->From='abd.bitar.98@gmail.com';
//     $mail->FromName='Yalla_Diesel';
//     $mail->AddAddress('abd.bitar.98@gmail.com', 'yalla');
//     $mail->Subject  =  'Reset Password';
//     $mail->IsHTML(true);
//     $mail->Body    = ' http://localhost/project/password_change.php'.$pass.'';
//     if($mail->Send())
//     {
//       echo "clicek me";
//     }
//    else
//     {
//       echo "Mail Error - >".$mail->ErrorInfo;
//    }
//   }	
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
    <title>Restpassword</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <form action="password-reset-code.php"  class="box" method="POST">
                    <h1>Reset Password</h1> <br> <br>
                    <p id="p1" class="text-muted"> Please enter your email!</p> <br>
                     <input type="text" name="email" placeholder="Email" > 
                       <input type="submit" name="password_reset_link" value="Reset Password " >
                       
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