<?php
require 'connect.php';
session_start();
$user = $_SESSION['user'];

if(isset($_POST['btn-req'])){
$fullname=$_POST['ten_kh'];
$gender=$_POST['gioitinh'];
$birthday=$_POST['ngaysinh'];
$email=$_POST['email'];
$password=$_POST['matkhau'];
$address=$_POST['diachi'];
$numberphone=$_POST['sodienthoai'];
$bank=$_POST['taikhoannganhang'];
$debitcard=$_POST['theghino'];
$credit=$_POST['thetindung'];
 
$id=$user['ma_kh'];
$password= password_hash($password,PASSWORD_DEFAULT);
$sql="UPDATE `quanlykhachhang` SET `ten_kh`='$fullname',`tendangnhap`='$email',`matkhau`='$password',`ngaysinh`='$birthday',`gioitinh`='$gender',`diachi`='$address',`sodienthoai`='$numberphone',`thetindung`='$credit',`theghino`='$debitcard',`taikhoannganhang`='$bank' WHERE `ma_kh`='$id'";
}
?>