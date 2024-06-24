<?php
    include "header.php";
    include "slider.php";
    include "class/dashboard_class.php";
?>

<?php
    $dashboard = new dashboard();
    $show_total_products = $dashboard->show_total_products();
    $show_total_customers = $dashboard->show_total_custumers();
    $show_revenue_today = $dashboard->show_revenue_today();
    $show_total_revenue = $dashboard->show_total_revenue();
    $show_total_orders = $dashboard->show_total_orders();
?>
<div class="admin-content-right">
        <div class="admin-content-right-home">
          <h1>Trang chủ quản trị</h1>
          <div class="admin-home1">
            <ul>
              <li>
                <span>Tổng số đơn hàng</span>
                <p>
                  <?php
                    echo $show_total_orders;
                  ?>
                </p>
              </li>
              <li>
                <span>Tổng sản phẩm</span>
                <p>
                  <?php 
                  echo $show_total_products;
                  ?>
                </p>
              </li>
              <li>
                <span>Khách hàng đã đăng ký</span>
                <p>
                  <?php
                  echo $show_total_customers;
                  ?>
                </p>
              </li>
            </ul>
          </div>
          <div class="admin-home2">
            <ul>
              <li>
                <span>Doanh thu hôm nay</span>
                <p>
                  <?php
                    echo $show_revenue_today; 
                  ?>
                </p>
              </li>
              <li>
                <span>Doanh thu tuần này</span>
                <p>50000</p>
              </li>
              <li>
                <span>Tổng doanh thu</span>
                <p>
                  <?php
                    echo number_format($show_total_revenue,0,"",",");
                  ?>
                </p>
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
