<?php
// Allow preflight OPTIONS request
header("Access-Control-Allow-Origin: *");
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    exit();
}

ini_set('display_errors', 0);
error_reporting(0);

//error_reporting(E_ALL);
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require './vendor/autoload.php';

$mail = new PHPMailer(true);
$firstname=$_POST['firstName'];
$lastname=$_POST['lastName'];
$email=$_POST['email'];
$phone_number=$_POST['phone'];
$message=$_POST['jobTitle'];
try {

   $mail->SMTPDebug = false; //SMTP::DEBUG_SERVER;
   $mail->isSMTP();
   $mail->Host     = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'crm@beeinternational.co.in'; // Your email address
   $mail->Password = "442?*!z\KOnHA'iKd.]r2"; // Your email password
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
   $mail->Port = 587;

   $mail->setFrom('hello@beeoneinnovations.com', 'Bee Innovations');
   $mail->addAddress('munees@techbank.finance', 'look');
   $mail->addReplyTo($email,  $name);
   // $mail->addCC('cc@example.com');
   //$mail->addBCC('bcc@example.com');

//Attachments
   $fname = $_FILES["file"]["name"];

   $mail->AddAttachment($_FILES['file']['tmp_name'],  $fname);
   //$mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

   $mail->isHTML(true);

   $mail->Subject = 'Beeoninnovations web enquiry from :' . $name;
   $mail->Body    = '<b> Name: ' . $name . ' ' . $lastName .'</b><br>
   <b>Email: ' . $email . '</b><br>
   <b>Phone Number: ' . $phone_number . '</b><br>
   <b>Designation: ' . $message . '</b><br>';
// // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   $mail->send();
   if (!$mail->Send()) {
       $message        = 'Mail error: ' . $mail->ErrorInfo;
       $response_array = array("success" => false,
           "status"                          => false,
           "message"                         => $message);
      // header('Content-Type: application/json');
         echo json_encode($response_array); die();
       //echo json_encode($response_array);die();
   } else {
       $message        = "email sent";
       $response_array = array("success" => true,
           "status"                          => true,
           "message"                         => $message);
      // header('Content-Type: application/json');
        echo   json_encode($response_array); die();
      // echo json_encode($response_array);die();
   }

} catch (Exception $e) {
   $message        = "Message could not be sent. Mailer Error!";
   $response_array = array("success" => false,
       "status"                          => false,
       "message"                         => $message);
   echo   json_encode($response_array); die();
   //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}