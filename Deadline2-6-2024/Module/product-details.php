<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../styles.css"/>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <title>Trang chi tiết sản phẩm</title>
</head>

<body>
  <?php
  require "../connect.php";
  include('Header.php');
  $mysql = "SELECT *From chitietsanpham ORDER By gia desc LIMIT 8";
  $result = mysqli_query($conn, $mysql);
  $product = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID =" . $_GET['id']);
  $product_result = mysqli_fetch_assoc($product);
  ?>
  <!---------------------- Content -------------------->
  <section class="product">
    <div class="product-content">
      <div class="product-content-left">
        <div class="product-content-left-small-image">
          <img src="./anh1.jpg" alt="" />
          <img src="./anh2.jpg" alt="" />
          <img src="./anh3.gif" alt="" />
          <img src="./anh4.jpg" alt="" />
          <img src="./anh5.jpg" alt="" />
        </div>
        <div class="product-content-left-big-image">
          <img src="<?= $product_result['linkanhchitiet'] ?>" alt="" />
        </div>
      </div>
      <div class="product-content-right">
        <div class="product-content-right-name">
          <h1><?= $product_result['ten_sp'] ?></h1>
          <p><?= $product_result['ma_sp'] ?></p>
        </div>
        <div class="product-content-right-price">
          <span class="original-price"><?= number_format($product_result['gia'],0,"",",") ?><sup>đ</sup></span>
          <span class="discounted-price"><?= number_format($product_result['giakhuyenmai'],0,"",",") ?><sup>đ</sup></span>
        </div>
        <div class="product-content-right-color">
          <p>
            <span style="font-weight: bold">Màu sắc:</span><?= $product_result['mausac'] ?><span></span>
          </p>
          
        </div>
        <div class="product-content-right-size">
          <span style="font-weight: bold">Kích thước:</span><span class="size"><?= $product_result['kichthuoc'] ?></span>
        </div>
        <div class="product-content-right-material">
          <span style="font-weight: bold">Vật liệu:</span><span class="material">Chân kim loại - Da công nghiệp</span>
        </div>
        <form class="product-content-right-quantity" action="../tranggiohang1.php?action=add" method="post">
          <input type="text"  id="" value="1" name="quantity[<?= $product_result['ID'] ?>]" size="5" style="padding: 5px;" /><br>
          <input type="submit" name="" id="" value="MUA HÀNG" style="padding: 5px;" />
        </form>
      </div>
    </div>
  </section>
  <!--  end product content -->

  <section class="related-products">
    <div class="product-title">
      <p>SẢN PHẨM LIÊN QUAN</p>
    </div>
    <div class="related-products-content">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="product-related-item">
          <img src="<?= $row['linkanhchitiet'] ?>" alt="" />
          <h1><?= $row['ten_sp'] ?></h1>
          <div class="pri-bottom">
            <div class="pri-cost"><?= number_format($row['giakhuyenmai'],0,"",",") ?><sup>đ</sup></div>
            <div class="pri-reduce-price"><?= number_format($row['gia'],0,"",",") ?><sup>đ</sup></div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
  <?php include('Footer.php'); ?>
  <!-- related products -->
  <!--------------------  Content ---------------------->