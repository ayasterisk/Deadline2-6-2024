<!-- Đây là comment của Trình 20/6 vào lúc 6:43 ok! -->
<!-- Bạn có nhìn thấy dòng này ko? -->


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
<?php
ob_start();
require('../Layout/Header.php');
require '../connect.php';
require('scriptcart.php');
$result = mysqli_query($conn, "SELECT * FROM chitietsanpham ORDER BY gia ASC LIMIT 12");
?>

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
                    window.location.href = 'tranggiohang1.php';
                }
            </script>
        <?php } else { ?>
            <div class="content__icon">
                <h2> GIỎ HÀNG </h2>
            </div>
            <div class="" style="text-align:center;"><a href="/Deadline2-6-2024/index.php">Trang chủ</a>><a href="/Deadline2-6-2024/San_pham/index.php">Sản phẩm</a></div>
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
                                        <!-- ảnh !-->
                                        <td><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" width="90px" height="90px" /></td>
                                        <!-- tên sản phẩm !-->
                                        <td align="left">
                                            <?= $row['ten_sp'] ?>
                                        </td>
                                        <!-- loại sản phẩm !-->
                                        <td><?= $row['loaisp'] ?></td>
                                        <!-- giảm giá !-->
                                        <?php $giamgia = ceil((($row['gia'] - $row['giakhuyenmai']) / $row['gia']) * 100);
                                        if ($giamgia == 100) { ?>
                                            <td>0<sup> %</sup></td>
                                        <?php } else { ?>
                                            <td><?= $giamgia ?><sup> %</sup></td>
                                        <?php } ?>
                                        <!-- Đơn giá !-->
                                        <td>
                                            <?php if ($giamgia == 100) { ?>
                                                <?= number_format($row['gia'], 0, "", ",") ?> <sup>đ</sup>
                                            <?php } else { ?>
                                                <?= number_format($row['giakhuyenmai'], 0, "", ",") ?> <sup>đ</sup>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                                <input type="submit" name="reduce" id="" value="-" style="padding:0px 8px 0px 8px;border: 1px solid darkgrey;">
                                                <input type="text" name="quantity[<?= $row['ID'] ?>]" id="" size="3" value="<?= $_SESSION['cart'][$row['ID']] ?>" style="text-align:center">
                                                <input type="submit" name="increase" id="" value="+" style="padding:0px 8px 0px 8px;border: 1px solid darkgrey;">
                                            </form>
                                        </td>
                                        <td>
                                            <?php if ($giamgia == 100) { ?>
                                                <?= number_format($row['gia'] * $_SESSION['cart'][$row['ID']], 0, "", ",") ?><sup>đ</sup>
                                            <?php } else { ?>
                                                <?= number_format($row['giakhuyenmai'] * $_SESSION['cart'][$row['ID']], 0, "", ",") ?><sup>đ</sup>
                                            <?php } ?>
                                        </td>
                                        <td><a href="tranggiohang1.php?action=delete&id=<?= $row['ID'] ?>">Xóa</a></td>
                                    </tr>
                                    <?php $dem++; ?>
                                <?php
                                    if (isset($_SESSION['selected_voucher'])) {
                                        $tienvoucher = (int)($_SESSION['selected_voucher']);
                                    }
                                    if ($giamgia == 100) {
                                        $total += ($row['gia'] * $_SESSION['cart'][$row['ID']]);
                                    } else {
                                        $total += ($row['giakhuyenmai'] * $_SESSION['cart'][$row['ID']]);
                                    }
                                } ?>
                                <tr class="content__tr4" style="background-color: darkgray; color:#f9f9f9f9">
                                    <?php if (isset($tienvoucher)) { ?>
                                        <td colspan="2">Tổng tiền</td>
                                        <td colspan="7" align="right"> <?= number_format($total - $tienvoucher, 0, "", ",") ?> <sup>đ</sup></td>
                                    <?php } else { ?>
                                        <td colspan="2">Tổng tiền</td>
                                        <td colspan="7" align="right"> <?= number_format($total, 0, "", ",") ?> <sup>đ</sup></td>
                                    <?php } ?>
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
                                    <a href="tranggiohang1.php" class="close-giamgia">&times;</a>
                                    <div class="" style="font-size: 30px;">
                                        <h3>VOUCHER</h3>
                                    </div>
                                    <table border="1" style="border-collapse:collapse;margin-top:20px; margin-left:20px;border:none;">
                                        <?php $select_voucher = mysqli_query($conn, "SELECT*FROM quanlyvoucher") ?>
                                        <?php while ($row = mysqli_fetch_array($select_voucher)) {
                                            if ($total >= $row['dontoithieu']) { ?>
                                                <tr class="tr__voucher">
                                                    <form action="" method="post">
                                                        <td><img src="https://down-vn.img.susercontent.com/file/db5515d14d95d605ffca8aa0fe91a5f0" alt="voucher" width="120px" height="100px"></td>
                                                        <td style="text-align:left;">
                                                            <input type="text" name="ten_voucher" id="" value="<?= $row['ten_voucher'] ?>" size="40px"><br>
                                                            Giảm <input type="text" name="voucher_gia" id="" value="<?= $row['giavoucher'] ?>" readonly><br>
                                                            Đơn tối thiểu <input type="text" name="" id="" value="<?= number_format($row['dontoithieu'], 0, "", ",") ?>" readonly><br>
                                                            HSD <input type="text" name="" id="" value="<?= $row['hansudung'] ?>" readonly>
                                                        </td>
                                                        <td><input type="submit" name="select_voucher" id="applyVoucherBt" value="Chọn"></td>

                                                    </form>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content__giamgia">
                        <i class="fa-solid fa-tag"></i>
                        <?php if (isset($product_voucher)) { ?>
                            <?php while ($row = mysqli_fetch_array($product_voucher)) { ?>
                                <span><?= $row['ten_voucher'] ?></span>
                        <?php }
                        } ?>
                        <a href="#content__giamgia_voucher">Tìm hiểu thêm về voucher</a>
                        <div class="content__giamgiavoucher" id="content__giamgia_voucher">
                            <div class="main__giamgia">
                                <a href="tranggiohang1.php" class="close-giamgia">&times;</a>
                                <div>Thông tin voucher</div>
                                <table>
                                    <thead>
                                        <th>Đơn hàng tối thiểu</th>
                                        <th>Khuyến mãi</th>
                                        <th>Phương thức vận chuyển</th>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($product_voucher)) {
                                            foreach ($product_voucher as $voucher) {
                                                if (!empty($voucher)) { ?>
                                                    <tr>
                                                        <td><?= $voucher['ten_voucher'] ?></td>
                                                        <td><?= number_format($voucher['giavoucher'], 0, "", ",") ?><sup>đ</sup></td>
                                                        <td>FF</td>
                                                    </tr>
                                        <?php }
                                            }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="content_thongtinkhachhang">
                        <div class=""><label for="">Người nhận</label><input type="text" name="name" class="content_tthoten" size="40" value="<?= $_SESSION['user']['ten_kh'] ?>"><br></div>
                        <div class=""><label for="">Số điện thoại</label><input type="text" name="phone" value="<?= $_SESSION['user']['sodienthoai'] ?>" class="content_ttsdt" size="40"><br></div>
                        <div class=""><label for="">Địa chỉ</label><input type="text" name="add" placeholder="Nhập địa chỉ" class="content_ttdc" size="40"><br></div>
                        <div class=""><label for="">Ghi chú</label><textarea name="note" class="content_ttghichu"></textarea></div>
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
                                    <?php if (!empty($total)) { ?>
                                        <div class=""><input type="text" value="<?= number_format($total, 0, "", ",") ?>" readonly><sup>d</sup></div>
                                    <?php } else { ?>
                                        <div class=""></div>
                                    <?php } ?>
                                </div>
                                <div class="tooltip_tongtien">
                                    <div class=""><label for="">
                                            <h3>Voucher giảm giá</h3>
                                        </label></div>
                                    <?php
                                    if (!empty($product_voucher)) {
                                        foreach ($product_voucher as $voucher) {
                                            if (!empty($voucher)) { ?>
                                                <div class=""><?= $voucher['ten_voucher'] ?></div>
                                        <?php }
                                        }
                                    } else {
                                        ?>
                                        <div class=""></div>
                                    <?php } ?>
                                </div>
                                <div class="tooltip_tongtien">
                                    <div class=""><label for="">
                                            <h3>Giảm giá sản phẩm</h3>
                                        </label></div>
                                    <?php $tonggiamgia = 0;
                                    $tonggiamgia1 = 0;
                                    $count = 0;
                                    foreach ($product as $phantramgiamgia) {
                                        $tonggiamgia1 = ceil((($phantramgiamgia['gia'] - $phantramgiamgia['giakhuyenmai']) / $phantramgiamgia['gia']) * 100);
                                        $tonggiamgia += $tonggiamgia1;
                                        if ($tonggiamgia1 == 100) {
                                            $count++;
                                        }
                                    }
                                    ?>
                                    <div class=""><input type="text" value="<?= ceil(($tonggiamgia - (100 * $count)) / $dem) ?>" readonly><sup>%</sup></div>
                                </div>
                                <div class="tooltip_tongtien">
                                    <div class=""><label for="">
                                            <h3>Tổng số tiền</h3>
                                        </label></div>
                                    <?php if (!empty($total) and !empty($tienvoucher)) { ?>
                                        <div class=""><input type="text" name="" id="" value="<?= number_format($total - $tienvoucher, 0, "", ",") ?>" readonly><sup>d</sup></div>
                                    <?php } else { ?>
                                        <div class=""><input type="text" name="" id="" value="<?= number_format($total , 0, "", ",") ?>" readonly></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($total) and  !empty($tienvoucher)) { ?>
                            <input type="text" name="" id="" value="<?= number_format($total - $tienvoucher, 0, "", ",") ?>đ" readonly class="tongtien" />
                        <?php }else{ ?>
                            <input type="text" name="" id="" value="<?= number_format($total , 0, "", ",") ?>đ" readonly class="tongtien" />
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
                                        $discount = ceil((($row['gia'] - $row['giakhuyenmai']) / $row['gia']) * 100);
                                        if ($discount == 100) { ?>
                                            <div class=""></div>
                                        <?php } else { ?>
                                            <div class="nhan_giamgia"><?= $discount ?> <sub>%</sub></div>
                                        <?php } ?>
                                        <a href="Module/product-details.php?id=<?= $row['ID'] ?>"><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" /></a>
                                        <a href="Module/product-details.php?id=<?= $row['ID'] ?>">
                                            <h3 style="text-align:left"><?= $row['ten_sp'] ?></h3>
                                        </a>
                                        <div class="main_sanpham">
                                            <?php if ($discount == 100) { ?>
                                                <div class="giasanpham"><?= number_format($row['gia'], 0, "", ",") ?><sup>đ</sup></div>
                                            <?php } else { ?>
                                                <div class="giasanpham"><?= number_format($row['giakhuyenmai'], 0, "", ",") ?><sup>đ</sup></div>
                                                <div class="giagiamsanpham"><?= number_format($row['gia'], 0, "", ",") ?><sup>đ</sup></div>
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