<?php
session_start();
$user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Thông tin khách hàng</title>
</head>
<body>
    <h2>Thông tin khách hàng</h2>
    <p>Tên: <?php echo $user['ten_kh']; ?></p>
    <p>Tên đăng nhập: <?php echo $user['tendangnhap']; ?></p>
    <p>Ngày sinh: <?php echo $user['ngaysinh']; ?></p>
    <p>Giới tính: <?php echo $user['gioitinh']; ?></p>
    <p>Địa chỉ: <?php echo $user['diachi']; ?></p>
    <p>Số điện thoại: <?php echo $user['sodienthoai']; ?></p>
    <p>Thẻ tín dụng: <?php echo $user['thetindung']; ?></p>
    <p>Thẻ ghi nợ: <?php echo $user['theghino']; ?></p>
    <p>Tài khoản ngân hàng: <?php echo $user['taikhoannganhang']; ?></p>
    <a href="edit_profile.php">Chỉnh sửa thông tin</a>
</body>
</html>
