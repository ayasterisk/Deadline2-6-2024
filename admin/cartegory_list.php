<?php
    include "header.php";
    include "slider.php";
    include "class/cartegory_class.php";
?>


<?php
    $cartegory = new cartegory();
    $show_cartegory = $cartegory->show_cartegory();
?>

<div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
          <h1>Danh sách danh mục</h1>
          <table>
            <tr>
              <th>Stt</th>
              <th>ID</th>
              <th>Danh mục</th>
              <th>Tùy chỉnh</th>
            </tr>
            <?php
            if($show_cartegory){
              $i=0;
              while($result=$show_cartegory->fetch_assoc()){
                $i++;
            ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $result['ma_danhmuc']?></td>
              <td><?php echo $result['tendanhmuc']?></td>
              <td><a href="cartegory_edit.php?cartegory_id=<?php echo $result['ma_danhmuc'] ?>"><i style="color:red" class="fa-solid fa-pen-to-square"></i></a>|<a href="cartegory_delete.php?cartegory_id=<?php echo $result['ma_danhmuc'] ?>"><i style="color:red" class="fa-solid fa-trash-can"></i></a></td>
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

