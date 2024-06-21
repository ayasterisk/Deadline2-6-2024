<?php
    include "header.php";
    include "slider.php";
    include "class/product_class.php";
?>

<style>
  .description-cell {
    max-height: 100px; /* Đặt giới hạn chiều cao của ô */
    overflow: hidden; /* Ẩn nội dung vượt quá chiều cao đã đặt */
    text-overflow: ellipsis; /* Hiển thị dấu chấm (...) nếu nội dung bị cắt */
    white-space: nowrap; /* Ngăn cách chuyển dòng tự động */
  }
</style>
<?php
    $product = new product();
    $show_product = $product->show_product();
?>

<div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
          <h1>Danh sách sản phẩm</h1>
          <table>
            <tr style="background-color: orange; color: white">
              <th>Stt</th>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Loại sản phẩm</th>
              <th>Mã danh mục</th>
              <th>Tên hãng</th>
              <th>Kích thước</th>
              <th>Màu sắc</th>
              <th>Link ảnh chi tiết</th>
              <th>Giá</th>
              <th>Giá khuyến mãi</th>
              <th>Tên file ảnh</th>
              <th>Số lượng</th>
              <th>Mô tả</th>
              <th>Tùy chỉnh</th>
            </tr>
            <?php
            if($show_product){
              $i=0;
              while($result=$show_product->fetch_assoc()){
                $i++;
            ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $result['ma_sp']?></td>
              <td><?php echo $result['ten_sp']?></td>
              <td><?php echo $result['loaisp']?></td>
              <td><?php echo $result['ma_danhmuc']?></td>
              <td><?php echo $result['tenhang']?></td>
              <td><?php echo $result['kichthuoc']?></td>
              <td><?php echo $result['mausac']?></td>
              <td><?php echo $result['linkanhchitiet']?></td>
              <td><?php echo $result['gia']?></td>
              <td><?php echo $result['giakhuyenmai']?></td>
              <td><?php echo $result['ten_fileanh']?></td>
              <td><?php echo $result['soluong']?></td>
              <td class="description-cell"><?php echo $result['Mota']?></td>
              <td><a href="product_edit.php?ma_sp=<?php echo $result['ma_sp'] ?>"><i style="color:red" class="fa-solid fa-pen-to-square"></i></a>|<a href="product_delete.php?ma_sp=<?php echo $result['ma_sp'] ?>"><i style="color:red" class="fa-solid fa-trash-can"></i></a></td>
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

