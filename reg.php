<?php
require 'db/connect.php';
if(isset($_POST['btn-req'])){
$fullname=$_POST['customer[full_name]'];
$gender=$_POST['customer[gender]'];
$birthday=$_POST['customer[birthday]'];
$email=$_POST['customer[email]'];
$password=$_POST['customer[password]'];
$confirmpassword=$_POST['customer[confirmpassword]'];
$address=$_POST['customer[address]'];
$registration_time = $_POST['registration_time'];
$bank=$_POST['customer[bank]'];
$debitcard=$_POST['customer[debit_card]'];
$credit=$_POST['customer[credit]'];



if(!empty($fullname) && !empty($gender) && !empty($birthday) && !empty($email) && !empty($password) && !empty($confirmpassword) && !empty($address)){
    echo "<pre>";
print_r($_POST);
$sql= "INSERT INTO 'quanlykhachhang' ('fullname','gender','birthday','email','password','address','registration_time','bank','debitcard','credit') VALUE ('$fullname','$gender','$birthday','$email',md5('$password'),'$address','$registration_time','$bank','$debitcard','$credit')";
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