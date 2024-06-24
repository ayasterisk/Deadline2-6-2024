<?php
session_start();
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
              <a href="/Deadline2-6-2024/dangxuat.php">Đăng xuất</a>
              <?php else: ?>
                <a href="/Deadline2-6-2024/dangnhap.php">Đăng nhập</a>
                |
                <a href="/Deadline2-6-2024/dangky.php">Đăng ký</a>
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
            <a href="#"
              ><i class="fa-solid fa-cart-shopping" style="color: black"></i
            ></a>
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
            <a href="#"
              ><i class="fa-solid fa-cart-shopping" style="color: black"></i
            ></a>
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