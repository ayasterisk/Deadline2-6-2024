<?php
session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quequan = $_POST["Quequan"];
    $gioitinh = $_POST["Gioitinh"];
    $hoten = $_POST["Hoten"];
    $sodienthoai = $_POST["Sodienthoai"];
    $tendangnhap = isset($_SESSION['username']) ? $_SESSION['username'] : '';


    // Câu lệnh SQL để cập nhật thông tin khách hàng
    $sql = "UPDATE quanlykhachhangfff SET diachi = '$quequan' , ten_kh ='$hoten', gioitinh ='$gioitinh', sodienthoai ='$sodienthoai'
    WHERE tendangnhap = '$tendangnhap'"; // 

    // Thực thi câu lệnh SQL
    if ($conn->query($sql) === TRUE) {
        echo "Dữ liệu đã được cập nhật thành công";
    } else {
        echo "Lỗi khi cập nhật dữ liệu: " . $conn->error;
    }
}
// Đóng kết nối
$conn->close();
// Chuyển hướng người dùng trở lại trang hồ sơ
header("Location: Hoso.php");
exit();
?>
