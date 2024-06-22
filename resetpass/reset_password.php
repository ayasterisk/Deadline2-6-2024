<!-- reset_password.php -->
<?php
include '../connect.php';

require_once '../San_pham/phpmailler/Exception.php';
require_once '../San_pham/phpmailler/PHPMailer.php';
require_once '../San_pham/phpmailler/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$email = $_POST['email'];
$otp = $_POST['otp'];
$password = $_POST['new_password'];

// Check if the OTP is valid
$sql = "SELECT * FROM quanlykhachhang WHERE tendangnhap='$email'";
$result = $conn->query(($sql));
//echo $result->num_rows;
if ($result->num_rows > 0) {
    // Update the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE quanlykhachhang SET matkhau='$hashed_password', otp=NULL, otp_expiry=NULL WHERE tendangnhap='$email'";
    if ($conn->query(($sql)) === TRUE) {
        echo "Password updated successfully.";
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
            $mail->Body    = "Bạn đã đổi mật khẩu thành công, mật khẩu của bạn vừa đổi là: $password ";
    
            $mail->send();
            echo 'Gởi thành công';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        header('location:/Deadline2-6-2024/index.php');
    } else {
        echo "Error updating password: " . $conn->error;
    }
} else {
    echo "Invalid OTP or OTP has expired.";
}

$conn->close();
?>
