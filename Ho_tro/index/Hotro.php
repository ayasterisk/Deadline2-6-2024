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
                <?php
                // Kết nối đến cơ sở dữ liệu
                include 'connect.php';
// Truy vấn để lấy dữ liệu từ bảng content_menu
$sql = "SELECT category, subcategory FROM content_menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Duyệt qua kết quả trả về từ truy vấn
    while($row = $result->fetch_assoc()) {
        // Lấy category từ dòng hiện tại
        $category = $row['category'];
        
        // Kiểm tra nếu subcategory không phải là NULL
        if ($row['subcategory'] !== null) {
            // Giải mã JSON để lấy subcategory
            $subcategory = json_decode($row['subcategory'], true);
            
            // Nếu category chưa tồn tại trong mảng dữ liệu, thêm mới và gán subcategory vào
            if (!isset($data[$category])) {
                $data[$category] = $subcategory;
            } else {
                // Nếu category đã tồn tại, thêm subcategory vào mảng hiện tại
                $data[$category] = array_merge($data[$category], $subcategory);
            }
        }
    }

    // Hiển thị dữ liệu từ mảng đã tạo
    foreach ($data as $category => $subcategory) {
        echo "<li>";
        echo "<ul>";
        echo "<p>".$category."</p> <i class='fa fa-angle-up' aria-hidden='true'></i>";
        $sql2 = "SELECT * FROM content_menu where category = '".$category. "'";
        $result2 = $conn->query($sql2);
        // Kiểm tra nếu có dữ liệu cho subcategory
        
            while($row2 = $result2->fetch_assoc()) 
            {
                echo "<li><a href='?default_title=".urlencode($row2['subcategory'])."'>".$row2['subcategory']."</a></li>";
            }
        
        echo "</ul>";
        echo "</li>";
    }
} else {
    echo "0 kết quả";
}

                ?>
            </ul>
            </div>
            <div class = "content-warpMain">
                <?php
                // Lấy giá trị default_title từ URL hoặc đặt giá trị mặc định
        $default_title = isset($_GET['default_title']) ? $_GET['default_title'] : "Khám phá";

        // Truy vấn để lấy dữ liệu từ bảng content_warp_main dựa trên default_title
        $sql_default = "SELECT * FROM content_warp_main WHERE Title='" . $conn->real_escape_string($default_title) . "'";
        $result_default = $conn->query($sql_default);
        // Thiết lập số mục trên mỗi trang
$items_per_page = 9;

// Tính toán offset dựa trên trang hiện tại
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($current_page - 1) * $items_per_page;

// Truy vấn để lấy dữ liệu từ bảng content_warp_main dựa trên default_title và phân trang
$sql_default = "SELECT * FROM content_warp_main WHERE Title='" . $conn->real_escape_string($default_title) . "' LIMIT $offset, $items_per_page";
$result_default = $conn->query($sql_default);

// Tính toán tổng số mục để phân trang
$sql_count = "SELECT COUNT(*) AS total FROM content_warp_main WHERE Title='" . $conn->real_escape_string($default_title) . "'";
$result_count = $conn->query($sql_count);
$total_items = $result_count->fetch_assoc()['total'];

// Tính toán tổng số trang
$total_pages = ceil($total_items / $items_per_page);
                if ($result_default->num_rows > 0) {
                    // Hiển thị dữ liệu từ bảng content_mainwarp
                    echo "<p>".$default_title."</p>";
                    while($row_default = $result_default->fetch_assoc()) {
                        echo "<ul>";
                        echo "<li><a href='#' class='subtitle-link' data-content='".htmlspecialchars($row_default['Content'], ENT_QUOTES, 'UTF-8')."'>".$row_default['Subtitle']."</a></li>";
                        echo "</ul>";
                    }
                } else {
                    echo "0 kết quả";
                }
                ?>
            </div>
            <div class="pagination">
    <?php if ($total_pages > 1): ?>
        <ul>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li <?php echo ($i === $current_page) ? 'class="active"' : ''; ?>>
                    <a href="?default_title=<?php echo urlencode($default_title); ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    <?php endif; ?>
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
      <script>
document.addEventListener('DOMContentLoaded', (event) => {
    const links = document.querySelectorAll('.subtitle-link');
    const warpMain = document.querySelector('.content-warpMain');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();  // Ngăn chặn hành vi mặc định của liên kết

            // Lấy nội dung từ thuộc tính dữ liệu
            const content = this.getAttribute('data-content');

            // Cập nhật nội dung
            warpMain.innerHTML = `<p>${content}</p>`;
        });
    });

    // Cập nhật nội dung khi liên kết phân trang được nhấp
    const paginationLinks = document.querySelectorAll('.pagination a');
    paginationLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Lấy nội dung cho trang đã chọn bằng AJAX
            const pageUrl = this.getAttribute('href');
            fetch(pageUrl)
                .then(response => response.text())
                .then(html => {
                    warpMain.innerHTML = html;
                })
                .catch(error => console.error('Lỗi khi lấy nội dung:', error));
        });
    });
});
</script>
      <script>
document.addEventListener('DOMContentLoaded', (event) => {
    const links = document.querySelectorAll('.subtitle-link');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();  // Prevent the default link behavior

            // Get the content from the data attribute
            const content = this.getAttribute('data-content');

            // Find the warpMain content container and update its content
            const warpMain = document.querySelector('.content-warpMain');
            warpMain.innerHTML = `<p>${content}</p>`;
        });
    });
});
</script>
    </body>
</html>