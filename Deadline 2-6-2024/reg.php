<?php
require 'connect.php';

if(isset($_POST['btn-req'])){
$fullname=$_POST['tenkhaachhang'];
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
echo "<pre>";
print_r($_POST);
$sql= "INSERT INTO `quanlykhachhang` ( `tenkhaachhang`, `tendangnhap`, `matkhau`, `ngaysinh`, `gioitinh`, `diachi`, `sodienthoai`, `thetindung`, `theghino`, `taikhoannganhang`, `ngaydangkythanhvien`, `magioithieu`) VALUE ('$fullname','$email',md5('$password'),'$birthday','$gender','$address','$numberphone','$credit','$debitcard','$bank','$registration_time','$invite')";
if($conn->query(($sql))===TRUE){
    echo "Lưu dữ liệu thành công";

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