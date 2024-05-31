<?php session_start(); ?>
<?php
require 'connect.php';
$result = mysqli_query($conn, "SELECT * FROM chitietsanpham ORDER BY gia ASC LIMIT 8");
?>
<?php
include("Module/Header.php");
?>
<!DOCTYPE html>
<html class="htmlgiohang">

<head>
    <meta charset="utf-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="tranggiohang1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <?php include('scriptcart.php') ?>
    <div class="content__cart">
        <?php
        if (!empty($errol)) { ?>
            <div class="" style="height:600px;">
                <?= $errol ?> <a href="javascript:history.back()">Quay Lại</a>
            </div>
        <?php } else { ?>
            <div class="content__icon">
                <h2> GIỎ HÀNG </h2>
            </div>
            <div class="content__notegiamgia">
                <i class="fa-solid fa-tag"></i>
                <span>Nhấn vào mục Mã giảm giá ở cuối trang để được miễn phí vận chuyển nhé!</span>
            </div>
            <div class="content_table">
                <form action="tranggiohang1.php?action=submit" method="post">
                    <table class='content_tablegiohang' border="0" style="border-color: darkgray;border-collapse:collapse;">
                        <thead>
                            <tr class="content_tr1">
                                <th><input type="checkbox" name="" id="" value="chon"></th>
                                <th colspan="2">Sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Giảm giá</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Số tiền</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($product)) {
                                $total = 0;
                                $dem = 0; ?>
                                <?php while ($row = mysqli_fetch_array($product)) { ?>
                                    <tr class="content_tr2">
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" width="90px" height="90px" /></td>
                                        <td align="left">
                                            <?= $row['ten_sp'] ?>

                                        </td>
                                        <td><?= $row['loaisp'] ?></td>
                                        <td><?= $row['giakhuyenmai'] ?></td>
                                        <td><?= $row['gia'] ?></td>
                                        <td><input type="text" name="quantity[<?= $row['ID'] ?>]" id="" size="3" value="<?= $_SESSION['cart'][$row['ID']] ?>" style="text-align:center"></td>
                                        <td><?= $row['gia'] * $_SESSION['cart'][$row['ID']] ?></td>
                                        <td><a href="tranggiohang1.php?action=delete&id=<?= $row['ID'] ?>">Xóa</a></td>
                                    </tr>
                                    <?php $dem++; ?>
                                <?php $total += $row['gia'] * $_SESSION['cart'][$row['ID']];
                                } ?>
                                <tr class="content__tr4" style="background-color: darkgray; color:#f9f9f9f9">
                                    <td colspan="2">Tổng tiền</td>
                                    <td colspan="7" align="right"><?= $total ?><sup>đ</sup></td>
                                </tr>
                            <?php } ?>
                            <tr class="content__tr5">
                                <td colspan="6"></td>
                                <td align="center" colspan="3">
                                    <div class="content_them">
                                        <input type="submit" name="update_click" id="" value="Cập nhật" />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="content__voucher">
                        <i class="fa-solid fa-window-maximize"></i>
                        <span>Xem tất cả voucher hiện có</span>
                        <a href="#main__voucher">Xem thêm voucher</a>
                        <div class="main__voucher" id="main__voucher">
                            <div class="voucher__reduce">
                                <div class="scroll__voucher">
                                    <a href="#" class="close-giamgia">&times;</a>
                                    <div class="" style="font-size: 30px;">
                                        <h3>VOUCHER</h3>
                                    </div>
                                    <label for="">Nhập mã voucher</label><input type="text" name="" id="" value=""><input type="submit" name="" id="" value="Tìm">
                                    <table border="1" style="border-collapse:collapse;margin-top:20px; margin-left:20px;">
                                        <tr class="tr__voucher">
                                            <td><img src="https://down-vn.img.susercontent.com/file/db5515d14d95d605ffca8aa0fe91a5f0" alt="voucher" width="120px" height="100px"></td>
                                            <td style="padding-left:5px ;">Giảm <input type="text" name="" id="" value="" readonly><br>
                                                Đơn tối thiểu <input type="text" name="" id="" value="" readonly><br>
                                                HSD <input type="datetime" name="" id="" value="" readonly></td>
                                            <td><input type="submit" name="" id="" value="Chọn"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content__giamgia">
                        <i class="fa-solid fa-tag"></i>
                        <span><?php  ?></span>
                        <a href="#content__giamgia_voucher">Tìm hiểu thêm về voucher</a>
                        <div class="content__giamgiavoucher" id="content__giamgia_voucher">
                            <div class="main__giamgia">
                                <a href="#" class="close-giamgia">&times;</a>
                                <div>Khuyến mãi vận chuyển</div>
                                <table>
                                    <thead>
                                        <th>Đơn hàng tối thiểu</th>
                                        <th>Khuyến mãi</th>
                                        <th>Phương thức vận chuyển</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="" id="" value="" readonly></td>
                                            <td><input type="text" name="" id="" value="" readonly></td>
                                            <td><input type="text" name="" id="" value="" readonly></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="" id="" value="" readonly></td>
                                            <td><input type="text" name="" id="" value="" readonly></td>
                                            <td><input type="text" name="" id="" value="" readonly></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="content_thongtinkhachhang">
                        <div class=""><label for="">Người nhận</label><input type="text" name="name" placeholder="Nhập họ và tên" class="content_tthoten" size="40"><br></div>
                        <div class=""><label for="">Số điện thoại</label><input type="text" name="phone" id="" placeholder="Nhập số diện thoại" class="content_ttsdt" size="40"><br></div>
                        <div class=""><label for="">Địa chỉ</label><input type="text" name="add" id="" placeholder="Nhập địa chỉ" class="content_ttdc" size="40"><br></div>
                        <div class=""><label for="">Ghi chú</label><textarea name="note" id="" class="content_ttghichu"></textarea></div>
                    </div>
                    <div class="content__dathangtong">
                        <input type="checkbox" name="" id="" value="">
                        <input type="submit" name="" id="" value="Chọn tất cả(<?php ?>)" class="content_input_chonall">
                        <a href="tranggiohang1.php?action=deleteall" class="content_input_chonall1">Xóa</a>
                        <input type="submit" name="" id="" value="Bỏ sản phẩm không hoạt động" class="content_input_spkohoatdong">
                        <div class="main__tooltip">
                            <?php if (!empty($dem)) { ?>
                                <input type="submit" name="" id="" value="Tổng thanh toán(<?= $dem ?>):" class="tongthanhtoan">
                            <?php } ?>
                            <div class="content__tooltip">
                                <div class="">
                                    <h1>Chi tiết khuyến mãi<h1>
                                </div>
                                <div class="tooltip_tongtien">
                                    <div class=""><label for="">
                                            <h3>Tổng tiền hàng</h3>
                                        </label></div>
                                    <div class=""><input type="text" name="" id="" value="<?php ?>" readonly></div>
                                </div>
                                <div class="tooltip_tongtien">
                                    <div class=""><label for="">
                                            <h3>voucher giảm giá</h3>
                                        </label></div>
                                    <div class=""><input type="text" name="" id="" value="<?php ?>" readonly></div>
                                </div>
                                <div class="tooltip_tongtien">
                                    <div class=""><label for="">
                                            <h3>Giảm giá sản phẩm</h3>
                                        </label></div>
                                    <div class=""><input type="text" name="" id="" value="<?php ?>" readonly></div>
                                </div>
                                <div class="tooltip_tongtien">
                                    <div class=""><label for="">
                                            <h3>Tổng số tiền</h3>
                                        </label></div>
                                    <div class=""><input type="text" name="" id="" value="<?= $total ?>đ" readonly></div>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($total)) { ?>
                            <input type="text" name="" id="" value="<?= $total ?>đ" readonly class="tongtien" />
                        <?php } ?>
                        <div class="div_buttondathang"><a href="#"><input name="order_click" type="submit" value="Đặt hàng" class="buttondathang"></input></a></div>
                    </div>
                    <div class="content_cothethich">
                        <div class="content_title">
                            <h2 style="color: chocolate;">CÓ THỂ BẠN CŨNG THÍCH</h2>
                            <h3><a href="#" style="color: darkcyan">Xem tất cả ></a></h3>
                        </div>
                        <div class="content_title_main">
                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                <div class="sanpham1">
                                    <form action="">
                                        <?php
                                        $discount=ceil(($row['giakhuyenmai']/$row['gia'])*100);
                                         if($discount==0){ ?>
                                            <div class=""></div>
                                        <?php } else{ ?>
                                            <div class="nhan_giamgia"><?= $discount ?> %</div>
                                        <?php } ?>
                                        <a href="Module/product-details.php?id=<?= $row['ID'] ?>"><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" /></a>
                                        <a href="Module/product-details.php?id=<?= $row['ID'] ?>">
                                            <h3><?= $row['ten_sp'] ?></h3>
                                        </a>
                                        <div class="main_sanpham">
                                            <div class="giasanpham"><?= $row['gia'] ?><sup>đ</sup></div>
                                        <?php if($discount==0){ ?>
                                            <div class=""></div>
                                        <?php }else { ?>
                                            <div class="giagiamsanpham"><?= $row['giakhuyenmai']  ?><sup>đ</sup></div>
                                        <?php } ?>
                                        </div>
                                        <div class="sanpham1-mua">
                                            <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                            <div class="chitiet-sanpham"><a href="Module/product-details.php?id=<?= $row['ID'] ?>">Chi tiết</a></div>
                                        </div>
                                    </form>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>
<?php
include("Module/Footer.php");
?>

</html>
