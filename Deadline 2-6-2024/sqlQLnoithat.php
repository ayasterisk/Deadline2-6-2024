<?php
require('connect.php');
$database = "CREATE DATABASE IF NOT EXISTS $database CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $database);
$quanlybackhachhang = "CREATE TABLE quanlibackhachhang(
    ma_kh VARCHAR(30) PRIMARY KEY UNIQUE NOT NULL,
    sosanphamdamua int NOT NULL,
    tongsotientra int NOT NULL,
    bac NVARCHAR(20) NULL
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $quanlybackhachhang);
$quanlysanpham = "CREATE TABLE quanlysanpham(
    ma_sp varchar(30) PRIMARY KEY UNIQUE not null,
    tonkho int not null
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn,$quanlysanpham);
$chitietdonhang = "CREATE TABLE chitietdonhang(
    ma_dh varchar(30) UNIQUE NOT NULL,
    ma_voucher varchar(30) UNIQUE not null,
    ma_sp varchar(30) UNIQUE not null ,
    primary key(ma_dh,ma_voucher,ma_sp),
    so_luong int not null
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $chitietdonhang);

$voucherkhachhang = "CREATE TABLE voucherkhachhang(
    ma_kh varchar (30) not null UNIQUE,
    ma_voucher varchar(30) not null UNIQUE,
    soluong int not null default '0',
    PRIMARY KEY(ma_kh,ma_voucher)
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $voucherkhachhang);

$sanphambanchay = "CREATE TABLE sanphambanchay(
    ma_sp varchar(30) UNIQUE not null,
    ma_danhmuc varchar(30) UNIQUE not null,
    primary key (ma_sp,ma_danhmuc),
    soluongbanra int default '0' null
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $sanphambanchay);
#ĐÃ KHÓA NGOẠI
$danhmucsanpham = "CREATE TABLE danhmucsanpham(
    ma_danhmuc varchar(30) primary key UNIQUE not null,
    FOREIGN KEY (ma_danhmuc) REFERENCES sanphambanchay(ma_danhmuc),
    tendanhmuc VARCHAR(50) not null
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $danhmucsanpham);
#ĐÃ KHÓA NGOẠI
$quanlybanhang = "CREATE TABLE quanlybanhang(
    ma_dh varchar(30)  not null ,
    FOREIGN KEY (ma_dh) REFERENCES chitietdonhang(ma_dh),
    ma_kh varchar(30) unique not null,
    primary key (ma_dh,ma_kh),
    thoidiemmuahang datetime not null ,
    diachigiaohang varchar(255) not null,
    trangthai boolean null default '0',
    ghichukhachhang varchar(255) null,
    tonggiatridonhang int not null
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $quanlybanhang);
#ĐA KHÓA NGOẠI
$quanlyvoucher = "CREATE TABLE quanlyvoucher(
    ma_voucher varchar(30) not null primary key unique,
    FOREIGN KEY (ma_voucher) REFERENCES chitietdonhang(ma_voucher),
    FOREIGN KEY (ma_voucher) REFERENCES voucherkhachhang(ma_voucher),
    tenvoucher nvarchar(150) not null
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $quanlyvoucher);
#ĐÃ KHÓA NGOẠI
$chitietsanpham = "CREATE TABLE chitietsanpham(
    ma_sp varchar(30) PRIMARY KEY unique not null,
    FOREIGN KEY (ma_sp) REFERENCES sanphambanchay(ma_sp),
    FOREIGN KEY (ma_sp) REFERENCES chitietdonhang(ma_sp),
    FOREIGN KEY (ma_sp) REFERENCES quanlysanpham(ma_sp),
    tensp varchar(255) not null,
    loaisp varchar(30) not null,
    ma_danhmuc varchar(30) not null,
    tenhang  nvarchar(50) not null,
    kichthuoc varchar (100) not null,
    mausac nvarchar(30) null,
    linkanhchitiet varchar(255) not null,
    gia int not null,
    giakhuyenmai int null
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ";
mysqli_query($conn, $chitietsanpham);
#ĐÃ KHÓA NGOẠI
$quanlykhachhang = "CREATE TABLE quanlykhachhang(
    ma_kh varchar(30) primary key unique not null,
    FOREIGN KEY (ma_kh) REFERENCES voucherkhachhang(ma_kh),
    FOREIGN key (ma_kh) REFERENCES quanlybanhang(ma_kh),
    FOREIGN KEY (ma_kh) REFERENCES quanlibackhachhang(ma_kh),
    tenkhaachhang nvarchar(100) not null,
    tendangnhap nvarchar(255) unique not null,
    matkhau nvarchar(255) not null,
    ngaysinh datetime not null,
    gioitinh boolean not null,
    diachi nvarchar(255) not null,
    sodienthoai varchar(20) not null,
    thetindung varchar(50) null,
    theghino varchar(50) null,
    taikhoannganhang varchar(50) null,
    ngaydangkythanhvien datetime not null,
    magioithieu varchar(30) null
  )CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $quanlykhachhang);
?>