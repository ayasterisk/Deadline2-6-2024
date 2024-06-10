<?php
    include "header.php";
    include "slider.php";
    include "class/product_class.php"
?>
<?php
  $product = new product();
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $insert_product = $product -> insert_product($_POST,$_FILES);
  }
?>

<div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
          <h1>Thêm sản phẩm</h1>  <br>
          <form action="" method="POST" enctype="multipart/form-data">
            <label for=""
              >Nhập tên sản phẩm <span style="color: red">*</span></label
            >  <br>
            <input name="product_name" type="text" required />  <br>
            <label for=""
              >Nhập mã sản phẩm <span style="color: red">*</span></label
            > <br>
            <input name="product_id" type="text" required />  <br>
            <label for=""
              >Nhập loại sản phẩm <span style="color: red">*</span></label
            > <br>
            <input name="cartegory_name" type="text" required />  <br>
            
            
            <label for=""
              >Chọn danh mục <span style="color: red">*</span></label
            > <br>
            <select name="cartegory_id" id="cartegory_id">
              <option value="#">--Chọn--</option>
              <option value="SOFA">SOFA</option>
              <option value="BEDS">PHÒNG NGỦ</option>
              <option value="LIVS">PHÒNG KHÁCH</option>
              <option value="BATH">PHÒNG TẮM</option>
              <option value="KITS">BẾP</option>
              <option value="DECO">TRANG TRÍ</option>
            </select>

            <label for=""
              >Nhập tên hãng <span style="color: red">*</span></label
            > <br>
            <input name="localbrand_name" type="text" required />  <br>
            <label for=""
              >Nhập kích thước <span style="color: red">*</span></label
            > <br>
            <input name="product_size" type="text" required />  <br>
            <label for=""
              >Nhập màu sản phẩm<span style="color: red">*</span></label
            > <br>
            <input name="product_color" type="text" required />  <br>
            <label for=""
              >Link ảnh<span style="color: red">*</span></label
            >  <br>
            <input name="link_to_picture" type="text" required />  <br>
            <label for=""
              >Nhập giá bán <span style="color: red">*</span></label
            > <br>
            <input name="cost" type="number" required /> <br>
            <label for=""
              >Nhập khuyến mãi <span style="color: red">*</span></label
            > <br>
            <input name="cost_sale" type="number" required />  <br>
            
            <label for="">Ảnh sản phẩm <span style="color: red">*</span></label> <br>
            <span style="color:red"><?php if(isset($insert_product)){
              echo ($insert_product);
            } ?></span> <br>
            <input name="product_img" type="file" required/> <br>
            <label for=""
              >Nhập số lượng <span style="color: red">*</span></label
            > <br>
            <input name="amount" type="number" required /> <br>
            <label for=""
              >Mô tả sản phẩm<span style="color: red">*</span></label
            > <br>
            <textarea name="product_desc" id="" cols="30" rows="10"></textarea> <br>
            
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

  <script>
    $(document).ready(function(){
      $("#cartegory_id").change(function(){
        // alert($(this).val())
        var x = $(this).val()
        $.get("product_add_ajax.php",{cartegory_id:x},function(data){
          $("#brand_id").html(data);
        })
      })
    })
  </script>

  
</html>
