<?php
include "Layout/Header.php";
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
		  <link rel="preload stylesheet" href="style-themes.css" as="style">
		  <link rel="stylesheet" href="vendors/styles.css">
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
					<h4>Chỉnh sửa thông tin</h4>
					</div>
			<form accept-charset="UTF-8" action="reg2.php" id="create_customer" method="post">
                <input name="form_type" type="hidden" value="create_customer">
                <input name="utf8" type="hidden" value="✓">

				<div id="field-fullname" class="clearfix large_form">
					<label for="full_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="ten_kh" placeholder="<?php echo $user['ten_kh']; ?>" id="fullname" class="text" size="30">
				</div>
				<div id="field-gender" class="clearfix large_form">
					<input id="radio1" type="radio" value="0" name="gioitinh"> 
					<label for="radio1">Nữ</label>
					<input id="radio2" type="radio" value="1" name="gioitinh"> 
					<label for="radio2">Nam</label>
				</div>
				<div id="field-birthday" class="clearfix large_form">
					<label for="birthday" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
					<input required="" type="text" value="" placeholder="<?php echo $user['ngaysinh']; ?>" name="ngaysinh" id="birthday" class="text" size="30">
				</div>
				<div id="field-email" class="clearfix large_form">
					<label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
					<input required="" type="email" value="" placeholder="<?php echo $user['tendangnhap']; ?>" name="email" id="email" class="text" size="30">
				</div>
				<div id="field-password" class="clearfix large_form large_form-mrb">
					<label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
					<input required="" type="password" value="" placeholder="Mật khẩu" name="matkhau" id="password" class="password text" size="30">
				</div>
				<div id="field-confirmPassword" class="clearfix large_form large_form-mrb">
					<label for="confirmPassword" class="label icon-field"><i class="icon-login icon-shield "></i></label>
					<input required="" type="password" value="" placeholder="Nhập lại mật khẩu" name="confirmpassword" id="confirmPassword" class="password text" size="30">
				  </div>
				  <span id="error">Mật khẩu không khớp!</span>
				  <div id="field-address" class="clearfix large_form">
					<label for="address" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" placeholder="<?php echo $user['diachi']; ?>" name="diachi" id="address" class="text" size="30">
				</div>
				<div id="field-numberphone" class="clearfix large_form">
					<label for="numberphone" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="sodienthoai" placeholder="<?php echo $user['sodienthoai']; ?>" id="numberphone" class="text" size="30">
				</div> 
				<div id="field-bank" class="clearfix large_form">
					<label for="bank" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input type="text" value="" name="taikhoannganhang" placeholder="Tài khoản ngân hàng:<?php echo $user['taikhoannganhang']; ?>" id="bank" class="text" size="30">
				</div>
				<div id="field-debit card" class="clearfix large_form">
					<label for="debit card" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input type="text" value="" name="theghino" placeholder="Thẻ ghi nợ:<?php echo $user['theghino']; ?>" id="debit card" class="text" size="30">
				</div>
				<div id="field-credit" class="clearfix large_form">
					<label for="credit" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input type="text" value="" name="thetindung" placeholder="Thẻ tín dụng:<?php echo $user['thetindung']; ?>" id="credit" class="text" size="30">
				</div>
				
				
				
 
		         <div class="clearfix custommer_account_action">
					<div class="action_bottom button dark">
						<input class="btn" type="submit" value="Hoàn tất"name="btn-req">			
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


<?php
include "Layout/Footer.php";
?>