<?php
session_start();
?>
<?php
require '../../connect.php';
require '../../Layout/Header.php';
//------------
require_once '../phpmailler/Exception.php';
require_once '../phpmailler/PHPMailer.php';
require_once '../phpmailler/SMTP.php';
//------------
require 'scriptthanhtoan.php';
$sql = mysqli_query($conn, "SELECT * FROM `order` ORDER BY id DESC LIMIT 1  ");
?>
<?php
if (!empty($_SESSION['cart'])) {
  $product = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
} ?>
<!DOCTYPE html>
<html class="html">

<head>
  <title>Thanh toán</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="thanhtoan.css" />
  <link rel="stylesheet" href="../../vendors/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
  <form action="thanhtoan.php?action=submit" method="post">
    <div class="container">
      <div class="content__one">
        <div class="SloganThanhToan">
          <h1>THANH TOÁN</h1>
        </div>
        <!--------------------------------->
        <div class="container__nhanhang">
          <div class="container__diachinhanhang">
            <i class="fa-solid fa-location-dot"></i>
            <span>Địa Chỉ Nhận Hàng</span>
          </div>
          <div class="content__thongtinkhachhang">
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
          </div>
        </div>
      </div>
      <!--------------------------------->
      <div class="container__infor">
        <table class="doan_table" border="0" style="border-color: darkgray;border-collapse:collapse;">
          <thead>
            <tr class="doan_tr1">
              <th colspan="2">Sản phẩm</th>
              <th>Loại sản phẩm</th>
              <th>Giảm giá</th>
              <th>Đơn giá</th>
              <th>Số lượng</th>
              <th>Số tiền</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php if (!empty($product)) {
                $total = 0;
                $dem = 0; ?>
                <?php while ($row = mysqli_fetch_array($product)) { ?>
            <tr class="content_tr2">
              <td><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" width="90px" height="90px" /></td>
              <td align="left"> <?= $row['ten_sp'] ?></td>
              <td align="center"><?= $row['loaisp'] ?></td>
              <td align="center"><?= ceil(($row['giakhuyenmai'] / $row['gia']) * 100) ?><sup>%</sup></td>
              <td align="center"><?= $row['gia'] ?><sup>đ</sup></td>
              <td align="center"><?= $_SESSION['cart'][$row['ID']] ?></td>
              <td align="center"><?= $row['gia'] ?><sup>đ</sup></td>
            </tr>
            <?php $dem++; ?>
          <?php $total += $row['gia'] * $_SESSION['cart'][$row['ID']];
                } ?>
        <?php } ?>
        </tr>
          </tbody>
        </table>
        <!--------------------------------->
        <div class="container__maintext">
          <div class="container__text">
            <label>Lời nhắn:</label>
            <input type="text" placeholder="Lưu ý cho người bán..." class="textboxluuy" size="32">
          </div>
        </div>
        <!---------------------------->
        <div class="container__PTTT">
          <div class="PTTT__thanhtoan">Phương thức thanh toán:</div>
          <div><input type="button" value="<?php ?>" readonly></div>
          <div><input type="button" value="Ví FF"></div>
          <div class="bank">
            <select>
              <option value="Chọn Ngân hàng">Chọn Ngân hàng</option>
              <option value="Option2">Option2</option>
              <option value="Option3">Option3</option>
              <option value="Option4">Option4</option>
            </select>
          </div>
          <div class="TheTinDung"><input type="button" value="Thẻ tín dụng/Ghi nợ"></div>
          <div class="nhanhangthanhtoan"><input type="button" value="Thanh toán khi nhận hàng"></div>
        </div>
        <div class="hoadontong">
          <div class="hoadontong0"> </div>
          <div class="hoadontong1">
            <label for="">Tổng tiền hàng:</label><input type="text" name="" class="hoadontong1__ip1" value="<?= $total ?>" readonly><br>
            <label for="">Phí vận chuyển:</label><input type="text" name="" class="hoadontong1__ip2" value="<?php ?>" readonly><br>
            <label for="">Tổng voucher khuyến mãi:</label><input type="text" name="" class="hoadontong1__ip3" value="<?php ?>" readonly><br>
            <label for="">Khuyến mãi:</label><input type="text" name="" class="hoadontong1__ip6" value="<?php ?>" readonly><br>
            <label for="">Tổng đơn:</label><input type="text" name="" class="hoadontong1__ip4" value="<?php ?>" readonly><br>
            <label for="">Tổng thanh toán:</label><input type="text" name="" class="hoadontong1__ip5" value="<?php ?>" readonly><br>
          </div>
        </div>
        <div class="luuy">
          <p>Nhấn "Đặt hàng" là đồng nghĩa bạn đã đồng ý tuân theo <span><a href="trangdieukhoangthanhtoan.php">Điều khoản</a></span> của chúng tôi</p>
          <input type="submit" name="dathang" id="" value="Đặt hàng">
        </div>
      </div>
    </div>
  </form>
</body>
<?php require "../../Layout/Footer.php" ?>

</html>