<?php
ob_start();
include "../Layout/Header.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../vendors/styles.css">
    <link rel="stylesheet" href="Ho_so.css" />
   <title> Hồ sơ khách hàng</title>
   <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
        
        <div id ="container">
            <div class = "Edit" ><a href="suahoso.php"><i class="fa fa-user" aria-hidden="true"></i>Sửa thông tin tài khoản</a></div>
            <p id="title">
                Thông tin tài khoản
            </p>
            <div class="container_content">
                <div class="container_content_left">
                    <ul>
                        <li>Mã giới thiệu: </li>
                        <li>Tên tài khoản: </li>
                        <li>Tên đăng nhập: </li>
                        <li>Số điện thoại: </li>
                        <li>Giới tính: </li>
                        <li>Địa chỉ: </li>
                        <li>Ngày tạo tài khoản: </li>
                        <li>Ngày đăng nhập gần nhất: </li>
                    </ul>
                </div>
                <div class="container_content_right">
                    <ul>
                    <li><?php echo ($_SESSION['I-ID']); ?></li>
                    <li><?php echo ($_SESSION['fullname']); ?></li>
                    <li><?php echo ($_SESSION['username']); ?></li>
                    <li><?php echo ($_SESSION['phone']); ?></li>
                    <li><?php
                            $gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';
                            $text = '';
                            if ($gender === '001') {
                            $text = 'Nam';
                            } else if ($gender === '002') {
                            $text = 'Nữ';
                            } else {
                            $text = 'Không xác định';
                            }
                            echo $text; ?></li>
                    <li><?php echo ($_SESSION['address']); ?></li>
                    <li><?php echo ($_SESSION['account_creation_date']); ?></li>
                    <li><?php echo ($_SESSION['last_login_date']); ?></li>
                    </ul>
                </div>
            </div>

        </div>
        <?php include "../Layout/Footer.php" ?>
</body>
</html>
