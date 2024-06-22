<?php
require 'connect.php';
require_once './San_pham/phpmailler/Exception.php';
require_once './San_pham/phpmailler/PHPMailer.php';
require_once './San_pham/phpmailler/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['btn-req'])){
$fullname=$_POST['ten_kh'];
$gender=$_POST['gioitinh'];
$birthday=$_POST['ngaysinh'];
$email=$_POST['email'];
$password=$_POST['matkhau'];
$address=$_POST['diachi'];
$numberphone=$_POST['sodienthoai'];
$registration_time = $_POST['ngaydangkythanhvien'];
$bank=$_POST['taikhoannganhang'];
$debitcard=$_POST['theghino'];
$credit=$_POST['thetindung'];
$invite=$_POST['magioithieu'];
if(!empty($fullname)&&!empty($gender)&&!empty($birthday) && !empty($email) && !empty($password) && !empty($address)){
$password= password_hash($password,PASSWORD_DEFAULT);
$sql= "INSERT INTO `quanlykhachhang` ( `ten_kh`, `tendangnhap`, `matkhau`, `ngaysinh`, `gioitinh`, `diachi`, `sodienthoai`, `thetindung`, `theghino`, `taikhoannganhang`, `ngaydangkythanhvien`, `magioithieu`) VALUE ('$fullname','$email','$password','$birthday','$gender','$address','$numberphone','$credit','$debitcard','$bank','$registration_time','$invite')";


if($conn->query(($sql))===TRUE){
    echo "Lưu dữ liệu thành công  ";
    

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
        $mail->Body    = 'Chúc mừng bạn đã đăng ký tài khoản khách hàng FF thành công ';

        $mail->send();
        echo 'Gởi thành công';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


}
else{
    echo "Lỗi {$sql}".$conn->error;
}
}
else{
 echo "Bạn cần nhập đầy đủ thông tin trước khi đăng ký";
}}
?>
<br>
<a href="index.php">Quay lại trang chủ</a>