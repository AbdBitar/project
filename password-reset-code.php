<?php
include('./config/navbar.php');
?>

<?php
include ('./config/database.php');
// session_start();

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

//  require './vendor/phpmailer/phpmailer/src/Exception.php';
//  require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
//  require './vendor/phpmailer/phpmailer/src/SMTP.php';




// //Load Composer's autoloader
// require 'vendor/autoload.php';

// function send_password_reset ($get_name,$get_email,$token){
//     $mail = new PHPMailer(true);
    
//     $mail->isSMTP();
//     $mail->SMTPAuth=true;

    
//     $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
//     $mail->Username   = "abd.bitar.98@gmail.com";                     //SMTP username
//     $mail->Password   = '***';                               //SMTP password


//     $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
//     $mail->Port       = 587;            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    
//     $mail->setFrom("abd.bitar.98@gmail.com", $get_name);
//     $mail->addAddress($get_email);               //Name is optional
    
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject="Reset Password Notification";

//     $email_template ="
//     <h2>Hello</h2>
//     <h3>You are reciving this email because we recevied a password reset request for your account.</h3>
//     <br/><br/>
//     <a herf='http://localhost/project/password_change.php?token=$token&email=$get_email'> Click Me </a>
    
//     ";

//     $mail->Body=$email_template;
//     $mail->send();

// }


// if(isset ($_POST['password_reset_link'])){
//     $email=mysqli_real_escape_string($connect,$_POST['email']);
//     $token=md5(rand());

//     $check_email="SELECT email FROM users_customer WHERE email='$email'LIMIT 1";
//     $check_email_run= mysqli_query($connect,$check_email);

//     if(mysqli_num_rows($check_email_run) >0){
//         $row= mysqli_fetch_array($check_email_run);
//         $get_name =$row ['name'];
//         $get_email =$row ['email'];
         
//         $update_token= "UPDATE users_customer SET password '$token' WHERE email='$get_email' LIMIT 1 ";
//         $update_token_run =mysqli_query($connect,$update_token);

//         if ($update_token_run){
//             send_password_reset ($get_name,$get_email,$token);
//             $_SESSION['status']= "we e-mailed you a password reset link ";
//             header('Location:password.php');
//             exit(0);

//         }
//         else{
//             $_SESSION['status']="Something went wrong. #1";
//         header("Location: password.php");
//         exit(0);

//         }

//     }
//     else{
//         $_SESSION['status']="No Email Found";
//         header('Location: password.php');
//         exit(0);
//     }
// }

// if (isset($_POST['password_update'])){
//     $email = mysqli_real_escape_string($connect,$_POST['email']);
//     $new_password =mysqli_real_escape_string($connect,$_POST['new_password']);
//     $confirm_password =mysqli_real_escape_string($connect,$_POST['confirm_password']);
//     $token =mysqli_real_escape_string($connect,$_POST['password_token']);

//     if (!empty($token)){

//         if(!empty($email) && !empty($new_password) && !empty($confirm_password)){

//            //Checking Token is valied or not
//            $check_token="SELECT password FROM users_customer WHERE password='$token' LIMIT 1";
//            $check_token_run =mysqli_query($connect,$check_token);

//            if(mysqli_num_rows($check_token_run)>0 ){
//                if($new_password==$confirm_password){
//                    $update_password="UPDATE users_customer SET password='$new_password' WHERE password='$token' LIMIT 1  ";
//                    $update_password_run=mysqli_query($connect,$update_password);

//                    if($update_password_run){
//                        $new_token=md5(rand()."abd");

//                     $update_to_new_token="UPDATE users_customer SET password='$new_token' WHERE password='$token' LIMIT 1  ";
//                     $update_to_new_token_run=mysqli_query($connect,$update_to_new_token);
                    
//                     $_SESSION['status']="New password Succefully Updated ";
//                     header("Location: login.php");
//                     exit(0);

//                    }
//                    else{
//                     $_SESSION['status']="Did not update password. something went wrong.!";
//                     header("Location: password_change.php?token=$token&email=$email");
//                     exit(0);

//                    }

//                }
//                else{
//                 $_SESSION['status']="Password and confirm password not match ";
//                 header("Location: password_change.php?token=$token&email=$email");
//                 exit(0);
//                }

//            }
//            else{
//             $_SESSION['status']="Invalied Token ";
//             header("Location: password_change.php?token=$token&email=$email");
//             exit(0);
//            }

//         }
//      else{
//         $_SESSION['status']="All Filed are Mandetory ";
//         header("Location: password_change.php?token=$token&email=$email");
//         exit(0);
//             }
//        }
//     else{
//         $_SESSION['status']="No Token Available";
//         header('Location: password_change.php');
//         exit(0);

//     }



// }

if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $select = "UPDATE users_customer SET password='$pass' WHERE email='$email'  ";

  $select1= mysqli_query($connect,$select);

}

?>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css"> 

<?php
include('./config/footer.php');
?>