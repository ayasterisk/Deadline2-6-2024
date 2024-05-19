<?php
include "Module/Header.php";
?>

<!DOCTYPE html>
<html>
    <head>
       <title></title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

	<body>
        
		<div class="container">
		  <link rel="preload stylesheet" href="style-themes.css" as="style">
		  <meta property="og:type" content="website">
		  <style>
			:root {
			  --shop-color-hover: #c31425; 
			  --shop-color-button: #c31425;
			} 
            
 		  </style>

		  <main class="wrapperMain_content">	<div class="layout-account">
			<div class="container">
			  <div class="wrapbox-content-account">
				<div class="userbox customers_accountForm">
				  <div class="tab-form-account d-flex align-items-center justify-content-center">
					<h4>
					  <a href="dangnhap.php">Đăng nhập</a>
					</h4>
					<h4 class="active">
					  <a href="dangky.php">Đăng ký</a>
					</h4>
				  </div>
			<form accept-charset="UTF-8" action="index.php?act=login" id="create_customer" method="post">
                <input name="form_type" type="hidden" value="create_customer">
                <input name="utf8" type="hidden" value="✓">

				<div id="field-fullname" class="clearfix large_form">
					<label for="full_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="customer[full_name]" placeholder="Họ và Tên" id="full_name" class="text" size="30">
				</div>
				<div id="field-gender" class="clearfix large_form">
					<input id="radio1" type="radio" value="0" name="customer[gender]"> 
					<label for="radio1">Nữ</label>
					<input id="radio2" type="radio" value="1" name="customer[gender]"> 
					<label for="radio2">Nam</label>
				</div>
				<div id="field-birthday" class="clearfix large_form">
					<label for="birthday" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
					<input type="text" value="" placeholder="mm/dd/yyyy" name="customer[birthday]" id="birthday" class="text" size="30">
				</div>
				<div id="field-email" class="clearfix large_form">
					<label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
					<input required="" type="email" value="" placeholder="Email" name="customer[email]" id="email" class="text" size="30">
				</div>
				<div id="field-password" class="clearfix large_form large_form-mrb">
					<label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
					<input required="" type="password" value="" placeholder="Mật khẩu" name="customer[password]" id="password" class="password text" size="30">
				</div>
				<div id="field-confirmPassword" class="clearfix large_form large_form-mrb">
					<label for="confirmPassword" class="label icon-field"><i class="icon-login icon-shield "></i></label>
					<input required="" type="password" value="" placeholder="Nhập lại mật khẩu" name="customer[confirmpassword]" id="confirmPassword" class="password text" size="30">
				  </div>
				  <span id="error">Mật khẩu không khớp!</span>
				  <div id="field-address" class="clearfix large_form">
					<label for="address" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" placeholder="Địa chỉ" name="customer[address]" id="address" class="text" size="30">
				</div>
				<div id="field-numberphone" class="clearfix large_form">
					<label for="numberphone" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="customer[numberphone]" placeholder="Số điện thoại" id="numberphone" class="text" size="30">
				</div> 
				<div id="field-bank" class="clearfix large_form">
					<label for="bank" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="customer[bank]" placeholder="Tài khoản ngân hàng (Tên ngân hàng-số tài khoản)" id="bank" class="text" size="30">
				</div>
				<div id="field-debit card" class="clearfix large_form">
					<label for="debit card" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="customer[debit card]" placeholder="Thẻ ghi nợ (Tên ngân hàng-số tài khoản)" id="debit card" class="text" size="30">
				</div>
				<div id="field-credit" class="clearfix large_form">
					<label for="credit" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="customer[credit]" placeholder="Thẻ tín dụng (Tên ngân hàng-số tài khoản)" id="credit" class="text" size="30">
				</div>
				
 
				<div class="clearfix large_form sitebox-recaptcha ">
					This site is protected by reCAPTCHA and the Google
					<a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a> 
					and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
				</div>	
				<div class="clearfix custommer_account_action">
					<div class="action_bottom button dark">
						<input class="btn" type="submit" value="Đăng ký"name="btn-req">			
					</div>		
					<div class="req_pass">Bạn đã có tài khoản? <a href="dangnhap.php">Đăng nhập ngay</a></div>
				</div>
			</form>
			<script>
				// JavaScript để kiểm tra mật khẩu
				const passwordInput = document.getElementById('password');
				const rePasswordInput = document.getElementById('confirmPassword');
				const errorSpan = document.getElementById('error');
		  
				passwordInput.addEventListener('input', function() {
				  checkPassword();
				});
		  
				rePasswordInput.addEventListener('input', function() {
				  checkPassword();
				});
		  
				function checkPassword() {
				  const password = passwordInput.value;
				  const rePassword = rePasswordInput.value;
		  
				  if (password !== rePassword) {
					errorSpan.style.display = 'block';
				  } else {
					errorSpan.style.display = 'none';
				  }
				}
									  </script>

			</div>
		</div>
	</div>
</div>		</main>
</body>
</html>