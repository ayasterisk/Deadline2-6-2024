<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: dangnhap.php"); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Ho_so.css" />
   <title> Hồ sơ khách hàng</title>
   <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
        <header>
            <div class="header-wrapper">
              <div class="header-top">
                <div class="header-top-customer">
                  <p>Hotline: 0123456</p>
                  <a href="#">Khuyến mãi</a>
                  <a href="#">Chăm sóc khách hàng</a>
                </div>
                <div class="header-top-login">
                  <button>Đăng nhập</button>
                  <button>Đăng ký</button>
                </div>
              </div>
            </div>
            <div class="header-bottom">
              <div class="header-bottom-toggle">
                <a href="#"><i class="fa-solid fa-bars"></i></a>
              </div>
              <div class="header-bottom-logo">
                <a href="#"><img src="./Logo.png" alt="" /></a>
              </div>
              <div class="header-bottom-nvbar">
                <ul>
                  <li>
                    <a href="#"
                      >SOFA
                      <i class="fa-solid fa-chevron-down" style="color: white"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >PHÒNG NGỦ
                      <i class="fa-solid fa-chevron-down" style="color: white"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >PHÒNG KHÁCH
                      <i class="fa-solid fa-chevron-down" style="color: white"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >PHÒNG ĂN
                      <i class="fa-solid fa-chevron-down" style="color: white"></i
                    ></a>
                  </li>
                  <li><a href="#">BỘ SƯU TẬP</a></li>
                  <li><a href="#">TRANG TRÍ</a></li>
                  <li><a href="#">THUÊ NỘI THẤT</a></li>
                </ul>
              </div>
              <div class="header-bottom-search">
                <a href="#"
                  ><i class="fa-solid fa-magnifying-glass" style="color: white"></i
                ></a>
              </div>
              <div class="header-bottom-cart">
                <a href="#"
                  ><i class="fa-solid fa-cart-plus" style="color: white"></i
                ></a>
              </div>
            </div>
          </header>
        <div id ="container">
            <div class = "Edit" ><a href=""><i class="fa fa-user" aria-hidden="true"></i>Sửa thông tin tài khoản</a></div>
            <p id="title">
                Thông tin tài khoản
            </p>
            <div class="container_content">
                <div class="container_content_left">
                    <ul>
                        <li>Mã giới thiệu: </li>
                        <li>Tên tài khoản: </li>
                        <li>Tên đăng nhập: </li>
                        <li>Số điện thoại: </li>
                        <li>Giới tính: </li>
                        <li>Địa chỉ: </li>
                        <li>Ngày tạo tài khoản: </li>
                        <li>Ngày đăng nhập gần nhất: </li>
                    </ul>
                </div>
                <div class="container_content_right">
                    <ul>
                    <li><?php echo ($_SESSION['I-ID']); ?></li>
                    <li><?php echo ($_SESSION['fullname']); ?></li>
                    <li><?php echo ($_SESSION['username']); ?></li>
                    <li><?php echo ($_SESSION['phone']); ?></li>
                    <li><?php echo ($_SESSION['gender']); ?></li>
                    <li><?php echo ($_SESSION['address']); ?></li>
                    <li><?php echo ($_SESSION['account_creation_date']); ?></li>
                    <li><?php echo ($_SESSION['last_login_date']); ?></li>
                    </ul>
                </div>
            </div>

        </div>
        <footer>
            <div id="footer-wrapper">
              <div class="footer-top">
                <div class="footer-customer">
                  <div class="footer-title">
                    <p>Chăm sóc khách hàng</p>
                  </div>
                  <div class="footer-content">
                    <p><a href="#">Trung tâm trợ giúp</a></p>
                    <p><a href="#">FF-Mail</a></p>
                    <p><a href="#">Hướng dẫn mua hàng</a></p>
                  </div>
                </div>
                <div class="footer-introduction">
                  <div class="footer-title">
                    <p>Giới thiệu</p>
                  </div>
                  <div class="footer-content">
                    <p><a href="#">Về chúng tôi</a></p>
                    <p><a href="#">Tuyển dụng</a></p>
                    <p><a href="#">Điều khoản</a></p>
                  </div>
                </div>
                <div class="footer-policy">
                  <div class="footer-title">
                    <p>Chính sách</p>
                  </div>
                  <div class="footer-content">
                    <p><a href="#">Chính sách liên kết</a></p>
                    <p><a href="#">Chính sách bảo hành</a></p>
                    <p><a href="#">Chính sách đổi trả</a></p>
                  </div>
                </div>
                <div class="footer-infor">
                  <div class="footer-title">
                    <p>Thông tin liên hệ</p>
                  </div>
                  <div class="footer-content">
                    <p>
                      <i class="fa-solid fa-location-dot" style="color: white"></i>
                      <a href="#">170 An Dương Vương, Tp. Quy Nhơn</a>
                    </p>
                    <p>
                      <i class="fa-solid fa-phone" style="color: white"></i>
                      <a href="#">(0123)456789</a>
                    </p>
                    <p>
                      <i class="fa-solid fa-envelope" style="color: white"></i>
                      <a href="#">laptrinhweb@gmail.com</a>
                    </p>
                  </div>
                </div>
                <div class="footer-qr">
                  <img src="./QR.png" alt="" />
                </div>
              </div>
              <hr />
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
            </div>
          </footer>
    
</body>
</html>