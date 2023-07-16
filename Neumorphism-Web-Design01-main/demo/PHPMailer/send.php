<?php
 $InputName = $_POST["InputName"];
 $InputEmail = $_POST["InputEmail"];
 $InputSubject = $_POST["InputSubject"];
 $InputMessage = $_POST["InputMessage"];
		
    require "Personal-Portfolio-Website001-master/autoload.php";

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;



//Create an instance; passing `true` enables exceptions
 $mail = new PHPMailer(true);

    //Server settings
                             //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sonamkatwal466@gmail.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($InputEmail, $InputName);
    $mail->addAddress('sonamkatwal466@gmail.com', 'portfolio');     //Add a recipient

    //Content                                //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "Sender Name - $InputName <br> Sender Email - $InputEmail <br> Sender Subject - $InputSubject <br> Sender Message - $InputMessage";

    $mail->send();
    if ($success) {
        echo 'Your message has been sent successfully.';
      } else {
        echo 'Sorry, there was a problem sending your message.';
      }

      
