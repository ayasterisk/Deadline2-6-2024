<?php
require 'connect.php';
if(isset($_POST['btn-req'])){
$fullname=$_POST['tenkhaachhang'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$password=$_POST['passsword'];
$address=$_POST['address'];
$numberphone=$_POST['numberphone'];
$registration_time = $_POST['registrantion_time'];
$bank=$_POST['bank'];
$debitcard=$_POST['debitcard'];
$credit=$_POST['credit'];



if(!empty($fullname) && !empty($gender) && !empty($birthday) && !empty($email) && !empty($password) && !empty($confirmpassword) && !empty($address)){
    echo "<pre>";
print_r($_POST);
$sql= "INSERT INTO 'quanlykhachhang' ('fullname','email','password','birthday','gender','address','numberphone','credit','debitcard','bank','$registration_time') VALUE ('$fullname','$email',md5('$password'),'$birthday','$gender','$address','$numberphone','$credit','$debitcard','$bank','$registration_time')";
if($conn->query(($sql))===TRUE){
    echo "Lưu dữ liệu thành công";

}
else{
    echo "Lỗi {$sql}".$conn->error;
}
}else{
 echo "Bạn cần nhập đầy đủ thông tin trước khi đăng ký";
}}
?>
<br>
<a href="index.php">Quay lại trang chủ</a>