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
<?php
ob_start();
require '../../Layout/Header.php';
require '../../connect.php';
//------------
require_once '../phpmailler/Exception.php';
require_once '../phpmailler/PHPMailer.php';
require_once '../phpmailler/SMTP.php';
//------------
require 'scriptthanhtoan.php';
?>
<?php
if (!empty($_SESSION['cart'])) {
  $product = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
}
?>

<body>
  <div class="container">
    <div class="content__one">
      <div class="SloganThanhToan">
        <h1>THANH TOÁN</h1>
        <div class="" style="font-size: 18px;"><a href="/index.php">Trang chủ</a>><a href="../tranggiohang1.php">Giỏ hàng</a></div>
      </div>
      <!--------------------------------->
      <div class="container__nhanhang">
        <div class="container__diachinhanhang">
          <i class="fa-solid fa-location-dot"></i>
          <span>Địa Chỉ Nhận Hàng</span>
        </div>
        <div class="content__thongtinkhachhang">
          <ul>
            <li><?= $_SESSION['user']['ten_kh'] ?></li>
            <li><?= $_SESSION['user']['sodienthoai'] ?></li>
            <li><?= $_SESSION['user']['diachi'] ?></li>
          </ul>
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
            <?php $giamgia = ceil((($row['gia'] - $row['giakhuyenmai']) / $row['gia']) * 100);
                if ($giamgia == 100) { ?>
              <td align="center">0<sup> %</sup></td>
            <?php } else { ?>
              <td align="center"><?= $giamgia ?><sup> %</sup></td>
            <?php } ?>
            <!-- Đơn giá !-->
            <!-- Đơn giá !-->
            <?php $giamgia = ceil((($row['gia'] - $row['giakhuyenmai']) / $row['gia']) * 100); ?>
            <td align="center">
              <?php if ($giamgia == 100) { ?>
                <?= number_format($row['gia'], 0, "", ",") ?> <sup>đ</sup>
              <?php } else { ?>
                <?= number_format($row['giakhuyenmai'], 0, "", ",") ?> <sup>đ</sup>
              <?php } ?>
            </td>
            <td align="center"><?= $_SESSION['cart'][$row['ID']] ?></td>
            <td align="center">
              <?php if ($giamgia == 100) { ?>
                <?= number_format($row['gia'] * $_SESSION['cart'][$row['ID']], 0, "", ",") ?><sup>đ</sup>
              <?php } else { ?>
                <?= number_format($row['giakhuyenmai'] * $_SESSION['cart'][$row['ID']], 0, "", ",") ?><sup>đ</sup>
              <?php } ?>
            </td>
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
      <?php } ?>
      </tr>
        </tbody>
      </table>
      <!--------------------------------->
      <div class="container__maintext">
        <div class="container__text">
          <label>Lời nhắn:</label>
          <input type="text" placeholder="Lưu ý cho người bán..." class="textboxluuy" size="32" name="luuy">
        </div>
      </div>
      <!---------------------------->
      <div class="container__PTTT">
        <div class="PTTT__thanhtoan">Phương thức thanh toán:</div>
        <div class="bank">
          <a href="thanhtoan.php?click=bank">
            <?php if ($tam == 'bank') { ?>
              <div class="" style="background-color: rgb(224, 126, 73); color:white;padding:15px;">Thanh toán qua MOMO</div>
            <?php } else { ?>
              <div class="" style="border: 1px solid black;padding: 15px;">Thanh toán MOMO</div>
            <?php } ?>
          </a>
        </div>
        <div class="thetindung">
          <a href="thanhtoan.php?click=thetindung">
            <?php if ($tam == 'thetindung') { ?>
              <div class="" style="background-color: rgb(224, 126, 73); color:white;padding:15px;">Thẻ tín dụng/Ghi nợ</div>
            <?php } else { ?>
              <div class="" style="border: 1px solid black;padding: 15px;">Thẻ tín dung/ Ghi nợ</div>
            <?php } ?>
          </a>
        </div>
        <div class="nhanhangthanhtoan">
          <a href="thanhtoan.php?click=thanhtoankhinhanhang">
            <?php if ($tam == 'thanhtoankhinhanhang') { ?>
              <div class="" style="background-color: rgb(224, 126, 73); color:white;padding:15px;">Thanh toán khi nhận hàng</div>
            <?php } else { ?>
              <div class="" style="border: 1px solid black;padding: 15px;">Thanh toán khi nhận hàng</div>
            <?php } ?>
          </a>
        </div>
      </div>
      <div class="" style="margin-left: 5px;margin-top: 20px;border-bottom:1px solid darkgray;padding:10px;">
        <?php
        if ($tam == 'thanhtoankhinhanhang') { ?>
          <p>Thanh toán khi nhận hàng</p><br>
          <p>Phí thu hộ: 0 <sup>đ</sup>. Ưu đãi về phí vận chuyển (nếu có) áp dụng với cả phí thu hộ.</p>
        <?php } elseif ($tam == 'bank') { ?>
          <form method="post" enctype="application/x-www-form-urlencoded" action="thanhtoanmomo.php">
            Click vào đây để thanh toán <input type="submit" name="bank_momo_qr" value="QR MOMO" style="font-size:20px;padding:5px;cursor:pointer;background-color:rgb(224, 126, 73);color:white;">
          </form>
        <?php } ?>
      </div>
      <div class="hoadontong">
        <div class="hoadontong0"> </div>
        <div class="hoadontong1">
          <label for="">Tổng tiền hàng:</label><input type="text" name="" class="hoadontong1__ip1" value="<?= number_format($total, 0, "", ",") ?>đ" readonly><br>
          <label for="">Phí vận chuyển:</label><input type="text" name="" class="hoadontong1__ip2" value="<?= 0 ?>đ" readonly><br>
          <?php if (isset($_SESSION['selected_voucher'])) { ?>
            <label for="">Tổng voucher khuyến mãi:</label><input type="text" name="" class="hoadontong1__ip3" value="<?= $_SESSION['selected_voucher'] ?>đ" readonly><br>
          <?php } else { ?>
            <label for="">Tổng voucher khuyến mãi:</label><input type="text" name="" class="hoadontong1__ip3" value="0đ" readonly><br>
          <?php } ?>
          <?php
          $tonggiamgia = 0;
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
          <label for="">Khuyến mãi:</label><input type="text" name="" class="hoadontong1__ip6" value="<?= ceil(($tonggiamgia - (100 * $count)) / $dem) ?>%" readonly><br>
          <?php if (isset($_SESSION['selected_voucher'])) { ?>
            <label for="">Tổng đơn:</label><input type="text" name="" class="hoadontong1__ip4" value="<?= number_format($total - $_SESSION['selected_voucher'], 0, "", ",") ?>đ" readonly><br>
            <label for="">Tổng thanh toán:</label><input type="text" name="" class="hoadontong1__ip5" value="<?= number_format($total - $_SESSION['selected_voucher'], 0, "", ",") ?>đ" readonly><br>
          <?php } else { ?>
            <label for="">Tổng đơn:</label><input type="text" name="" class="hoadontong1__ip4" value="<?= number_format($total, 0, "", ",") ?>đ" readonly><br>
            <label for="">Tổng thanh toán:</label><input type="text" name="" class="hoadontong1__ip5" value="<?= number_format($total, 0, "", ",") ?>đ" readonly><br>
          <?php } ?>
        </div>
      </div>
      <!------------- NÚT ĐẶT HÀNG !---------------------->
      <form action="thanhtoan.php?action=submit" method="post">
        <div class="luuy">
          <p>Nhấn "Đặt hàng" là đồng nghĩa bạn đã đồng ý tuân theo <span><a href="trangdieukhoangthanhtoan.php">Điều khoản</a></span> của chúng tôi</p>
          <input type="submit" name="dathang" id="" value="Đặt hàng">
        </div>
      </form>
    </div>
  </div>
</body>
<?php require "../../Layout/Footer.php" ?>

</html>