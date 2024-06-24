<!DOCTYPE html>
<html> 
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
       <title> Hỗ trợ khách hàng</title>
       <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    </head>
    <body>
      
      <header class="header">
        <div class="grid">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">
                            <i class="fa-solid fa-hand-sparkles"></i>
                            <span>Future Furniture Shop</span></a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">
                            <i class="fa-solid fa-bell"></i>
                            <span>Thông báo</span>
                        </a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i><span>Thoát</span></a>
                    </li>
                </ul>
            </nav>
            <div class="headerSearch">
                <div class="header__logo">
                    <a href="#"><img src="./asset/Logo.png" alt="logo" width="130px" height="130px"/></a>
                </div>
                <div class="header__search-bar">
                    <div class="header-banner">Trung tâm trợ giúp khách hàng </div> 
                    <div class="header-box">
                        <input type="text" placeholder="Nhập từ khóa hoặc nội dung cần tìm">
                        <a href="#">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a> 
                    </div>
                    
            </div>   
        </div>
    </header>
        <div id ="page-container">
            <div class = "content-menu">
            <ul> 
                <li>
                  <ul>
                    <p>Mua sắm</p> <i class="fa fa-angle-up" aria-hidden="true"></i>
                    <li><a href="Support.php?tag=./Mua_sam/nguoidungmoi">Người dùng mới</a></li> 
                    <li><a href="Support.php?tag=./Mua_sam/thaotac">Thao tác</a></li>
                    <li><a href="Support.php?tag=./Mua_sam/thanhtoandonhang">Thanh toán đơn hàng</a> </li>
                    <li><a href="Support.php?tag=./Mua_sam/khampha">Khám phá</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <p>Khuyến mãi ưu đãi </p><i class="fa fa-angle-up" aria-hidden="true"></i>
                    <li><a href="Support.php?tag=./Khuyen_mai_uu_dai/chuongtrinhkhuyenmai">Chương trình khuyến mãi</a> </li>
                    <li><a href="Support.php?tag=./Khuyen_mai_uu_dai/chuongtrinhchonguoidung">Chương trinh cho người dùng</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <p>Thanh toán</p><i class="fa fa-angle-up" aria-hidden="true"></i>
                    <li><a href="Support.php?tag=./Thanh_toan/thuehoadon">Thuế hóa đơn</a></li>
                    <li><a href="Support.php?tag=./Thanh_toan/phuongthucthanhtoankhac">Phương thức thanh toán khác</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <p>Đơn hàng vận chuyển</p><i class="fa fa-angle-up" aria-hidden="true"></i>
                    <li><a href="Support.php?tag=./Don_hang_van_chuyen/donhang">Đơn hàng</a></li>
                    <li><a href="Support.php?tag=./Don_hang_van_chuyen/danhgia_binhluan">Đánh giá & bình luận</a></li>
                    <li><a href="Support.php?tag=./Don_hang_van_chuyen/thongtinvanchuyenkhac">Thông tin vận chuyển khác</a></li>
                    <li><a href="Support.php?tag=./Don_hang_van_chuyen/phuongthucvanchuyen">Phương thức vận chuyển</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <p>Trả hàng hoặc hoàn tiền</p><i class="fa fa-angle-up" aria-hidden="true"></i>
                    <li><a href="Support.php?tag=./Tra_hang_hoac_hoan_tien/guiyeucau">Gửi yêu cầu</a></li>
                    <li><a href="Support.php?tag=./Tra_hang_hoac_hoan_tien/xulyyeucau">Xử lý yêu cầu</a></li>
                    <li><a href="Support.php?tag=./Tra_hang_hoac_hoan_tien/khieunai">Khiếu nại</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <p>Thông tin chung</p><i class="fa fa-angle-up" aria-hidden="true"></i>
                    <li><a href="./Dieukhoan/index.php">Chính sách</a></li>
                    <li><a href="Support.php?tag=./Thong_tin_chung/taikhoan">Tài khoản</a></li>
                    <li><a href="Support.php?tag=./Thong_tin_chung/muasamantoan">Mua sắm an toàn</a></li>
                    <li><a href="Support.php?tag=./Thong_tin_chung/thuvienthongtin">Thư viện thông tin</a></li>
                  </ul>
                </li>
            </ul>
            </div>
            <div class = "content-warpMain">
              <?php
               $tag = $_GET['tag'];
               //$title = $_GET['title'];
           
               // Kiểm tra xem file tồn tại và include vào
               $file_path = "{$tag}.php";
               if (file_exists($file_path)) {
                   include $file_path;
               } else {
                   echo 'Trang không tồn tại.';
               }
              ?>
          </div>
        </div>
        <footer class="footer">
          <div class="footer-heading">
            <p>Nếu bạn cần thêm thông tin hãy liên hệ</p>
          </div>
          <div class="footer-list">
            <ul>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i>170 An Dương Vương, Tp.Quy Nhơn</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>(0123)456789</li>
              <li><i class="fa fa-envelope" aria-hidden="true"></i>laptrinhwed@gmail.com</li>
            </ul>
          </div>
          <div class="footer-bottom">
            <div class="footer-bottom-trademark">
              <pre>
    © 2021 - Bản quyền của Nhà Xinh - thương hiệu thuộc AKA Furniture
    Từ năm 1999 - thương hiệu đăng ký số 284074 Cục sở hữu trí tuệ
              </pre>
            </div>
            <div class="footer-bottom-icon">
              <p>Theo dõi chúng tôi:</p>
              <a href="#"
                ><i
                  class="fa-brands fa-square-facebook fa-2xl"
                  style="color: white"
                ></i
              ></a>
              <a href="#"
                ><i class="fa-brands fa-youtube fa-2xl" style="color: white"></i
              ></a>
              <a href="#"
                ><i
                  class="fa-brands fa-square-instagram fa-2xl"
                  style="color: white"
                ></i
              ></a>
            </div>
          </div>
      </footer>
        
    </body>
</html>