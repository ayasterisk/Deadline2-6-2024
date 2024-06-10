<?php
    include "header.php";
    include "slider.php";
    include "class/cartegory_class.php";
?>
<?php
    $cartegory = new cartegory();
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $cartegory_name= $_POST['cartegory_name'];
        $insert_cartegory = $cartegory -> insert_cartegory($cartegory_name);
    }
?>

<div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
          <h1>Thêm danh mục</h1>
          <form action="" method="POST">
            <input type="text" placeholder="Nhập tên danh mục" name="cartegory_name" required />
            <button type="submit">Thêm</button>
          </form>
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