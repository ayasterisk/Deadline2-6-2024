<?php
session_start();
require 'connect.php';
require('scriptcart.php');
require('../Layout/Header.php');


$result = mysqli_query($conn, "SELECT * FROM chitietsanpham ORDER BY gia ASC LIMIT 12");
?>

<!DOCTYPE html>
<html class="htmlgiohang">

<head>
    <meta charset="utf-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="tranggiohang1.css" />
    <link rel="stylesheet" href="../vendors/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css" />
</head>
<style>
    /* Include the CSS from Step 1 here */
    #loading-spinner {
        display: none;
        /* Ẩn spinner lúc đầu */
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 3;
    }

    #overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
    }

    .spinner {
        border: 8px solid #f3f3f3;
        /* Light grey */
        border-top: 8px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: spin 10s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<body>
    <div class="content__cart">
        <?php
        if (!empty($errol)) { ?>
            <div id="errorModal" class="modal" style="display:none;">
                <div class="modal-content">
                    <p id="errorMessage"></p>
                    <button onclick="redirectToCart()">OK</button>
                </div>
            </div>
            <script>
                var errorMessage = `<?= $errol ?>`;
                if (errorMessage) {
                    document.querySelector('header').style.display = 'none';
                    alert(errorMessage); 
                    window.location.href = 'tranggiohang1.php'; // Thay đổi đường dẫn phù hợp với URL giỏ hàng của bạn
                }
            </script>
        <?php } else { ?>
            <div class="content__icon">
                <h2> GIỎ HÀNG </h2>
            </div>
            <div class="" style="text-align:center;"><a href="">Trang chủ</a>><a href="./Module/Right/tatcasanpham.php">Sản phẩm</a></div>
            <div class="content__notegiamgia">
                <i class="fa-solid fa-tag"></i>
                <span>Nhấn vào mục Mã giảm giá ở cuối trang để được miễn phí vận chuyển nhé!</span>
            </div>
            <div class="content_table">
                <form action="tranggiohang1.php?action=submit" method="post">
                    <table class='content_tablegiohang' border="0" style="border-color: darkgray;border-collapse:collapse;">
                        <thead>
                            <tr class="content_tr1">
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
                                        <td><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" width="90px" height="90px" /></td>
                                        <td align="left">
                                            <?= $row['ten_sp'] ?>

                                        </td>
                                        <td><?= $row['loaisp'] ?></td>
                                        <td><?= ceil(($row['giakhuyenmai'] / $row['gia']) * 100) ?><sup>%</sup></td>
                                        <td> <?= number_format($row['gia'], 0, "", ",") ?> <sup>đ</sup></td>
                                        <td>
                                            <div id="overlay" style="display:none;"></div>
                                            <div id="loading-spinner">
                                                <div class="spinner"></div>
                                            </div>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                                <input type="submit" name="reduce" id="" value="-" style="padding:0px 8px 0px 8px;border: 1px solid darkgrey;">
                                                <input type="text" name="quantity[<?= $row['ID'] ?>]" id="" size="3" value="<?= $_SESSION['cart'][$row['ID']] ?>" style="text-align:center">
                                                <input type="submit" name="increase" id="" value="+" style="padding:0px 8px 0px 8px;border: 1px solid darkgrey;">
                                            </form>
                                            <script>
                                                // Include the JavaScript from Step 2 here
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    var forms = document.querySelectorAll("form");
                                                    forms.forEach(function(form) {
                                                        form.addEventListener("submit", function() {
                                                            document.getElementById("overlay").style.display = "block";
                                                            document.getElementById("loading-spinner").style.display = "block";
                                                        });
                                                    });
                                                });
                                            </script>
                                        </td>
                                        <td><?= number_format($row['gia'] * $_SESSION['cart'][$row['ID']], 0, "", ",") ?><sup>đ</sup></td>
                                        <td><a href="tranggiohang1.php?action=delete&id=<?= $row['ID'] ?>">Xóa</a></td>
                                    </tr>
                                    <?php $dem++; ?>
                                <?php $total += $row['gia'] * $_SESSION['cart'][$row['ID']];
                                } ?>
                                <tr class="content__tr4" style="background-color: darkgray; color:#f9f9f9f9">
                                    <td colspan="2">Tổng tiền</td>
                                    <td colspan="7" align="right"> <?= number_format($total, 0, "", ",") ?> <sup>đ</sup></td>
                                </tr>
                            <?php } ?>
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
                                    <table border="1" style="border-collapse:collapse;margin-top:20px; margin-left:20px;border:none;">
                                        <?php $select_voucher = mysqli_query($conn, "SELECT*FROM quanlyvoucher") ?>
                                        <?php while ($row = mysqli_fetch_array($select_voucher)) { ?>
                                            <tr class="tr__voucher">
                                                <form action="" method="post">
                                                    <td><img src="https://down-vn.img.susercontent.com/file/db5515d14d95d605ffca8aa0fe91a5f0" alt="voucher" width="120px" height="100px"></td>
                                                    <td style="text-align:left;">Giảm <input type="text" name="" id="" value="<?= number_format($row['giavoucher'], 0, "", ",") ?>" readonly><br>
                                                        Đơn tối thiểu <input type="text" name="" id="" value="<?= number_format($row['dontoithieu'], 0, "", ",") ?>" readonly><br>
                                                        HSD <input type="text" name="" id="" value="<?= $row['hansudung'] ?>" readonly></td>
                                                    <td><input type="submit" name="" id="" value="Chọn"></td>

                                                </form>
                                            </tr>
                                        <?php } ?>
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
                        <?php if (!empty($dem)) { ?>
                            <a href="tranggiohang1.php?action=deleteall" class="content_input_chonall1">Xóa (<?= $dem ?>) sản phẩm</a>
                        <?php } else { ?>
                            <a href="tranggiohang1.php?action=deleteall" class="content_input_chonall1">Xóa tất cả sản phẩm</a>
                        <?php } ?>
                        <input type="submit" name="" id="" value="Bỏ sản phẩm không hoạt động" class="content_input_spkohoatdong">
                        <div class="main__tooltip">
                            <?php if (!empty($dem)) { ?>
                                <input type="submit" name="" id="" value="Tổng thanh toán(<?= $dem ?>):" class="tongthanhtoan">
                            <?php } else { ?>
                                <input type="submit" name="" id="" value="Tổng thanh toán(0):" class="tongthanhtoan"><input type="text" name="" id="" value="0đ" readonly class="tongtien" />
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
                                    <?php if (!empty($total)) { ?>
                                        <div class=""><input type="text" name="" id="" value="<?= $total ?>đ" readonly></div>
                                    <?php } else { ?>
                                        <div class=""><input type="text" name="" id="" value="0đ" readonly></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($total)) { ?>
                            <input type="text" name="" id="" value="<?= number_format($total, 0, "", ",") ?>đ" readonly class="tongtien" />
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
                                    <form action="" method="post">
                                        <?php
                                        $discount = ceil(($row['giakhuyenmai'] / $row['gia']) * 100);
                                        if ($discount == 0) { ?>
                                            <div class=""></div>
                                        <?php } else { ?>
                                            <div class="nhan_giamgia"><?= $discount ?> %</div>
                                        <?php } ?>
                                        <a href="Module/product-details.php?id=<?= $row['ID'] ?>"><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" /></a>
                                        <a href="Module/product-details.php?id=<?= $row['ID'] ?>">
                                            <h3 style="text-align:left"><?= $row['ten_sp'] ?></h3>
                                        </a>
                                        <div class="main_sanpham">
                                            <div class="giasanpham"><?= $row['gia'] ?><sup>đ</sup></div>
                                            <?php if ($discount == 0) { ?>
                                                <div class=""></div>
                                            <?php } else { ?>
                                                <div class="giagiamsanpham"><?= $row['giakhuyenmai']  ?><sup>đ</sup></div>
                                            <?php } ?>
                                        </div>
                                        <div class="main_luotban">Đã bán:<?php $dem_daban ?></div>
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
<?php require('../Layout/Footer.php') ?>

</html>