<?php
    include "header.php";
    include "slider.php";
    include "class/order_class.php"
?>


<?php
    $order = new order();
    $show_order = $order->show_order();
?>

<div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
          <h1>Danh sách loại sản phẩm</h1>
          <table>
            <tr>
              <th>Stt</th>
              <th>Mã đơn hàng</th>
              <th>Mã voucher</th>
              <th>Mã sản phẩm</th>
              <th>Số lượng</th>
              <th>Tùy chỉnh</th>
            </tr>
            <?php
            if($show_order){
              $i=0;
              while($result=$show_order->fetch_assoc()){
                $i++;
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $result['ma_dh']?></td>
              <td><?php echo $result['ma_voucher']?></td>
              <td><?php echo $result['ma_sp']?></td>
              <td><?php echo $result['so_luong']?></td>
              <td><a href="order_edit.php?order_id=<?php echo $result['ma_dh'] ?>"><i style="color:red" class="fa-solid fa-pen-to-square"></i></a>|<a href="order_delete.php?ma_dh=<?php echo $result['ma_dh'] ?>"><i style="color:red" class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            <?php
            }
          }
            ?>
          </table>
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

