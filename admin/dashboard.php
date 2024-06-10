<?php
    include "header.php";
    include "slider.php";
?>


<div class="admin-content-right">
        <div class="admin-content-right-home">
          <h1>Trang chủ quản trị</h1>
          <div class="admin-home1">
            <ul>
              <li>
                <span>Tổng số đơn hàng</span>
                <p>10</p>
              </li>
              <li>
                <span>Tổng sản phẩm</span>
                <p>100</p>
              </li>
              <li>
                <span>Khách hàng đã đăng ký</span>
                <p>20</p>
              </li>
            </ul>
          </div>
          <div class="admin-home2">
            <ul>
              <li>
                <span>Doanh thu hôm nay</span>
                <p>10000</p>
              </li>
              <li>
                <span>Doanh thu tuần này</span>
                <p>50000</p>
              </li>
              <li>
                <span>Doanh thu tháng này</span>
                <p>90000</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- tạo ẩn hiện con các danh mục -->
    <script>
      document.querySelectorAll(".menu-item > a").forEach((menuLink) => {
        menuLink.addEventListener("click", function (event) {
          event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a

          const parentItem = this.parentElement;

          // Toggle trạng thái active cho menu hiện tại
          parentItem.classList.toggle("active");
        });
      });
    </script>
  </body>
</html>
