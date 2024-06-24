<?php
//session_start();
//$user = $_SESSION['user'];
include "./Layout/Header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thông tin khách hàng</title>
    <link rel="stylesheet" href="vendors/styles.css">
    <style>
        
        .wrapper{
            height: 900px;
            max-width: 1420px;
            margin: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

 
    <div class="wrapper">
        <h2>Thông tin khách hàng</h2>
        <table>
        <thead>
         <tr>
                  
        <th>Tên: <?php echo $user['ten_kh']; ?></th>
        <th>Tên đăng nhập: <?php echo $user['tendangnhap']; ?></th>
        <th>Ngày sinh: <?php echo $user['ngaysinh']; ?></th>
        <th>Giới tính: <?php echo $user['gioitinh']; ?></th>
        <th>Địa chỉ: <?php echo $user['diachi']; ?></th>
        <th>Số điện thoại: <?php echo $user['sodienthoai']; ?></th>
        <th>Thẻ tín dụng: <?php echo $user['thetindung']; ?></th>
        <th>Thẻ ghi nợ: <?php echo $user['theghino']; ?></th>
        <th>Tài khoản ngân hàng: <?php echo $user['taikhoannganhang']; ?></th>
        <a href="edit_profile.php">Chỉnh sửa thông tin</a>
         
        </tr>
        </thead>
        </table>
    </div>
</body>
</html>
<?php
include "Layout/Footer.php";
?>
