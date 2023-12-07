<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Requests
$sender_name     = $_REQUEST['sender_name'];     //required
$recipient_email = $_REQUEST['recipient_email']; //required
$subject         = $_REQUEST['subject'];         //required
$body            = $_REQUEST['body'];            //required
$attachment_img  = $_REQUEST['attachment_img'];  //optional
$attachment_file = $_REQUEST['attachment_file']; //optional

if(empty($sender_name)                                 || //your name (as the sender)
   empty($recipient_email)                             || //recipient's email (the one you are sending the email to)
   !filter_var($recipient_email,FILTER_VALIDATE_EMAIL) || //recipient's email filtration (validation)
   empty($subject)                                     || //mail's subject
   empty($body)){                                         //mail's body

    // http_response_code(400);
    // echo "<span style='color: red;'>Bad Request - Please fill all fields.</span><br/>";
    // return false; //to stop the code from continuing (so if any of the criteria met from the condition then the PHP script will stop)
    $_SESSION['credentials_error_message'] = "Please fill all fields.";
    header("Location: http://localhost:8000/index.php#contact"); //../index.php
    exit;
}

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kareemtarekpk@gmail.com';                     //SMTP username
    $mail->Password   = 'your_auth_password_here';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kareemtarekpk@gmail.com', $sender_name); //sender
    $mail->addAddress($recipient_email); //recipient
    // $mail->addReplyTo('info@example.com', 'Information');

    //Attachments
    // $mail->addAttachment('../images/kareemtarekdev.jpg', 'KareemDEV.jpg');

    //Content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    // $mail->Body    = 'Hello it\'s <b>KareemDEV!</b><br/>This is my image in formal ;-)';
    $mail->Body    = $body;
    $mail->AltBody = $body;
    $mail->send();
    
    // Set success message in session
    $_SESSION['success_message'] = "\"<span style='font-weight: bold; text-decoration: underline;'>$sender_name</span>\", your mail has been sent successfully to \"<span style='font-weight: bold; text-decoration: underline;'>$recipient_email</span>\"";
    header("Location: http://localhost:8000/index.php#contact"); //../index.php
    exit;
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: <span style='color: red;'>{$mail->ErrorInfo}</span>";
    // Set error message in session
    $_SESSION['error_message'] = "\"<span style='font-weight: bold; text-decoration: underline;'>$sender_name</span>\", your mail hasn't been sent successfully to \"<span style='font-weight: bold; text-decoration: underline;'>$recipient_email</span>\"";
    header("Location: http://localhost:8000/index.php#contact"); //../index.php
    exit;
}