<?php
// Thông tin kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost"; // Tên máy chủ MySQL (thường là localhost)
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu MySQL
$database = "quanlynoithat"; // Tên cơ sở dữ liệu

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>