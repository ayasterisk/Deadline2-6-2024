<?php
session_start();
include "/xampp/htdocs/Deadline2-6-2024/connect.php";
?>

<!--------------------- header --------------------->
    <header id="initial-header">
      <div class="header-top-wrapper">
        <div class="header-top">
          <div class="header-top-customer">
            <p><i class="fa-solid fa-phone-volume"></i> Hotline: 0123456</p>
            <a href="#">Giới thiệu</a>
            <a href="#">Chăm sóc khách hàng</a>
          </div>
          <div class="header-top-login">
           <?php if(isset($_SESSION['user'])): ?>
           <?php $user=$_SESSION['user'];?>
              <a style="color:gold"
                href="/Deadline2-6-2024/profile.php"><?php echo $user['ten_kh']?>
              </a>
              <a style="font-weight: 200; font-size: small" href="/Deadline2-6-2024/dangxuat.php">Đăng xuất</a>
              <?php else: ?>
                <a style="font-weight: 200; font-size: small" href="/Deadline2-6-2024/dangnhap.php">Đăng nhập</a>
                |
                <a style="font-weight: 200; font-size: small" href="/Deadline2-6-2024/dangky.php">Đăng ký</a>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="header-bottom-wrapper">
        <div class="header-bottom">
          <div class="header-bottom-logo">
            <a href="/Deadline2-6-2024/index.php"><img src="/Deadline2-6-2024/Image/Future furniture.png" alt=""/></a>
          </div>
          <div class="header-bottom-nvbar">
            <ul>
              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php"
                  >SẢN PHẨM
                  
                </a>
              </li>
              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=Livingroom&id=1"
                  >PHÒNG KHÁCH
                  
                </a>
              </li>

              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=Kitchen&id=1"
                  >PHÒNG ĂN
                  
                </a>
              </li>
              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=Bedroom&id=1"
                  >PHÒNG NGỦ
                  
                </a>
              </li>
              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=Bathroom&id=1"
                  >PHÒNG TẮM
                  
                </a>
              </li>
              <li><a href="/Deadline2-6-2024/San_pham/index.php?xem=Decoration&id=1">TRANG TRÍ</a></li>
            </ul>
          </div>

          <div class="header-bottom-search">
            <input type="text" id="search" placeholder="Search for products...">
            <div id="results"></div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="./vendors/search.js"></script>
          </div>
          
          <div class="header-bottom-cart">
            
            <a href="#main-cart"
              ><i class="fa-solid fa-cart-shopping" style="color: black"></i>
              <span> 
                0
              </span>
            </a>
            <div class="main-cart" id="main-cart">
              <div class="cart-wrapper">
                <div class="scroll-cart">
                <a href="#" class="close-cart">&times;</a>
                <form action="">
                <h2>CART</h2>
              <table>
                <thead>
                  <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>SL</th>
                    <th>Chọn<nav></nav></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($_SESSION['cart'])) {
                    $product = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
                  }
                  if(isset($product)){
                  while ($row = mysqli_fetch_array($product)) {
                  ?>
                  <tr>
                    <td style="display: flex; align-items: center;" ><img style="width: 70px" src="<?= $row['linkanhchitiet'] ?>" alt=""><?= $row['ten_sp'] ?></td>
                    <td><p><span><?= $row['gia'] ?></span><sup>đ</sup></p></td>
                    <td><input style="width: 30px; outline: none;" type="number" value="<?= $_SESSION['cart'][$row['ID']] ?>" min="1" max="100"></td>
                    <td style="cursor: pointer;">Xóa</td>
                  </tr>
                  <?php
                  }}
                  else{?>
                    <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
              <div style="text-align: right;" class="price-total">
                <p style="font-weight: bold;">Tổng tiền:<span>2,000,000</span><sup>đ</sup></p>
              </div>
            </form>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </header>


    <header id="sticky-header">

      <div class="header-bottom-wrapper">
        <div class="header-bottom">
          <div class="header-bottom-logo">
            <a href="/Deadline2-6-2024/index.php"><img src="/Deadline2-6-2024/Image/Future furniture.png" alt=""/></a>
          </div>
          <div class="header-bottom-nvbar">
          <ul>
              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=allproduct&id=1"
                  >SẢN PHẨM
                  
                </a>
              </li>
              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=Livingroom&id=1"
                  >PHÒNG KHÁCH
                  
                </a>
              </li>

              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=Kitchen&id=1"
                  >PHÒNG ĂN
                  
                </a>
              </li>
              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=Bedroom&id=1"
                  >PHÒNG NGỦ
                  
                </a>
              </li>
              <li>
                <a href="/Deadline2-6-2024/San_pham/index.php?xem=Bathroom&id=1"
                  >PHÒNG TẮM
                  
                </a>
              </li>
              <li><a href="/Deadline2-6-2024/San_pham/index.php?xem=Decoration&id=1">TRANG TRÍ</a></li>
            </ul>
          </div>
          
          <div class="header-bottom-search">
            <input type="text" id="search" placeholder="Search for products...">
            <div id="results"></div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="./vendors/search.js"></script>
          </div>
          
          <div class="header-bottom-cart">
            <a href="#"
              ><i class="fa-solid fa-cart-shopping" style="color: black"></i>
              <span>0</span>
          </a>
          </div>
        </div>
      </div>
      
      
    </header>
    <script>
      //sticky header
      window.onscroll = function() {
    var initialHeader = document.getElementById("initial-header");
    var stickyHeader = document.getElementById("sticky-header");
    var stickyPoint = initialHeader.offsetHeight;

    if (window.pageYOffset > stickyPoint) {
        stickyHeader.style.top = "0";
    } else {
        stickyHeader.style.top = "-100px";
    }
};

    </script>
    <!--------------------  Header ---------------------->