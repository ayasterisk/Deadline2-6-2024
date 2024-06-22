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
//echo $id;
//echo $fullname,$gender,$birthday,$email,$password,$address,$numberphone,$bank,$debitcard,$credit;
$sql = "SELECT * FROM quanlykhachhang WHERE tendangnhap='$email'";

$hash_password= password_hash($password,PASSWORD_DEFAULT); 
$sql = "UPDATE quanlykhachhang SET ten_kh='$fullname', matkhau='$hash_password', ngaysinh='$birthday', gioitinh='$gender', diachi='$address', sodienthoai='$numberphone', thetindung='$credit', theghino='$debitcard', taikhoannganhang='$bank' WHERE ma_kh ='$id'";


if ($conn->query(($sql)) === TRUE) {
    echo "Đã cập nhật";
} else {
    echo "Error updating record: " . $conn->error;
}}
?>

<a href="index.php">Quay lại trang chủ</a>