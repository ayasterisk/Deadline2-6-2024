<?php
session_start();
ob_start();
include "Module/Header.php";
?>
<?php
include "connect.php";


if(isset($_POST['email']))
{
$email=$_POST['tendangnhap'];
$password=$_POST['matkhau'];

$sql="SELECT * FROM quanlykhachhang WHERE tendangnhap='$email'";
$query= mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($query);
$checkemail= mysqli_num_rows($query);
if($checkemail ==1){
	$checkpass=password_verify($password, $data['matkhau']);
	if($checkpass){
		$_SESSION['user'] = $data;
		header('location: index.php');
	}
    else echo "Sai mật khẩu!";
}
else echo "email không tồn tại";
}

?>


<!DOCTYPE html>
<html>
    <head>
       <title></title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    </head>
    <body>
        <div class="container">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="preload stylesheet" href="style-themes.css" as="style">
		<title>
			Tài khoản 
		</title>
		<link rel="canonical" href="dangnhap.php">
		<link rel="alternate" href="dangnhap.php" hreflang="vi-vn">	
		<meta name="keywords" content="future furniture">
    <style>
	 :root {
		--shop-color-hover: #c31425; 
		--shop-color-button: #c31425;	    
	 } 
    </style>

			<meta property="og:type" content="website">
			<main class="wrapperMain_content">	<div class="layout-account">
	<div class="containers">
		<div class="wrapbox-content-account">
			<div id="customer-login" class="customers_accountForm customer_login">
				<div class="tab-form-account d-flex align-items-center justify-content-center">
					<h4 class="active">
						<a href="dangnhap.php">Đăng nhập</a>
					</h4>
					<h4>
						<a href="dangky.php">Đăng ký</a>
					</h4>
				</div>
				<div id="login">
					<div class="accounttype">
						<h2 class="title"></h2>
					</div>
                </div>
				<form accept-charset="UTF-8" action="" id="customer_login" method="post">

				
					<div class="clearfix large_form">
						<label for="email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
						<input required="" type="email" value="" name="email" id="email" placeholder="Vui lòng nhập email của bạn" class="text">
					</div>
					
					<div class="clearfix large_form large_form-mrb">
						<label for="password" class="icon-field"><i class="icon-login icon-shield"></i></label>
						<input required="" type="password" value="" name="matkhau" id="password" placeholder="Vui lòng nhập mật khẩu" class="text" size="16">      
					</div>
					<div class="clearfix large_form sitebox-recaptcha ">
						This site is protected by reCAPTCHA and the Google
						<a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a> 
						and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
					</div>	
					<div class="clearfix custommer_account_action">
						<div class="action_bottom button">
							<input class="btn btn-signin" type="submit" value="Đăng nhập">
						</div>
						<div class="req_pass">
							<p>Bạn chưa có tài khoản?<a href="dangky.php" onclick="showRecoverPasswordForm();return false;" title="Đăng ký"> Đăng ký</a></p>
							<p>Bạn quên mật khẩu?<a href="trang đăng nhập.html" title="Quên mật khẩu"> Quên mật khẩu?</a></p>
						</div>			
					</div>  
	            </form>
			</div>
		</div>
	</div>					        
 </body>

</html>
<?php
include "Module/Footer.php";
?>