<?php
// Allow preflight OPTIONS request
header("Access-Control-Allow-Origin: *");
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    exit();
}

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Require PHPMailer autoload
require 'vendor/autoload.php';

// Initialize PHPMailer
$mail = new PHPMailer(true);

// Get request data
$postdata = file_get_contents("php://input");
$request = array_values(json_decode($postdata, true));

$name = $request[0] ;
$lastName = $request[1] ;
$email = $request[2];
$phone_number = $request[3];
$message = $request[4];

try {
    // SMTP Configuration
    $mail->SMTPDebug = false; // Set to true for debugging
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'crm@beeinternational.co.in'; // Your email address
    $mail->Password = "442?*!z\KOnHA'iKd.]r2"; // Your email password
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption

    // Set sender and recipient
    $mail->setFrom('hello@beeoneinnovations.com', 'Bee Innovations');
    $mail->addAddress('munees@techbank.finance', 'look');
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Beeoninnovations web enquiry from: ' . $name;
    $mail->Body = '<b> Name: ' . $name . ' ' . $lastName . '</b><br>
    <b>Email: ' . $email . '</b><br>
    <b>Phone Number: ' . $phone_number . '</b><br>
    <b>Message: ' . $message . '</b><br>';


    // Send email
    $mail->send();

    // Response
    $response_array = array(
        "success" => true,
        "status" => true,
        "message" => "Email sent"
    );
    echo json_encode($response_array);
} catch (Exception $e) {
    // Error handling
    $response_array = array(
        "success" => false,
        "status" => false,
        "message" => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo
    );
    echo json_encode($response_array);
}
?>
