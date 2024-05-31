
<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa thông tin</title>
</head>
<body>
    <h2>Chỉnh sửa thông tin</h2>
	<form method="post" action="reg2.php">
				<div id="field-fullname" class="clearfix large_form">
					<label for="full_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="ten_kh" placeholder="Họ và Tên" id="fullname" class="text" size="30">
				</div>
				<div id="field-gender" class="clearfix large_form">
					<input id="radio1" type="radio" value="0" name="gioitinh"> 
					<label for="radio1">Nữ</label>
					<input id="radio2" type="radio" value="1" name="gioitinh"> 
					<label for="radio2">Nam</label>
				</div>
				<div id="field-birthday" class="clearfix large_form">
					<label for="birthday" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
					<input required="" type="text" value="" placeholder="mm/dd/yyyy" name="ngaysinh" id="birthday" class="text" size="30">
				</div>
				<div id="field-email" class="clearfix large_form">
					<label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
					<input required="" type="email" value="" placeholder="Email" name="email" id="email" class="text" size="30">
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
					<input required="" type="text" value="" placeholder="Địa chỉ" name="diachi" id="address" class="text" size="30">
				</div>
				<div id="field-numberphone" class="clearfix large_form">
					<label for="numberphone" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input required="" type="text" value="" name="sodienthoai" placeholder="Số điện thoại" id="numberphone" class="text" size="30">
				</div> 
				<div id="field-bank" class="clearfix large_form">
					<label for="bank" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input type="text" value="" name="taikhoannganhang" placeholder="Tài khoản ngân hàng (Tên ngân hàng-số tài khoản)" id="bank" class="text" size="30">
				</div>
				<div id="field-debit card" class="clearfix large_form">
					<label for="debit card" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input type="text" value="" name="theghino" placeholder="Thẻ ghi nợ (Tên ngân hàng-số tài khoản)" id="debit card" class="text" size="30">
				</div>
				<div id="field-credit" class="clearfix large_form">
					<label for="credit" class="label icon-field"><i class="icon-login icon-user "></i></label>
					<input type="text" value="" name="thetindung" placeholder="Thẻ tín dụng (Tên ngân hàng-số tài khoản)" id="credit" class="text" size="30">
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
</body>








<br>
<a href="index.php">Quay lại trang chủ</a>