<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../vendors/styles.css">
  <link rel="stylesheet" href="../Module/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <title>Trang chi tiết sản phẩm</title>
</head>

<body>
  <?php
  require "../../connect.php";
  include '../../Layout/Header.php';
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
        <?php
          if($product_result['gia']!=0){
          $discount=ceil((($product_result['gia']-$product_result['giakhuyenmai'])/$product_result['gia'])*100);
          if($discount==100){ ?>
              <div class="product-content-right-price">
                <span class="discounted-price"><?= number_format($product_result['gia'],0,"",",") ?><sup>đ</sup></span>
              </div>
        <?php } else{ ?>
          <div class="product-content-right-price">
            <span class="original-price"><?= number_format($product_result['gia'],0,"",",") ?><sup>đ</sup></span>
            <span class="discounted-price"><?= number_format($product_result['giakhuyenmai'],0,"",",") ?><sup>đ</sup></span>
        </div>
        <?php }} ?>  
        <div class="product-content-right-color">
          <p>
            <span style="font-weight: bold">Màu sắc: </span><?= $product_result['mausac'] ?><span></span>
          </p>
          
        </div>
        <div class="product-content-right-size">
          <span style="font-weight: bold">Kích thước:</span><span class="size"><?= $product_result['kichthuoc'] ?></span>
        </div>
        <div class="product-content-right-material">
          <span style="font-weight: bold">Vật liệu:</span><span class="material">Chân kim loại - Da công nghiệp</span>
        </div>
        <form class="product-content-right-quantity" action="../tranggiohang1.php?action=add" method="post"> 
        <br>
        <div class="quantity-wrapper">
            <div class="quantity-button" id="decrease">-</div>
            <input type="text" id="quantity-input" value="1" name="quantity[<?= $product_result['ID'] ?>]" class="quantity-input" />
            <div class="quantity-button" id="increase">+</div>
        </div>
        <br>
          <input type="submit" name="buy-btn" id="" value="MUA NGAY" /> 
        </form>
        <div class="product-content-right-describe">
          <p style="font-weight: bold; margin-top: 20px;">Mô tả:</p>
          <p class="describe" style="margin-top: 10px"><?= $product_result['Mota'] ?></p>
        </div>
      </div>
    </div>
    <script>
        document.getElementById('increase').addEventListener('click', function() {
            var input = document.getElementById('quantity-input');
            input.value = parseInt(input.value) + 1;
        });

        document.getElementById('decrease').addEventListener('click', function() {
            var input = document.getElementById('quantity-input');
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        });
    </script>
  </section>
  <!--  end product content -->

  <section class="related-products">
    <div class="product-title">
      <p>SẢN PHẨM LIÊN QUAN</p>
    </div>
    <div class="related-products-content">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="product-related-item">
          <a href="product-details.php?id=<?= $row['ID'] ?>">
          <div class="sanpham-one">
            <?php
            $discount=ceil(($row['giakhuyenmai']/$row['gia'])*100);
            if($discount==0){ ?>
              <div class=""></div>
            <?php } else{ ?>
              <div class="nhan_giamgia"><?= $discount ?> %</div>
            <?php } ?>
            <a href="product-details.php?id=<?= $row['ID'] ?>"><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" width="267px" height="250px" /></a>
            <a href="product-details.php?id=<?= $row['ID'] ?>"><h1><?= $row['ten_sp'] ?></h1></a>
            <div class="main_sanpham">
            <div class="giasanpham"><?= number_format($row['gia'],0,"",",") ?><sup>đ</sup></div>
            <?php if($discount==0){ ?>
              <div class=""></div>
              <?php }else { ?>
              <div class="giagiamsanpham"><?= number_format($row['giakhuyenmai'],0,"",",")   ?><sup>đ</sup></div>
            <?php }?>
            </div>
          </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </section>
  <?php  include '../../Layout/Footer.php' ?>
  <!-- related products -->
  <!--------------------  Content ---------------------->
  