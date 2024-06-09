-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 31, 2024 lúc 10:20 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlinoithatfff`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_dh` int(11) NOT NULL,
  `ma_sp` varchar(25) NOT NULL,
  `ma_voucher` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ma_dh`, `ma_sp`, `ma_voucher`, `so_luong`) VALUES
(1, 'D0W1001', 2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `ID` int(11) NOT NULL,
  `ma_sp` varchar(25) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `loaisp` varchar(30) NOT NULL,
  `ma_danhmuc` varchar(30) NOT NULL,
  `tenhang` varchar(30) NOT NULL,
  `kichthuoc` varchar(100) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `linkanhchitiet` varchar(255) NOT NULL,
  `gia` double NOT NULL,
  `giakhuyenmai` double NOT NULL,
  `ten_fileanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`ID`, `ma_sp`, `ten_sp`, `loaisp`, `ma_danhmuc`, `tenhang`, `kichthuoc`, `mausac`, `linkanhchitiet`, `gia`, `giakhuyenmai`, `ten_fileanh`) VALUES
(1, 'D0W1001', 'Đèn bàn Gianfranco Gunmetal', 'Đèn', 'BEDS', 'Calligaris', '170x410x630', 'Trắng', 'https://nhaxinh.com/wp-content/uploads/2023/04/DEN-BAN-GIANFRANCO-GUNMETAL-116914E-600x400.jpg', 32880000, 0, 'DEN-BAN-GIANFRANCO-GUNMETAL-116914E-600x400.jpg'),
(2, 'S0B1001', 'Ghế sofa gỗ cao cấp hiện đại Ghế đôi sofa 115cm ti', 'Sofa', 'SOFA', 'Prohome', '115x61', 'Xanh', 'https://down-vn.img.susercontent.com/file/cfcaf591fc6de9ef6e6be3adde6e9e9c', 1950000, 1543000, 'cfcaf591fc6de9ef6e6be3adde6e9e9c.jpg'),
(3, 'G0B2001', 'Giường Ngủ Gỗ Tràm MOHO VLINE 601', 'Giường', 'BEDS', 'Moho', '212x196x92', 'Gỗ Nâu', 'https://product.hstatic.net/200000065946/product/pro_nau_noi_that_moho_giuong_ngu_go_tram_vline_1m8_1_5211e7d2a3da44f58070de291c446400_master.jpg', 10990000, 7990000, 'pro_nau_noi_that_moho_giuong_ngu_go_tram_vline_1m8_1_5211e7d2a3da44f58070de291c446400_master.jpg'),
(4, 'S0B2002', 'Ghế Sofa Gỗ Tràm Tự Nhiên MOHO VLINE 601', 'Sofa', 'SOFA', 'Moho', '180x85x69', 'Gỗ Nâu', 'https://product.hstatic.net/200000065946/product/pro_nau_noi_that_moho_ghe_sofa_go_vline_dem_be_1_810c604bcf444eb095ef1546816221bc_master.jpg', 11490000, 7990000, 'pro_nau_noi_that_moho_ghe_sofa_go_vline_dem_be_1_810c604bcf444eb095ef1546816221bc_master.jpg'),
(5, 'T0W1001', 'Bồn Cầu Kim Cương 1 Khối Cao Cấp TATA BC6806', 'Bồn cầu', 'BATH', 'TATA', '55mm ổng thải(?)', 'Trắng', 'https://thietbivesinhtata.com.vn/wp-content/uploads/2023/04/5_BC6801.jpeg', 4700000, 2350000, '5_BC6801.jpg'),
(6, 'T1W1001', 'Thảm Cotton Vie Recycl 160X230 TAP37JB.I', 'Thảm', 'LIVS', 'Vie Recycl', '160X230', 'Trắng', 'https://nhaxinh.com/wp-content/uploads/2024/03/tham-cotton-vie-recycl-160x230-tap37jb.i-600x400.jpg', 7750000, 6200000, 'tham-cotton-vie-recycl-160x230-tap37jb.i-600x400.jpg'),
(7, 'S0V1003', 'Sofa Coastal góc phải vải vàng', 'Sofa', 'SOFA', 'Coastal', 'D2900 - R850/1650 - C420/720 mm', 'Vanilla', 'https://nhaxinh.com/wp-content/uploads/2023/07/Sofa-Coastal-GP-vai-vang-rs-3-600x400.jpg', 44900000, 38165000, 'Sofa-Coastal-GP-vai-vang-rs-3-600x400.jpg'),
(8, 'S0G1004', 'Sofa Rumba vải VACT11303', 'Sofa', 'SOFA', 'Rumba', 'D2000/1400 - R810 - C750 mm', 'Xám', 'https://nhaxinh.com/wp-content/uploads/2024/01/Sofa-Rumba-vai-VACT11303-600x400.jpg', 19900000, 15920000, 'Sofa-Rumba-vai-VACT11303-600x400.jpg'),
(9, 'B0B3001', 'Bàn làm việc Fence', 'Bàn', 'LIVS', 'Fence', 'D1280 - R295 - C700 mm', 'Đen', 'https://nhaxinh.com/wp-content/uploads/2023/08/Ban-lam-viec-Fence-129-70-30-600x400.jpg', 30900000, 26265000, 'Ban-lam-viec-Fence-129-70-30-600x400.jpg'),
(10, 'G0G1002', 'Giường hộc kéo Penny 1m8', 'Giường', 'BEDS', 'Penny', 'D2000 - R1800 - C1110', 'Xám', 'https://nhaxinh.com/wp-content/uploads/2021/10/3_90508_1-4-600x401.jpg', 15620000, 13277000, '3_90508_1-4-600x401.jpg'),
(11, 'G1B3001', 'Ghế bar Jenny – 96364J', 'Ghế', 'KITS', 'Jenny', 'D470- C860 mm', 'Đen', 'https://nhaxinh.com/wp-content/uploads/2021/10/ghe-bar-3-101653-600x400.jpg', 9720000, 7776000, 'ghe-bar-3-101653-600x400.jpg'),
(12, 'G1G1002', 'Ghế thư giãn điện Lazboy da Cloud', 'Ghế', 'LIVS', 'Lazboy', 'D980 - R815 - C1070 mm', 'Xám', 'https://nhaxinh.com/wp-content/uploads/2023/05/ghe-thu-gian-dien-LAZBOY-1PT559-EDEN-SL-da-CLOUD-600x400.jpg', 46740000, 37392000, 'ghe-thu-gian-dien-LAZBOY-1PT559-EDEN-SL-da-CLOUD-600x400.jpg'),
(13, 'T0B2001', 'Tủ Ly Jazz', 'Tủ', 'KITS', 'Jazz', 'D1600 - R450 - C810mm', 'Gỗ Nâu', 'https://nhaxinh.com/wp-content/uploads/2021/10/1000-san-pham-nha-xinh58-600x400.jpg', 25400001, 20320000, '1000-san-pham-nha-xinh58-600x400.jpg'),
(14, 'B0P1002', 'Bàn phấn Mirror Curve Art 84839K', 'Bàn', 'BEDS', 'Kare Design', '153 x 70 x 32', 'Mạ Gold', 'https://pictures.kare-design.com/8/KARE-84839-master-mood-a-700x700.jpg', 19540000, 15632000, 'KARE-84839-master-mood-a-700x700.jpg'),
(15, 'B0B2003', 'Bàn nước Dura', 'Bàn', 'LIVS', 'Dura', 'D1100 - R620 - C370 mm', 'Gỗ Nâu', 'https://nhaxinh.com/wp-content/uploads/2023/10/ban-nuoc-dura-600x400.jpg', 14900001, 11920001, 'ban-nuoc-dura-600x400.jpg'),
(16, 'T0O1002', 'Kệ tivi treo tường 210x24cm', 'Kệ', 'LIVS', 'Jazz', '210x24x16cm', 'Nâu Lan', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/94/ke-treo-tuong-go-cao-su-10.jpg', 3200000, 2880000, 'ke-treo-tuong-go-cao-su-10.jpg'),
(17, 'T0W1003', 'Tủ đầu giường thông minh mặt kính cảm ứng đèn led ', 'Tủ', 'BEDS', 'Nội thất kim cương', '50x40', 'Trắng', 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lq8y78kcd70yad', 1720000, 0, 'vn-11134207-7r98o-lq8y78kcd70yad.jpg'),
(18, 'S0B4005', 'Sofa. da. băng 1. Chocolate. Elegance', 'Sofa', 'SOFA', 'Ashley', '939.8mm W x 939.8mm D x 1041.4mm H', 'Nâu Đen', 'https://product.hstatic.net/1000406288/product/upload_610cb93bd17a44769b7b6783a893c3c4_master.jpg', 38500000, 0, 'upload_610cb93bd17a44769b7b6783a893c3c4_master.jpg'),
(19, 'F0V2001', 'Bình GEMSTONE', 'Bình', 'DECO', 'Baker', '', 'Tím', 'https://product.hstatic.net/1000406288/product/babb534_1_f3a5310e3392411bb51c81bc0cb63253_master.jpg', 101200000, 0, 'babb534_1_f3a5310e3392411bb51c81bc0cb63253_master.jpg'),
(20, 'G1W1003', 'Armchair Hung King', 'Ghế', 'LIVS', 'Hung King', 'D700 - R745 - C755 mm', 'Trắng', 'https://nhaxinh.com/wp-content/uploads/2024/03/armchair-hung-king-600x400.jpg', 12900000, 10965000, 'armchair-hung-king-600x400.jpg'),
(21, 'B0B2004', 'Bàn ăn 8 chỗ Coastal', 'Bàn', 'KITS', 'Coastal', 'D2000 - R1000 - C750 mm', 'Gỗ Ash', 'https://nhaxinh.com/wp-content/uploads/2023/07/Ban-an-8-cho-Coastal-1-600x400.jpg', 14500000, 11600000, 'Ban-an-8-cho-Coastal-1-600x400.jpg'),
(22, 'B0V1005', 'Bench Paco mustard 150cm 86074K', 'Ghế', 'LIVS', 'Paco', 'D1500 - R400 - C400 mm', 'Vanilla', 'https://nhaxinh.com/wp-content/uploads/2023/02/BENCH-PACO-MUSTARD-150CM-86074K-600x400.jpg', 12320000, 9856000, 'BENCH-PACO-MUSTARD-150CM-86074K-600x400.jpg'),
(23, 'B0B2006', 'Bàn đầu giường Coastal', 'Bàn', 'BEDS', 'Coastal', 'D580 - R430 - C555 mm', 'Gỗ Ash', 'https://nhaxinh.com/wp-content/uploads/2023/07/Ban-dau-giuong-Coastal-600x400.jpg', 6900000, 5865000, 'Ban-dau-giuong-Coastal-600x400.jpg'),
(24, 'T0W1004', 'Tủ kệ góc tường gỗ cao su', 'Tủ', 'BEDS', 'HomeOff', '70x70x140cm', 'Sồi Trắng', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/67/ke-tu-dat-goc-tuong-chan-sat-1.jpg', 4250000, 3825000, 'ke-tu-dat-goc-tuong-chan-sat-1.jpg'),
(25, 'D0W1002', 'Đèn bàn DIAMOND', 'Đèn', 'BEDS', 'Baker', '', 'Trắng', 'https://product.hstatic.net/1000406288/product/baph163_1_f9f65edb7b58436f8af2e740446ce7c8_master.jpg', 173250000, 0, 'baph163_1_f9f65edb7b58436f8af2e740446ce7c8_master.jpg'),
(26, 'G0B2003', 'Giường TELEMANN', 'Giường', 'BEDS', 'IQ BED', '180x200cm', 'Nâu', 'https://product.hstatic.net/1000406288/product/telemann_brown_1000__2__2722a296f1264e618d0a5c1ac037ebdb_master.jpg', 105500000, 0, 'telemann_brown_1000__2__2722a296f1264e618d0a5c1ac037ebdb_master.jpg'),
(27, 'G0GS004', 'Bộ giường Tròn COLOSSEUM', 'Giường', 'BEDS', 'IQ BED', '200x22cm', 'Xám bạc', 'https://product.hstatic.net/1000406288/product/colosseum_silver_cloud_2_6a0df57326c64e799c68c2c7de257dec_master.jpg', 145500000, 0, 'colosseum_silver_cloud_2_6a0df57326c64e799c68c2c7de257dec_master.jpg'),
(28, 'F0TT002', 'Ly champagne thủy tinh - 9.75\"H. 6 Oz- Wheat Colle', 'Ly', 'DECO', 'Michael Aram', '', 'Trong suốt', 'https://product.hstatic.net/1000406288/product/336182_2a8a59be3f484a3290f805a5146c144b_1024x1024.jpg', 1650000, 0, '336182_2a8a59be3f484a3290f805a5146c144b_1024x1024.jpg'),
(29, 'F0B3003', 'Tượng con ngựa đen với đế nhỏ', 'Tượng', 'DECO', 'AHURA', '34x20x42', 'Đen', 'https://product.hstatic.net/1000406288/product/upload_33d596d800f0440798340df8ada8320c_1024x1024.jpg', 21800000, 0, 'upload_33d596d800f0440798340df8ada8320c_1024x1024.jpg'),
(30, 'F0WG004', 'Tượng gốm chó Great Dane ngồi. màu trắng mạ', 'Tượng', 'DECO', 'AHURA', '29x20x46', 'Trắng Dát Vàng', 'https://product.hstatic.net/1000406288/product/upload_9c695bb3839e4e63aaeb72282e0aa1d8_1024x1024.jpg', 98500000, 0, 'upload_9c695bb3839e4e63aaeb72282e0aa1d8_1024x1024.jpg'),
(31, 'B0B1007', 'Bàn bên Endless Vegas màu xanh', 'Bàn', 'LIVS', 'Endless Vegas', 'D470 - R470 - C450 mm', 'Xanh', 'https://nhaxinh.com/wp-content/uploads/2023/11/ban-ben-endless-vegas-mau-xanh-600x400.jpg', 12200000, 10370000, 'ban-ben-endless-vegas-mau-xanh-600x400.jpg'),
(32, 'B0G2008', 'Bàn Console đồng hoa màu gold', 'Bàn', 'DECO', 'Glenn', 'C850 x 1000 x 250 mm', 'Gold', 'https://nhaxinh.com/wp-content/uploads/2023/04/CONSOLE-FLOWER-MEADOW-GOLD-85066K.jpg', 19630000, 16685500, 'CONSOLE-FLOWER-MEADOW-GOLD-85066K.jpg'),
(33, 'T0B2005', 'Tủ trang trí gỗ', 'Tủ', 'DECO', 'HomeOff', '120x40x90cm', 'Nâu', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/60/tu-trung-bay-go-tu-nhien-ktb68127-01.jpg', 4950000, 0, 'tu-trung-bay-go-tu-nhien-ktb68127-01.jpg'),
(34, 'T0W1006', 'Tủ giày kết hợp kệ trang trí gỗ', 'Tủ', 'DECO', 'HomeOff', '100x38x120cm', 'Sồi Trắng', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/61/tu-giay-go-tu-nhien-KG68064-01a.jpg', 4200000, 3780000, 'tu-giay-go-tu-nhien-KG68064-01a.jpg'),
(35, 'T0W1007', 'Tủ để giày gỗ cao su', 'Tủ', 'DECO', 'HomeOff', '60x40x100cm', 'Sồi Trắng', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/96/tu-giay-go-cao-su-2-cua-2-ngan-keo-1.jpg', 2950000, 0, 'tu-giay-go-cao-su-2-cua-2-ngan-keo-1.jpg'),
(36, 'K0W1001', 'Kệ sách đứng', 'Kệ', 'DECO', 'HomeOff', '110x26x110cm', 'Trắng', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/97/ke-sach-go-cao-su-1.JPG', 2580000, 2322000, 'ke-sach-go-cao-su-1.jpg'),
(37, 'K0W1002', 'Kệ sách 6 tầng', 'Kệ', 'LIVS', 'HomeOff', '80x25x170cm', 'Sồi Trắng', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/94/ke-sach-6-tang-go-cao-su-0.jpg', 2450000, 1960000, 'ke-sach-6-tang-go-cao-su-0.jpg'),
(38, 'A0B2001', 'Tủ âm Whitecalypso', 'Tủ', 'BEDS', 'Walnut Recon', 'D3480 - R600 - C2350', 'Gỗ Nâu', 'https://nhaxinh.com/wp-content/uploads/2021/10/tu_am_tuong_whitecalypso_l.jpg', 16950000, 0, 'tu_am_tuong_whitecalypso_l.jpg'),
(39, 'G1B3005', 'Ghế Xoay văn phòng Công Thái Học', 'Ghế', 'BEDS', 'Buni Funiture', '58x60x100', 'Đen', 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lmy1531c0jj321', 1100000, 599000, 'vn-11134207-7r98o-lmy1531c0jj321.jpg'),
(40, 'G1B2006', 'Ghế Ngồi Bệt Tựa Lưng', 'Ghế', 'LIVS', 'Decor', '43x54x40', 'Nâu', 'https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lkcrqgpo66qw44', 400000, 300000, 'vn-11134207-7qukw-lkcrqgpo66qw44.jpg'),
(41, 'G1B3007', 'Ghế thư giãn Daiki', 'Ghế', 'LIVS', 'Daiki', 'W500xD660xH1160-1245', 'Đen', 'https://www.homefurni.vn/data/upload/product/62cd30ff62081.jpg', 12870000, 10940000, '62cd30ff62081.jpg'),
(42, 'K0B3003', 'Giá để đồ phòng tắm khung sắt', 'Giá', 'BATH', 'HomeOff', '45x30x122cm', 'Đen', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/63/gia-treo-do-khung-sat-co-gio-de-do-ban-1.jpg', 1850000, 0, 'gia-treo-do-khung-sat-co-gio-de-do-ban-1.jpg'),
(43, 'K0W1004', 'Kệ để đồ phòng tắm', 'Kệ', 'BATH', 'HomeOff', '40x30x120cm', 'Trắng', 'https://homeoffice.com.vn/images/thumbnails/640/640/detailed/50/gia-treo-do-phong-tam-sat-son-tinh-dien-1.jpg', 2600000, 0, 'gia-treo-do-phong-tam-sat-son-tinh-dien-1.jpg'),
(44, 'S0B2006', 'GRACEFUL 3-MS - SOFA BĂNG 3', 'Sofa', 'SOFA', 'Manager-F', 'W1925xD820xH750', 'Nâu', 'https://manager-f.com/vnt_upload/product/01_2024/thumbs/1087_Graceful_3_2.jpg', 19610000, 0, '1087_Graceful_3_2.jpg'),
(45, 'B0B2009', 'Bàn học sinh thông minh LOL-1', 'Bàn', 'BEDS', 'HomeFuni', 'L1100xW650xH550-750', 'Gỗ Nâu', 'https://www.homefurni.vn/data/upload/product/5d48f3c18d6ed.jpg', 10880000, 6528000, '5d48f3c18d6ed.jpg'),
(46, 'K0B1005', 'Kệ trang trí BOOKWORM', 'Kệ', 'DECO', 'Kartell', '520x20x19', 'Xanh Cobalt', 'https://product.hstatic.net/1000406288/product/upload_680e58e111c54f55a30e323e2695a941_1024x1024.jpg', 24500000, 0, 'upload_680e58e111c54f55a30e323e2695a941_1024x1024.jpg'),
(47, 'F0FF005', 'Gương OXIDE', 'Gương', 'LIVS', 'Deknudt', '101x142x2cm', 'Gương', 'https://product.hstatic.net/1000406288/product/2754.201-5_47692e61b6254c9f8e95b95c1e6ae5d2_master.jpg', 39900000, 0, '2754.201-5_47692e61b6254c9f8e95b95c1e6ae5d2_master.jpg'),
(48, 'F0B3006', 'Đồng hồ treo tường BARCELONA', 'Đồng hồ', 'DECO', 'Nomon', '100cm', 'Đen', 'https://product.hstatic.net/1000406288/product/bar_2_4b248100af02491b9f1a13aad0618511_master.jpg', 36800000, 0, 'bar_2_4b248100af02491b9f1a13aad0618511_master.jpg'),
(49, 'T1B1002', 'Thảm salon Infinity 323514257', 'Thảm', 'LIVS', 'Phố xinh', '80x150', 'Xanh', 'https://product.hstatic.net/1000406288/product/upload_2a713a0297c54284a8e4a6b2fa3e74c0_1024x1024.jpg', 896000, 0, 'upload_2a713a0297c54284a8e4a6b2fa3e74c0_1024x1024.jpg'),
(50, 'G1GS008', 'Ghế xoay lưng thấp nệm bọc da HOGVP162', 'Ghế', 'LIVS', 'HomeOff', '40x40x79', 'Xám bạc', 'https://homeoffice.com.vn/images/detailed/99/ghe-xoay-van-phong-chan-sat-1.jpg', 820000, 738000, 'ghe-xoay-van-phong-chan-sat-1.jpg'),
(51, 'G1V1009', 'Ghế ăn bọc nệm Si chân sắt sỡn tĩnh điện GAK135', 'Ghế', 'KITS', 'HomeOff', '40x40x60', 'Vanilla', 'https://homeoffice.com.vn/images/detailed/99/ghe-an-boc-nem-chan-sat-cao-cap-11.jpg', 1650000, 0, 'ghe-an-boc-nem-chan-sat-cao-cap-11.jpg'),
(52, 'G0O1005', 'Giường tầng 140x200cm gỗ cao su khung sắt GT011', 'Giường', 'BEDS', 'HomeOff', '140x200', 'Nâu Lan', 'https://homeoffice.com.vn/images/detailed/35/giuong-tang-go-khung-sat-GT011-03.jpg', 11550000, 10972000, 'giuong-tang-go-khung-sat-GT011-03.jpg'),
(53, 'K0B2006', 'Kệ bếp đa năng 60x40x115cm gỗ cao su KB68048', 'Kệ', 'KITS', 'HomeOff', '60x40x115', 'Gỗ Nâu', 'https://homeoffice.com.vn/images/detailed/98/ke-nha-bep-da-nang-khung-sat-go-cao-su-1.jpg', 2000000, 1800000, 'ke-nha-bep-da-nang-khung-sat-go-cao-su-1.jpg'),
(54, 'G0B2010', 'Ghế Ăn Gỗ Cao Su Tự Nhiên MOHO NEXO 601', 'Ghế', 'KITS', 'Moho', '48x42x80', 'Nâu', 'https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_an_go_cao_su_tu_nhien_nexo_5_c8e38359019b4df8b647f8b749286bfa_master.jpg', 1990000, 1390000, 'pro_mau_tu_nhien_ghe_an_go_cao_su_tu_nhien_nexo_5_c8e38359019b4df8b647f8b749286bfa_master.jpg'),
(55, 'T0B2008', 'Tủ Đầu Giường Gỗ MOHO VLINE 801', 'Tủ', 'BEDS', 'Moho', '55x41x51.5', 'Nâu', 'https://product.hstatic.net/200000065946/product/pro_nau_noi_that_moho_tu_dau_giuong_vline_801_1_23cfecbb74a14c43918abdff9a03b485_master.jpg', 2490000, 1990000, 'pro_nau_noi_that_moho_tu_dau_giuong_vline_801_1_23cfecbb74a14c43918abdff9a03b485_master.jpg'),
(56, 'S0B2007', 'Ghế Sofa Gỗ Cao Su Tự Nhiên MOHO HOBRO 601', 'Sofa', 'LIVS', 'Moho', '220x99x85', 'Nâu', 'https://product.hstatic.net/200000065946/product/pro_nau_noi_that_moho_ghe_sofa_go_moho_hobro_5_c7649b8758c647bb9c7e7e3cfcfcf36d_master.jpg', 15990000, 12590000, 'pro_nau_noi_that_moho_ghe_sofa_go_moho_hobro_5_c7649b8758c647bb9c7e7e3cfcfcf36d_master.jpg'),
(57, 'G0B2006', 'Giường Ngủ Gỗ Tràm MOHO MALAGA 302 Nhiều Kích Thướ', 'Giường', 'BEDS', 'Moho', '200x120', 'Nâu', 'https://product.hstatic.net/200000065946/product/i_that_moho_giuo_ngu_malaga_302_1m2_1_49fc192023254e1591849c7f359b6d06_9fabf682494143569447754a6cfe688c_master.jpg', 5990000, 4890000, 'i_that_moho_giuo_ngu_malaga_302_1m2_1_49fc192023254e1591849c7f359b6d06_9fabf682494143569447754a6cfe688c_master.jpg'),
(58, 'K0B2007', 'Tủ Kệ Tivi Gỗ Tràm MOHO VLINE 301', 'Kệ', 'LIVS', 'Moho', '160x41x51', 'Nâu', 'https://product.hstatic.net/200000065946/product/pro_nau_noi_that_moho_tu_ke_tivi_vline_1_d5fa18e6f13c49a9955e337a072ba7a7_master.jpg', 4990000, 3190000, 'pro_nau_noi_that_moho_tu_ke_tivi_vline_1_d5fa18e6f13c49a9955e337a072ba7a7_master.jpg'),
(59, 'B0V1010', 'Bàn Làm Việc Gỗ MOHO VLINE 601 Màu Tự Nhiên', 'Bàn', 'BEDS', 'Moho', '110x55x74', 'Vanilla', 'https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_noi_that_moho_ban_lam_viec_vline_1_92060b73c393469181d9d24218c38851_master.jpg', 2990000, 1690000, 'pro_mau_tu_nhien_noi_that_moho_ban_lam_viec_vline_1_92060b73c393469181d9d24218c38851_master.jpg'),
(60, 'K0V1008', 'Kệ Gỗ – Kệ Sách MOHO OSLO 902', 'Kệ', 'LIVS', 'Moho', '80x32x160', 'Vanilla', 'https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_noi_that_moho_ke_sach_oslo_902_1_3eab0d05eb284b87acde51e4f6b75c3c_master.jpg', 2790000, 2190000, 'pro_mau_tu_nhien_noi_that_moho_ke_sach_oslo_902_1_3eab0d05eb284b87acde51e4f6b75c3c_master.jpg'),
(61, 'G0B3011', 'Ghế Xoay Văn Phòng Tay Gập Thông Minh MOHO RIGA 70', 'Ghế', 'LIVS', 'Moho', '52x65x94', 'Đen', 'https://product.hstatic.net/200000065946/product/pro_trang_noi_that_moho_ghe_van_phong_riga_1_92865499928b49a191bbf2d0e0c91f6f_master.jpg', 1690000, 1290000, 'pro_trang_noi_that_moho_ghe_van_phong_riga_1_92865499928b49a191bbf2d0e0c91f6f_master.jpg'),
(62, 'B0B2011', 'Bàn Ăn Gỗ Cao Su Tự Nhiên MOHO VLINE 601 1m6', 'Bàn', 'KITS', 'Moho', '160x75x65', 'Nâu', 'https://product.hstatic.net/200000065946/product/pro_nau_noi_that_moho_ban_an_go_vlne_1_02c484a7c1914fd18e85938012442389_master.jpg', 4590000, 3790000, 'pro_nau_noi_that_moho_ban_an_go_vlne_1_02c484a7c1914fd18e85938012442389_master.jpg'),
(63, 'S0B2008', 'Sofa Dubai 2,5 chỗ hiện đại da Simili Be36', 'Sofa', 'SOFA', 'Simili', 'D2000 - R800 - C800 mm', 'Nâu', 'https://nhaxinh.com/wp-content/uploads/2021/10/sofa-dubai-2.5-cho-da-pu-nau-hien-dai-100915.jpg', 18660000, 0, 'sofa-dubai-2.5-cho-da-pu-nau-hien-dai-100915.jpg'),
(64, 'F0P1007', 'Chân nến gốm mạ vàng', 'Chân nến', 'DECO', 'AHURA', '', 'Mạ Gold', 'https://product.hstatic.net/1000406288/product/upload_d69c3ee27766422dae91407995b5ce01_1024x1024.jpg', 3800000, 0, 'upload_d69c3ee27766422dae91407995b5ce01_1024x1024.jpg'),
(65, 'S0W1009', 'Sofa Hung King 3 chỗ + Gối VACT3231', 'Sofa', 'SOFA', 'Hungking', 'D1885 - R745 - C755 mm', 'Trắng', 'https://nhaxinh.com/wp-content/uploads/2024/03/sofa-3-cho-hung-king.jpg', 25900000, 0, 'sofa-3-cho-hung-king.jpg'),
(66, 'S0B2010', 'Sofa 2 chỗ Tết vải vact10499', 'Sofa', 'SOFA', 'AACORPORATION', 'D1440 - R720 - C730 mm', 'Nâu', 'https://nhaxinh.com/wp-content/uploads/2024/04/sofe-2-cho-tet-vai-vact10499.jpg', 12900000, 0, 'sofe-2-cho-tet-vai-vact10499.jpg'),
(67, 'F0V1009', 'Tượng cá bảy màu màu sắc', 'Tượng', 'DECO', 'AHURA', '33*24*41', 'Vanilla', 'https://product.hstatic.net/1000406288/product/upload_3d6ddeca85c845f8a68b81ee56c0b50e_1024x1024.jpg', 9500000, 0, 'upload_3d6ddeca85c845f8a68b81ee56c0b50e_1024x1024.jpg'),
(68, 'S0B2011', 'Sofa 2 chỗ Tết vải vact10504', 'Sofa', 'SOFA', 'AACORPORATION', 'D1440 - R720 - C730 mm', 'Xám', 'https://nhaxinh.com/wp-content/uploads/2024/04/sofa-2-cho-tet-vai-vact10504.jpg', 12900000, 0, 'sofa-2-cho-tet-vai-vact10504.jpg'),
(69, 'S0W1012', 'Sofa 3 chỗ Osaka mẫu 1 vải 65', 'Sofa', 'SOFA', 'OSAKA', 'D2060 - R750 - C820/400 mm', 'Trắng', 'https://nhaxinh.com/wp-content/uploads/2021/10/sofa-osaka-3-cho-310189-5.jpg', 28380000, 0, 'sofa-osaka-3-cho-310189-5.jpg'),
(70, 'F0B3010', 'Tượng gốm mèo quấn chuỗi pha lê, màu đen, đu', 'Tượng', 'DECO', 'AHURA', '29*10*31', 'Đen', 'https://product.hstatic.net/1000406288/product/upload_eb34ef3fe7f746e38befc0e6a735a5e4_1024x1024.jpg', 9800000, 0, 'upload_eb34ef3fe7f746e38befc0e6a735a5e4_1024x1024.jpg'),
(71, 'A1W1001', 'Bench Soul', 'Armchair', 'ARMC', 'Soul', 'D1600-R350-C450 mm', 'Sồi Trắng', 'https://nhaxinh.com/wp-content/uploads/2021/10/500-bench-soul-d.jpg', 6750000, 3, '500-bench-soul-d.jpg'),
(72, 'F0W1011', 'Tượng gốm mèo quấn chuỗi pha lê, màu trắng,', 'Tượng', 'DECO', 'AHURA', '29*10*31', 'Trắng', 'https://product.hstatic.net/1000406288/product/upload_d5d8f6d43cd149ccbe08d780fda214df_1024x1024.jpg', 5800000, 0, 'upload_d5d8f6d43cd149ccbe08d780fda214df_1024x1024.jpg'),
(73, 'F0W1012', 'Tượng gốm thiên thần ngồi bó gối, màu trắn', 'Tượng', 'DECO', 'AHURA', '26*25*19', 'Trắng', 'https://product.hstatic.net/1000406288/product/upload_fd77d89eb7e1497ea183e37e7af2ccd9_1024x1024.jpg', 6800000, 0, 'upload_fd77d89eb7e1497ea183e37e7af2ccd9_1024x1024.jpg'),
(74, 'F0W1013', 'Tượng gốm mèo nằm trên bông hoa đỏ, màu trắ', 'Tượng', 'DECO', 'AHURA', '9*7*5', 'Trắng', 'https://product.hstatic.net/1000406288/product/upload_6fff01637f874b0990796b2a63d2b14f_1024x1024.jpg', 1450000, 0, 'upload_6fff01637f874b0990796b2a63d2b14f_1024x1024.jpg'),
(75, 'F0W1014', 'Tượng gốm gấu trúc, mạ vàng', 'Tượng', 'DECO', 'AHURA', '24*16*20', 'Trắng', 'https://product.hstatic.net/1000406288/product/upload_672513c690094422a0094570185b9d29_1024x1024.jpg', 7800000, 0, 'upload_672513c690094422a0094570185b9d29_1024x1024.jpg'),
(76, 'F0W1015', 'Tượng gốm chú hề nằm trên bóng, màu trắng ', 'Tượng', 'DECO', 'AHURA', '32*23*27', 'Trắng', 'https://product.hstatic.net/1000406288/product/upload_ac9a9cbdafc24955bb98e1edad4c2d97_1024x1024.jpg', 11500000, 0, 'upload_ac9a9cbdafc24955bb98e1edad4c2d97_1024x1024.jpg'),
(77, 'A1W1002', 'Bàn làm việc Soul', 'Armchair', 'ARMC', 'Soul', 'D1300-R800-C750', 'Sồi Trắng', 'https://nhaxinh.com/wp-content/uploads/2021/10/ban-lam-viec-soul.jpg', 11570000, 5785000, 'ban-lam-viec-soul.jpg'),
(78, 'F0W1016', 'Tượng gốm vẹt Cockatoo, mào mạ vàng, màu tr', 'Tượng', 'DECO', 'AHURA', '19*19*52', 'Trắng', 'https://product.hstatic.net/1000406288/product/upload_102f3eac5dbe43f5804d3c32869f8492_1024x1024.jpg', 25800000, 0, 'upload_102f3eac5dbe43f5804d3c32869f8492_1024x1024.jpg'),
(79, '', 'Giường Leman 1m8 vải VACT10370', 'Giường', 'BEDS', 'AACORPORATION', 'D2000 - R1800 - C1070 mm', 'Xám', 'https://nhaxinh.com/wp-content/uploads/2024/03/giuong-leman-1m8-vai-vact10370.jpg', 33650000, 0, 'giuong-leman-1m8-vai-vact10370.jpg'),
(80, '', 'Tủ tivi trưng bày Pop', 'Tủ', 'LIVS', 'AACORPORATION', 'D2500 - R380 - C1980 mm', 'Gỗ Nâu', 'https://nhaxinh.com/wp-content/uploads/2021/10/1000-tu-tv-pop.jpg', 45990000, 0, '1000-tu-tv-pop.jpg'),
(81, '', 'Bàn ăn 1m8 Elegance màu tự nhiên', 'Bàn', 'KITS', 'AACORPORATION', 'D1800 - R850 - C710 mm', 'Gỗ Ash', 'https://nhaxinh.com/wp-content/uploads/2021/11/102417-ban-an-elegance-1m6-mau-tu-nhien2.jpg', 54000000, 0, '102417-ban-an-elegance-1m6-mau-tu-nhien2.jpg'),
(82, '', 'Ghế ăn không tay Elegance màu tự nhiên', 'Ghế', 'KITS', 'AACORPORATION', 'D430 - R505 - C790 mm', 'Gỗ Ash', 'https://nhaxinh.com/wp-content/uploads/2021/11/102416-ghe-an-elegance-khong-tay-mau-tu-nhien.jpg', 16400000, 0, '102416-ghe-an-elegance-khong-tay-mau-tu-nhien.jpg'),
(83, '', 'Ghế ăn có tay Elegance màu tự nhiên', 'Ghế', 'KITS', 'AACORPORATION', 'D505 - R505 - C790 mm', 'Gỗ Ash', 'https://nhaxinh.com/wp-content/uploads/2021/11/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpg', 18560000, 0, '102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpg'),
(84, '', 'Bench Elegance màu tự nhiên da cognac', 'Bàn', 'KITS', 'AACORPORATION', 'D1500 - R350 - C460 mm', 'Gỗ Ash', 'https://nhaxinh.com/wp-content/uploads/2021/11/102420-bench-elegance-mau-tu-nhien-da-cognac.jpg', 29360000, 0, '102420-bench-elegance-mau-tu-nhien-da-cognac.jpg'),
(85, '', 'Tủ Rượu Claude 4100025Z', 'Tủ', 'KITS', 'AACORPORATION', 'D435-R315-C1185 mm', 'Gỗ', 'https://nhaxinh.com/wp-content/uploads/2022/06/TU-RUOU-CLAUDE-4100025Z-1.jpg', 14900000, 0, 'TU-RUOU-CLAUDE-4100025Z-1.jpg'),
(86, '', 'Armchair Royal vải MB-LD 1/7', 'Ghế', 'LIVS', 'AACORPORATION', 'D760 - R750 - C730 mm', 'Xanh rêu', 'https://nhaxinh.com/wp-content/uploads/2022/04/armchair-Royal-vai-dep-xanh-den-1.jpg', 11690000, 0, 'armchair-Royal-vai-dep-xanh-den-1.jpg'),
(87, '', 'Đôn vải', 'Ghế', 'LIVS', 'AACORPORATION', 'D400-R400-C400 mm', 'Xanh rêu', 'https://nhaxinh.com/wp-content/uploads/2022/11/Don-vai-3.jpg', 1990000, 0, 'Don-vai-3.jpg'),
(88, '', 'Bình con bướm 60464K\r', 'Bình', 'DECO', 'AACORPORATION', 'Ø280 - C495 mm', 'Xanh dương nhạt', 'https://nhaxinh.com/wp-content/uploads/2022/12/BINH-BUTTER-FLIGHT-BLUE-50CM-60464K.jpg', 6450000, 0, 'BINH-BUTTER-FLIGHT-BLUE-50CM-60464K.jpg'),
(89, '', 'Kệ sách Division F – màu Nougat', 'Kệ', 'LIVS', 'Calligaris', 'D1495-R420-C1975', 'Gỗ', 'https://nhaxinh.com/wp-content/uploads/2021/10/80431-ke-sach-division-nougat.jpg', 62760000, 0, '80431-ke-sach-division-nougat.jpg'),
(90, '', 'Bàn làm việc Biblio', 'Bàn', 'LIVS', 'Calligaris', 'D1040- R530- C1020', 'Gỗ', 'https://nhaxinh.com/wp-content/uploads/2021/10/ban-lam-viec-biblio_2.jpg', 55870000, 0, 'ban-lam-viec-biblio_2.jpg'),
(91, '', 'Bàn làm việc Dubai', 'Bàn', 'LIVS', 'AACORPORATION', 'D1200- R500- C750 mm', 'Gỗ', 'https://nhaxinh.com/wp-content/uploads/2021/10/ban_lam_viec_dubai.jpg.gif', 8640000, 0, 'ban_lam_viec_dubai.jpg'),
(92, '', 'Giường ngủ GN302-18', 'Giường', 'BEDS', 'HOAPHAT', '1860-2055-950mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/giuong-ngu-gn302-18-2643-0.jpg', 8081000, 0, 'giuong-ngu-gn302-18-2643-0.jpg'),
(93, '', 'Tủ TU18B2C3', 'Tủ', 'BEDS', 'HOAPHAT', '1270-550-1970mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/tu-tu18b2c3-226-0.jpg', 7064000, 0, 'tu-tu18b2c3-226-0.jpg'),
(94, '', 'Giường ngủ GN301-19', 'Giường', 'BEDS', 'HOAPHAT', '1660-2155-940mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/giuong-ngu-gn301-16-1037-0.jpg', 9660000, 0, 'giuong-ngu-gn301-16-1037-0.jpg'),
(95, '', 'Giường ngủ GN303-16', 'Giường', 'BEDS', 'HOAPHAT', '1660-2180-950mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/giuong-ngu-gn303-16-1044-0.jpg', 5440000, 0, 'giuong-ngu-gn303-16-1044-0.jpg'),
(96, '', 'Giường ngủ GN305-16', 'Giường', 'BEDS', 'HOAPHAT', '1850-2095-1000mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/giuong-ngu-gn305-16-1046-0.jpg', 6860000, 0, 'giuong-ngu-gn305-16-1046-0.jpg'),
(97, '', 'Giường ngủ GN402-16', 'Giường', 'BEDS', 'HOAPHAT', '1760-2206-1005mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/giuong-ngu-gn402-16-1152-0.jpg', 10444000, 0, 'giuong-ngu-gn402-16-1152-0.jpg'),
(98, '', 'Giường ngủ GNE02-15', 'Giường', 'BEDS', 'HOAPHAT', '1280 -  2010 - 1000mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/giuong-ngu-gne02-15-2636-0.jpg', 7969000, 0, 'giuong-ngu-gne02-15-2636-0.jpg'),
(99, '', 'Giường ngủ GN304-18', 'Giường', 'BEDS', 'HOAPHAT', '1900 -  2180 - 950mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/giuong-ngu-gn304-18-2641-0.jpg', 7623000, 0, 'giuong-ngu-gn304-18-2641-0.jpg'),
(100, '', 'Giường ngủ GN401-16', 'Giường', 'BEDS', 'HOAPHAT', '1765 - 2215 - 1015mm', 'Gỗ', 'https://hoaphatnoithat.vn/upload/sanpham/large/giuong-ngu-gn401-16-1048-0.jpg', 8640000, 0, 'giuong-ngu-gn401-16-1048-0.jpg'),
(101, '', 'Tượng trang trí Torso', 'Tượng', 'DECO', 'AACORPORATION', 'D210 - R135 - C510 mm', 'Vàng', 'https://nhaxinh.com/wp-content/uploads/2023/11/Tuong-trang-tri-Torso-1.jpg', 2340000, 0, 'Tuong-trang-tri-Torso-1.jpg'),
(102, '', 'Cừu trang trí white/gold M', 'Tượng', 'DECO', 'AACORPORATION', 'D250 - R140 - C330 mm', 'Vàng', 'https://nhaxinh.com/wp-content/uploads/2023/11/Cuu-trang-tri-white-gold-M.jpg', 1370000, 0, 'Cuu-trang-tri-white-gold-M.jpg'),
(103, '', 'Bàn đầu giường Ubai', 'Bàn', 'BEDS', 'AACORPORATION', 'D650 - R420 - C350 mm', 'MDF xà cừ', 'https://nhaxinh.com/wp-content/uploads/2024/05/ban_dau_giuong_ubai_a_l.jpg', 5020000, 0, 'ban_dau_giuong_ubai_a_l.jpg'),
(104, '', 'Đèn bàn Tree', 'Đèn', 'BEDS', 'AACORPORATION', '570-330-190 mm', 'Đen', 'https://nhaxinh.com/wp-content/uploads/2021/10/den-ban-3-101690.jpg', 23600000, 0, 'den-ban-3-101690.jpg'),
(105, '', 'Tượng con cá Fish Gold Small', 'Tượng', 'DECO', 'AACORPORATION', 'D360-R140-C330', 'Vàng', 'https://nhaxinh.com/wp-content/uploads/2021/10/tuong-con-ca-fish-gold-nho-4.png', 6900000, 0, 'tuong-con-ca-fish-gold-nho-4.jpg'),
(106, '', 'Chim trang trí Statue', 'Tượng', 'DECO', 'AACORPORATION', 'D180 - C240 mm', 'Vàng', 'https://nhaxinh.com/wp-content/uploads/2023/11/chim-trang-tri-statue.jpg', 1260000, 0, 'chim-trang-tri-statue.jpg'),
(107, '', 'Bàn đầu giường Pio', 'Bàn', 'BEDS', 'AACORPORATION', 'D500- R400 - C550', 'Gỗ Beech', 'https://nhaxinh.com/wp-content/uploads/2021/10/ban-dau-giuong-pio.jpg', 5900000, 0, 'ban-dau-giuong-pio.jpg'),
(108, '', 'Tượng con chim gốm xanh bạc hà lớn 21846', 'Tượng', 'DECO', 'AACORPORATION', 'D210 - R110 - C180 mm', 'Trắng', 'https://nhaxinh.com/wp-content/uploads/2022/08/TUONG-BA-CON-CHIM-CER-MINT-GREEN-21846.jpg', 990000, 0, 'TUONG-BA-CON-CHIM-CER-MINT-GREEN-21846.jpg'),
(109, '', 'Tủ áo Wabrobe 02', 'Tủ', 'BEDS', 'AACORPORATION', 'D3800 - R670 - C2400 mm', 'MDF Laminate', 'https://nhaxinh.com/wp-content/uploads/2023/10/Tu-ao-Wabrobe-02.jpg', 273930000, 0, 'Tu-ao-Wabrobe-02.jpg'),
(110, '', 'Ghế thư giãn điện Lazboy da Pebble', 'Ghế', 'LIVS', 'Lazboy', 'D1000 - R1000 - C1080 mm', 'Xám', 'https://nhaxinh.com/wp-content/uploads/2023/05/ghe-thu-gian-dien-LAZBOY-1PT554-DREAMTIME-EL-da-PEBBLE.jpg', 57600000, 0, 'ghe-thu-gian-dien-LAZBOY-1PT554-DREAMTIME-EL-da-PEBBLE.jpg'),
(111, '', 'Ghế thư giãn điện Lazboy da Ginger Lancer', 'Ghế', 'LIVS', 'Lazboy', 'D950- R850- C1030 mm', 'Nâu đỏ', 'https://nhaxinh.com/wp-content/uploads/2023/05/ghe-thu-gian-dien-LAZBOY-1PT515-LANCER-FL-DA-GINGER.jpg', 54890000, 0, 'ghe-thu-gian-dien-LAZBOY-1PT515-LANCER-FL-DA-GINGER.jpg'),
(112, '', 'Ghế thư giãn điện Lazboy Lancer 1PT515 da TAN', 'Ghế', 'LIVS', 'Lazboy', 'D950 - R850 - C1030 mm', 'Nâu vàng', 'https://nhaxinh.com/wp-content/uploads/2024/03/ghe-thu-gian-dien-lazboy-lancer-1pt515-da-tan.jpg', 49500000, 0, 'ghe-thu-gian-dien-lazboy-lancer-1pt515-da-tan.jpg'),
(113, '', 'Ghế thư giãn Lazboy Điện Lancer 1Pt 515 Da Sienna', 'Ghế', 'LIVS', 'Lazboy', 'D950 - R850 - C1030 mm', 'Nâu đen', 'https://nhaxinh.com/wp-content/uploads/2022/05/ghe-lazboy-dien-lancer-1pt-515-da-sienna.jpg', 50960000, 0, 'ghe-lazboy-dien-lancer-1pt-515-da-sienna.jpg'),
(114, '', 'Ghế thư giãn Lazboy điện Lancer 1PT515 – Deep Sage', 'Ghế', 'LIVS', 'Lazboy', 'D950 - R850 - C1030 mm', 'Xanh rêu', 'https://nhaxinh.com/wp-content/uploads/2021/10/ghe-lazboy-3-101744.jpg', 50960000, 0, 'ghe-lazboy-3-101744.jpg'),
(115, '', 'Ghế LazBoy 3C Barrett T35-752 Deep Sage', 'Ghế', 'LIVS', 'Lazboy', 'D2050 – R1000 - C1040 mm', 'Xanh lá', 'https://nhaxinh.com/wp-content/uploads/2021/10/laz_boy_3c_barrett_t35-752_deep_sage.jpg', 97200000, 0, 'laz_boy_3c_barrett_t35-752_deep_sage.jpg'),
(116, '', 'Sofa điện Norma góc phải da nâu L01', 'Sofa', 'SOFA', 'Calligaris', 'D2890/1580 - R1030/1580 - C780/1020 mm', 'Nâu', 'https://nhaxinh.com/wp-content/uploads/2022/09/SOFA-DIEN-NORMA-GOC-PHAI-DA-BROWN-L01.jpg', 273260000, 0, 'SOFA-DIEN-NORMA-GOC-PHAI-DA-BROWN-L01.jpg'),
(117, '', 'Sofa điện Norma 3 chỗ da Acajou L3K', 'Sofa', 'SOFA', 'Calligaris', 'D2120 - R1030/1580 - C780/1020 mm', 'Nâu', 'https://nhaxinh.com/wp-content/uploads/2021/10/sofa-norma-da-brown-102450.jpg', 223170000, 0, 'sofa-norma-da-brown-102450.jpg'),
(118, '', 'Bàn console butterfly ginkgo 411511 MCA', 'Bàn', 'LIVS', 'AACORPORATION', 'D1520 - R450 - C760 mm', 'Trắng', 'https://nhaxinh.com/wp-content/uploads/2024/04/ban-console-butterfly-ginkgo-411511-mca.jpg', 192900000, 0, 'ban-console-butterfly-ginkgo-411511-mca.jpg'),
(119, '', 'Ghế Sofa Gỗ Cao Su Tự Nhiên MOHO FYN 901', 'Sofa', 'SOFA', 'Moho', '206cm x 81,5cm x 79cm', 'Gỗ Nâu', 'https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_noi_that_moho_ghe_sofa_fyn_901_2_6db9b36362284eeb9c94a841747295f9_master.jpg', 16490000, 10990000, 'pro_mau_tu_nhien_noi_that_moho_ghe_sofa_fyn_901_2_6db9b36362284eeb9c94a841747295f9_master.jpg'),
(120, '', 'Hệ tủ bếp MOHO Kitchen Premium Narvik', 'Tủ bếp', 'KITS', 'Moho', '2274 x 1724mm', 'Gỗ Ash', 'https://product.hstatic.net/200000065946/product/pro_1m5_chu_i_noi_that_moho_tu_bep_premium_chu_i_1m5_narvik_b_804c3680a33649c097732eaf825f08a8_master.jpg', 19816000, 11890000, 'pro_1m5_chu_i_noi_that_moho_tu_bep_premium_chu_i_1m5_narvik_b_804c3680a33649c097732eaf825f08a8_master.jpg'),
(121, '', 'Bàn Cafe – Bàn Trà Tròn Gỗ MOHO OSLO 901', 'Bàn', 'LIVS', 'Moho', '68cm x 42cm', 'Nâu', 'https://product.hstatic.net/200000065946/product/pro_nau_noi_that_moho_ban_tra_sofa_oslo_thap_1_333ac61545404cd4a1dae3e0353af6f3_master.jpg', 2490000, 1990000, 'pro_nau_noi_that_moho_ban_tra_sofa_oslo_thap_1_333ac61545404cd4a1dae3e0353af6f3_master.jpg'),
(122, '', 'Bàn Cafe – Bàn Trà Gỗ Cao Su MOHO MILAN 602', 'Bàn', 'LIVS', 'Moho', '68cm x 42cm', 'Vanilla', 'https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_noi_that_moho_ban_sofa__ban_tra_go_cao_su_milan_601_cff8c5a279094d5a891809d9e8bf3221_master.jpg', 649000, 490000, 'pro_mau_tu_nhien_noi_that_moho_ban_sofa__ban_tra_go_cao_su_milan_601_cff8c5a279094d5a891809d9e8bf3221_master.jpg'),
(123, '', 'Tủ Đầu Giường Gỗ MOHO VLINE 801 Màu Tự Nhiên', 'Tủ', 'BEDS', 'Moho', '55cm x 41cm x 51,5cm', 'Vanilla', 'https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_noi_that_moho_tu_dau_giuong_vline_5_8789ba9c811d4c31a71b47d8eb17744b_master.jpg', 2490000, 1990000, 'pro_mau_tu_nhien_noi_that_moho_tu_dau_giuong_vline_5_8789ba9c811d4c31a71b47d8eb17744b_master.jpg'),
(124, '', 'Ghế Văn Phòng Chân Xoay MOHO MAJOR 701', 'Ghế', 'LIVS', 'Moho', '56cm x 42cm x 92-106cm', 'Đen', 'https://product.hstatic.net/200000065946/product/pro_den_noi_that_moho_ghe_van_phong_major_8_368736be250946c19135e408e689f6c4_master.jpg', 1890000, 1290000, 'pro_den_noi_that_moho_ghe_van_phong_major_8_368736be250946c19135e408e689f6c4_master.jpg'),
(125, '', 'GIƯỜNG BOSA CP1710B 1.8M XÁM', 'Giường', 'BEDS', 'GAUSMANN', '1760-2206-1005mm', 'Xám', 'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_27736/giuong-bosa-cp1_main_305_1020.png.webp', 30490000, 19990000, 'giuong-bosa-cp1_main_305_1020.png.jpg'),
(126, '', 'Giường ROMEO 1.8M CP1806B', 'Giường', 'BEDS', 'GAUSMANN', '1760-2206-1005mm', 'Nâu', 'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_29711/giuong-romeo-18_main_61_1020.png.webp', 29090000, 20990000, 'giuong-romeo-18_main_61_1020.png.jpg'),
(127, '', 'Tủ Áo 4 cửa Lisa A3003', 'Tủ', 'BEDS', 'Simplehome', '181.3x59x216 cm', 'Gỗ', 'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_27711/tu-ao-4-cua-lis_main_929_1020.png.webp', 17790000, 13990000, 'tu-ao-4-cua-lis_main_929_1020.png.jpg'),
(128, '', 'Sofa 3 Chỗ Vera SF20511A-3', 'Sofa', 'SOFA', 'GAUSMANN', '198x76x87 cm', 'Xanh đậm', 'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_30533/sofa-3-cho-vera_main_445_1020.png.webp', 28790000, 16990000, 'sofa-3-cho-vera_main_445_1020.png.jpg'),
(129, '', 'Sofa L (Góc Trái) 1100', 'Sofa', 'SOFA', 'Simplehome', ' 281x105/173x73 cm', 'Xám bạc', 'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_29378/sofa-l-goc-trai_main_193_1020.png.webp', 23790000, 17890000, 'sofa-l-goc-trai_main_193_1020.png.jpg'),
(130, '', 'Sofa L (Góc Trái) 902SS SUNDAY', 'Sofa', 'SOFA', 'Simplehome', '255x157x87.5 cm', 'Đen', 'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_23924/sofa-l-goc-trai_main_207_1020.png.webp', 27990000, 16790000, 'sofa-l-goc-trai_main_207_1020.png.jpg'),
(131, '', 'Sofa 2 Chỗ Cardiff EM0589', 'Sofa', 'SOFA', 'GAUSMANN', '144x87x77 cm', 'Vanilla', 'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_24081/sofa-2-cho-card_main_531_1020.png.webp', 26990000, 16990000, 'sofa-2-cho-card_main_531_1020.png.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `ma_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`ma_danhmuc`, `tendanhmuc`) VALUES
(1, 'Sofa'),
(2, 'Phòng ngủ'),
(3, 'Phòng khách'),
(4, 'Phòng tắm'),
(5, 'Trang trí'),
(6, 'Phòng ăn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `total` double NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `produc_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlybackhachang`
--

CREATE TABLE `quanlybackhachang` (
  `ma_kh` int(11) NOT NULL,
  `sosanphamdamua` int(11) NOT NULL,
  `tongsotientra` double NOT NULL,
  `bac` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlybanhang`
--

CREATE TABLE `quanlybanhang` (
  `ma_dh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `thoidiemmuahang` datetime NOT NULL,
  `diachigiaohang` varchar(255) NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `ghichukhachhang` varchar(255) NOT NULL,
  `tonggiatridonhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlybanhang`
--

INSERT INTO `quanlybanhang` (`ma_dh`, `ma_kh`, `thoidiemmuahang`, `diachigiaohang`, `trangthai`, `ghichukhachhang`, `tonggiatridonhang`) VALUES
(1, 1, '2024-05-31 10:09:01', 'dsdsd', 1, 'sdsd', 1234);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlykhachhang`
--

CREATE TABLE `quanlykhachhang` (
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(25) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `gioitinh` bit(3) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `thetindung` varchar(50) DEFAULT NULL,
  `theghino` varchar(50) DEFAULT NULL,
  `taikhoannganhang` varchar(50) DEFAULT NULL,
  `ngaydangkythanhvien` datetime NOT NULL,
  `magioithieu` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlykhachhang`
--

INSERT INTO `quanlykhachhang` (`ma_kh`, `ten_kh`, `tendangnhap`, `matkhau`, `ngaysinh`, `gioitinh`, `diachi`, `sodienthoai`, `thetindung`, `theghino`, `taikhoannganhang`, `ngaydangkythanhvien`, `magioithieu`) VALUES
(1, 'Hà Nhật Đoan', 'hanhatdoan@gmail.com', '12345', '2024-05-31 09:59:27', b'001', 'ok', 388646232, 'khong', 'khong', 'khong', '2024-05-31 09:59:27', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlysanpham`
--

CREATE TABLE `quanlysanpham` (
  `ma_sp` varchar(25) NOT NULL,
  `tonkho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlysanpham`
--

INSERT INTO `quanlysanpham` (`ma_sp`, `tonkho`) VALUES
('S0B1001', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlyvoucher`
--

CREATE TABLE `quanlyvoucher` (
  `ma_voucher` int(11) NOT NULL,
  `ten_voucher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlyvoucher`
--

INSERT INTO `quanlyvoucher` (`ma_voucher`, `ten_voucher`) VALUES
(1, 'tenvoucher'),
(2, 'Giảm 4.500.000 cho đơn hàng từ 50.000.000 trở lên'),
(3, 'Giảm 400.000 cho đơn hàng từ 5.000.000 trở lên'),
(4, 'Giảm 100.000 cho đơn hàng từ 2.000.000 trở lên'),
(5, 'Giảm 15.000 cho đơn hàng từ 0đ trở lên'),
(6, 'Miễn phí vận chuyển 0đ đối với đơn hàng trên 100.0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_loai_san_pham`
--

CREATE TABLE `quan_ly_loai_san_pham` (
  `ma_loaisp` varchar(30) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `loaisp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphambanchay`
--

CREATE TABLE `sanphambanchay` (
  `ma_sp` varchar(25) NOT NULL,
  `ma_danhmuc` int(11) NOT NULL,
  `soluongbanra` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucherkhachhang`
--

CREATE TABLE `voucherkhachhang` (
  `ma_kh` int(11) NOT NULL,
  `ma_voucher` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucherkhachhang`
--

INSERT INTO `voucherkhachhang` (`ma_kh`, `ma_voucher`, `soluong`) VALUES
(1, 5, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ma_dh`,`ma_sp`,`ma_voucher`),
  ADD KEY `ma_voucher` (`ma_voucher`),
  ADD KEY `ma_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`ID`,`ma_sp`,`loaisp`),
  ADD KEY `ma_sp` (`ma_sp`),
  ADD KEY `loaisp` (`loaisp`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`ma_danhmuc`,`tendanhmuc`),
  ADD KEY `ma_danhmuc` (`ma_danhmuc`),
  ADD KEY `tendanhmuc` (`tendanhmuc`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `produc_id` (`produc_id`);

--
-- Chỉ mục cho bảng `quanlybackhachang`
--
ALTER TABLE `quanlybackhachang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `quanlybanhang`
--
ALTER TABLE `quanlybanhang`
  ADD PRIMARY KEY (`ma_dh`,`ma_kh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `quanlykhachhang`
--
ALTER TABLE `quanlykhachhang`
  ADD PRIMARY KEY (`ma_kh`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- Chỉ mục cho bảng `quanlysanpham`
--
ALTER TABLE `quanlysanpham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `quanlyvoucher`
--
ALTER TABLE `quanlyvoucher`
  ADD PRIMARY KEY (`ma_voucher`),
  ADD KEY `ma_voucher` (`ma_voucher`);

--
-- Chỉ mục cho bảng `quan_ly_loai_san_pham`
--
ALTER TABLE `quan_ly_loai_san_pham`
  ADD PRIMARY KEY (`ma_loaisp`,`tendanhmuc`,`loaisp`),
  ADD KEY `ma_loaisp` (`ma_loaisp`),
  ADD KEY `tendanhmuc` (`tendanhmuc`),
  ADD KEY `loaisp` (`loaisp`);

--
-- Chỉ mục cho bảng `sanphambanchay`
--
ALTER TABLE `sanphambanchay`
  ADD PRIMARY KEY (`ma_sp`,`ma_danhmuc`),
  ADD KEY `ma_sp` (`ma_sp`),
  ADD KEY `madanhmuc` (`ma_danhmuc`);

--
-- Chỉ mục cho bảng `voucherkhachhang`
--
ALTER TABLE `voucherkhachhang`
  ADD PRIMARY KEY (`ma_kh`,`ma_voucher`),
  ADD KEY `ma_voucher` (`ma_voucher`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quanlykhachhang`
--
ALTER TABLE `quanlykhachhang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `quanlyvoucher`
--
ALTER TABLE `quanlyvoucher`
  MODIFY `ma_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`ma_sp`) REFERENCES `chitietsanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`ma_voucher`) REFERENCES `quanlyvoucher` (`ma_voucher`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_3` FOREIGN KEY (`ma_dh`) REFERENCES `quanlybanhang` (`ma_dh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`produc_id`) REFERENCES `chitietsanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quanlybackhachang`
--
ALTER TABLE `quanlybackhachang`
  ADD CONSTRAINT `quanlybackhachang_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `quanlykhachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quanlybanhang`
--
ALTER TABLE `quanlybanhang`
  ADD CONSTRAINT `quanlybanhang_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `quanlykhachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quanlysanpham`
--
ALTER TABLE `quanlysanpham`
  ADD CONSTRAINT `quanlysanpham_ibfk_1` FOREIGN KEY (`ma_sp`) REFERENCES `chitietsanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quan_ly_loai_san_pham`
--
ALTER TABLE `quan_ly_loai_san_pham`
  ADD CONSTRAINT `quan_ly_loai_san_pham_ibfk_1` FOREIGN KEY (`loaisp`) REFERENCES `chitietsanpham` (`loaisp`),
  ADD CONSTRAINT `quan_ly_loai_san_pham_ibfk_2` FOREIGN KEY (`tendanhmuc`) REFERENCES `danhmucsanpham` (`tendanhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanphambanchay`
--
ALTER TABLE `sanphambanchay`
  ADD CONSTRAINT `sanphambanchay_ibfk_1` FOREIGN KEY (`ma_sp`) REFERENCES `chitietsanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `voucherkhachhang`
--
ALTER TABLE `voucherkhachhang`
  ADD CONSTRAINT `voucherkhachhang_ibfk_1` FOREIGN KEY (`ma_voucher`) REFERENCES `quanlyvoucher` (`ma_voucher`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `voucherkhachhang_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `quanlykhachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
