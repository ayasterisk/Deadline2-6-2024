<?php
    include "header.php";
    include "slider.php";
    include "class/brand_class.php";
?>


<?php
    $brand = new brand();
    $show_brand = $brand->show_brand();
?>

<div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
          <h1>Danh sách loại sản phẩm</h1>
          <table>
            <tr>
              <th>Stt</th>
              <th>ID</th>
              <th>Danh mục</th>
              <th>Loại sản phẩm</th>
              <th>Tùy Chỉnh</th>
            </tr>
            <?php
            if($show_brand){
              $i=0;
              while($result=$show_brand->fetch_assoc()){
                $i++;
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $result['brand_id']?></td>
              <td><?php echo $result['cartegory_name']?></td>
              <td><?php echo $result['brand_name']?></td>
              <td><a href="brand_edit.php?brand_id=<?php echo $result['brand_id'] ?>">Sửa</a>|<a href="brand_delete.php?brand_id=<?php echo $result['brand_id'] ?>">Xóa</a></td>
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

