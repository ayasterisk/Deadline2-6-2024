<!-- send_otp.php -->
<?php
include '../connect.php';
require_once '../San_pham/phpmailler/Exception.php';
require_once '../San_pham/phpmailler/PHPMailer.php';
require_once '../San_pham/phpmailler/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email'];
$otp = rand(100000, 999999);
$otp_expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

// Check if the email exists
$sql = "SELECT * FROM quanlykhachhang WHERE tendangnhap='$email'";
$result = $conn->query(($sql));

if ($result->num_rows > 0) {
    // Store OTP in the database
    $sql = "UPDATE quanlykhachhang SET otp='$otp', otp_expiry='$otp_expiry' WHERE tendangnhap ='$email'";
    if ($conn->query(($sql)) === TRUE) {
        // Send OTP to user's email

        $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hanhatdoan7889@gmail.com';
        $mail->Password   = 'boryatnhwgjwwypa';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        //Recipients
        $mail->setFrom('hanhatdoan7889@gmail.com', 'FF');
        $mail->addAddress($email);
        //Content
        $mail->isHTML(true);
        $mail->Subject = 'FF';
        $mail->Body    = "Your OTP code is $otp";

        $mail->send();
        echo 'Gởi thành công';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


        echo "OTP sent to your email.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Email does not exist.";
}

$conn->close();
?>
<br>
<a href="verify_otp.php">Tiếp theo</a>
