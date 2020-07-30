<?php
require 'common.php';
?>

<?php

$email_addr = mysqli_real_escape_string($con, $_POST['email']);

$select_query = "select password from users where email = '$email_addr'";
$result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$password = $row['password'];

require 'PHPMailer-5.2-stable/PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jaisaikuntala1@gmail.com';                 // SMTP username
$mail->Password = '**********';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('jaisaikuntala1@gmail.com', 'Jaisai Kuntala');
$mail->addAddress("$email_addr", 'User');     // Add a recipient


                                

$mail->Subject = 'FORGOT PASSWORD';
$mail->Body    = "Respected User, Here is your password: '$password'";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


?>