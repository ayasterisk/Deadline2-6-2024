<?php
    include "header.php";
    include "slider.php";
    include "class/product_class.php";
?>
<?php
    $product = new product();
    $product_id = $_GET['ma_sp'];
      $get_product = $product -> get_product($product_id);
      if($get_product){
          $resultA =  $get_product -> fetch_assoc();
      }



    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $product_name= $_POST['product_name'];
        $product_id= $_POST['product_id'];
        $cartegory_name= $_POST['cartegory_name'];
        $cartegory_id= $_POST['cartegory_id'];
        $localbrand_name= $_POST['localbrand_name'];
        $product_size= $_POST['product_size'];
        $product_color= $_POST['product_color'];
        $link_to_picture= $_POST['link_to_picture'];
        $cost= $_POST['cost'];
        $cost_sale= $_POST['cost_sale'];
        $product_img= $_FILES['product_img']['name'];
        $amount= $_POST['amount'];
        $product_desc= $_POST['product_desc'];
        $update_product = $product -> update_product($product_name,$product_id,$cartegory_name,$cartegory_id,$localbrand_name,$product_size,$product_color,$link_to_picture,$cost,$cost_sale,$product_img,$amount,$product_desc);
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
          <h1>Thêm sản phẩm</h1>  <br>
          <form action="" method="POST" enctype="multipart/form-data">
            <label for=""
              >Nhập tên sản phẩm <span style="color: red">*</span></label
            >  <br>
            <input  name="product_name" type="text" value="<?php echo $resultA['ten_sp'] ?>" required />  <br>
            <label for=""
              >Nhập mã sản phẩm <span style="color: red">*</span></label
            > <br>
            <input name="product_id" type="text" value="<?php echo $resultA['ma_sp'] ?>" required />  <br>
            <label for=""
              >Nhập loại sản phẩm <span style="color: red">*</span></label
            > <br>
            <input name="cartegory_name" type="text" value="<?php echo $resultA['loaisp'] ?>" required />  <br>
            
            
            <label for=""
              >Chọn danh mục <span style="color: red">*</span></label
            > <br>
            <select name="cartegory_id" id="cartegory_id">
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
            <input name="localbrand_name" type="text" value="<?php echo $resultA['tenhang'] ?>" required />  <br>
            <label for=""
              >Nhập kích thước <span style="color: red">*</span></label
            > <br>
            <input name="product_size" type="text" value="<?php echo $resultA['kichthuoc'] ?>" required />  <br>
            <label for=""
              >Nhập màu sản phẩm<span style="color: red">*</span></label
            > <br>
            <input name="product_color" type="text" value="<?php echo $resultA['mausac'] ?>" required />  <br>
            <label for=""
              >Link ảnh<span style="color: red">*</span></label
            >  <br>
            <input name="link_to_picture" type="text" value="<?php echo $resultA['linkanhchitiet'] ?>" required />  <br>
            <label for=""
              >Nhập giá bán <span style="color: red">*</span></label
            > <br>
            <input name="cost" type="number" value="<?php echo $resultA['gia'] ?>" required /> <br>
            <label for=""
              >Nhập khuyến mãi <span style="color: red">*</span></label
            > <br>
            <input name="cost_sale" type="number" value="<?php echo $resultA['giakhuyenmai'] ?>" required />  <br>
            
            <label for="">Ảnh sản phẩm <span style="color: red">*</span></label> <br>
            <span style="color:red"><?php if(isset($insert_product)){
              echo ($insert_product);
            } ?></span> <br>
            <?php $file_name = $resultA['ten_fileanh'] ?>
            <input name="product_img" type="file" value="" required/> <br>
            <label for=""
              >Nhập số lượng <span style="color: red">*</span></label
            > <br>
            <input name="amount" type="number" value="<?php echo $resultA['soluong'] ?>" required /> <br>
            <label for=""
              >Mô tả sản phẩm<span style="color: red">*</span></label
            > <br>
            <textarea name="product_desc" id="" cols="30" rows="10" ><?php echo $resultA['Mota'] ?></textarea> <br>
            
            <button type="submit">Sửa</button>
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
