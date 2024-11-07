<?php
session_start();
include('database.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\EXception;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';



function send_password_reset($get_name, $get_email, $token){
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "advicecyborg123456@gmail.com";                     //SMTP username
    $mail->Password   = "czdzmcsaeuneunak";                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('advicecyborg123456@gmail.com',  $get_name);
    $mail->addAddress($get_email);     //Add a recipient

    //Attachments


    $email_template="<h2> Hello.</h2>
                    <h3> You are receiving this email because we received a password reset request for your account. </h3>
                    <br/><br/>
                    <a href='http://product.u22s2104.monash-ie.me/users/passwordchange?token=$token&email=$get_email'> Click Here</a>";
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Advice Cyborg Reset Password';
    $mail->Body    = $email_template;
    $mail->AltBody = $email_template;

    $mail->send();
}

if(isset($_POST['password_reset_link']))
{
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());
    $check_email="SELECT * FROM users WHERE email='$email' LIMIT 1";
    $check_email_run=mysqli_query($conn,$check_email);

    if(mysqli_num_rows($check_email_run)>0)
    {
        $row=mysqli_fetch_array($check_email_run);
        $get_name=$row['name'];
        $get_email=$row['email'];
        $update_token="UPDATE users SET token='$token' WHERE email='$get_email' LIMIT 1";
        $update_token_run=mysqli_query($conn, $update_token);
        if($update_token_run)
        {
         send_password_reset($get_name, $get_email, $token);
         $_SESSION['status']="We emailed you a password reset link";
         header("Location: passwordreset");
         exit(0);
        }
        else
        {
        $_SESSION['status']="Something went wrong. #1";
        header("Location: passwordreset");
        exit(0);
        }
    }
    else
    {
        $_SESSION['status']="No Email Found";
        header("Location: passwordreset");
        exit(0);
    }
}

if(isset($_POST['password_update'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $new_password=mysqli_real_escape_string($conn,$_POST['new_password']);
    $confirm_password=mysqli_real_escape_string($conn,$_POST['confirm_password']);
    $token=mysqli_real_escape_string($conn,$_POST['password_token']);
    if(!empty($token)){
        if(!empty($email) && !empty($new_password) && !empty($confirm_password)){
            //checking token is valid or not
            $check_token="SELECT token FROM users WHERE token='$token' LIMIT 1";
            $check_token_run=mysqli_query($conn,$check_token);
            if(mysqli_num_rows($check_token_run)>0){
                if($new_password==$confirm_password){
                    $new_password=password_hash($new_password, PASSWORD_DEFAULT);
                    $update_password="UPDATE users SET password='$new_password' WHERE token='$token' LIMIT 1";
                    $update_password_run = mysqli_query($conn, $update_password);
                    if($update_password_run){
                        $new_token=md5(rand()."funda");
                        $update_to_new_token="UPDATE users SET token='$new_token' WHERE token='$token' LIMIT 1";
                        $update_to_new_token_run = mysqli_query($conn, $update_to_new_token);
                        $_SESSION['status']="New Password successfully updated";
                        header("Location: login");
                        exit(0);
                    }
                    else{
                        $_SESSION['status']="Did not update password. Something went wrong.";
                    header("Location: passwordchange?token=$token&email=$email");
                    exit(0);
                    }
                }
                else{
                    $_SESSION['status']="Password and Confirm Password does not match";
                    header("Location: passwordchange?token=$token&email=$email");
                    exit(0);
                }
            }
            else{
                $_SESSION['status']="Invalid Token";
                header("Location: passwordchange?token=$token&email=$email");
                exit(0);
            }
        }
        else{
            $_SESSION['status']="Please Enter All Information";
            header("Location: passwordchange?token=$token&email=$email");
            exit(0);
        }
    }
    else{
        $_SESSION['status']="No Token Available";
        header("Location: passwordchange");
        exit(0);
    }
}



?>
