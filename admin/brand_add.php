<?php
    include "header.php";
    include "slider.php";
    include "class/brand_class.php";
?>
<?php
    $brand = new brand();
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $cartegory_id= $_POST['cartegory_id'];
        $brand_name= $_POST['brand_name'];
        $insert_brand = $brand -> insert_brand($cartegory_id,$brand_name);
    }
?>
<style>
    select{
      height: 30px;
      width: 200px;
    }
</style>
<div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
          <h1>Thêm loai san pham</h1> <br>
          <form action="" method="POST">
            <select name="cartegory_id" id="">
              <option value="#">--Chon danh muc--</option>
              <?php
              $show_cartegory = $brand -> show_cartegory();
              if($show_cartegory){
                while($result = $show_cartegory -> fetch_assoc()){
              ?>
              <option value="<?php echo $result['ma_danhmuc'] ?>"><?php echo $result['tendanhmuc'] ?></option>
              <?php
                }
              }
              ?>
              
            </select> <br>
            <input type="text" placeholder="Nhập tên loại sản phẩm" name="brand_name" required />
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
