<?php
    include "header.php";
    include "slider.php";
    include "class/customer_class.php";
?>
<?php
    $customer = new customer();
    $customer_id = $_GET['ma_kh'];
      $get_customer = $customer -> get_customer($customer_id);
      if($get_customer){
          $resultA =  $get_customer -> fetch_assoc();
      }



    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $customer_id= $_POST['customer_id'];
        $customer_name= $_POST['customer_name'];
        $user_name= $_POST['user_name'];
        $password= $_POST['password'];
        $birthday= $_POST['birthday'];
        $gender= $_POST['gender'];
        $address= $_POST['address'];
        $phonenumber= $_POST['phonenumber'];
        $credit= $_POST['credit'];
        $debit_card= $_POST['debit_card'];
        $bank_account= $_POST['bank_account'];
        $registration_date= $_POST['registration_date'];
        $referral_code= $_POST['referral_code'];
        $update_customer = $customer -> update_customer($customer_id,$customer_name,$user_name,$password,$birthday,$gender,$address,$phonenumber,$credit,$debit_card,$bank_account,$registration_date,$referral_code);
        if ($update_customer) {
          echo "Update successful";
      } else {
          echo "Update failed";
      }
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
          <h1>Sửa thông tin khách hàng</h1>  <br>
          <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Mã khách hàng <span style="color: red">*</span></label><br>
            <input name="customer_id" type="text" value="<?php echo $resultA['ma_kh'] ?>" required /><br>
            <label for="">Tên khách hàng<span style="color: red">*</span></label><br>
            <input name="customer_name" type="text" value="<?php echo $resultA['ten_kh'] ?>" required /><br>
            <label for="">Tên đăng nhập <span style="color: red">*</span></label><br>
            <input name="user_name" type="text" value="<?php echo $resultA['tendangnhap'] ?>" required /><br>
            <label for="">Mật khẩu <span style="color: red">*</span></label><br>
            <input name="password" type="text" value="<?php echo $resultA['matkhau'] ?>" required /><br>
            <label for="">Ngày sinh <span style="color: red">*</span></label><br>
            <input name="birthday" type="datetime" value="<?php echo $resultA['ngaysinh'] ?>" required /><br>
            <label for="">Giới tính <span style="color: red">*</span></label><br>
            <input name="gender" type="text" value="<?php echo $resultA['gioitinh'] ?>" required /><br>
            <label for="">Địa chỉ <span style="color: red">*</span></label><br>
            <input name="address" type="text" value="<?php echo $resultA['diachi'] ?>" required /><br>
            <label for="">Số điện thoại <span style="color: red">*</span></label><br>
            <input name="phonenumber" type="number" value="<?php echo $resultA['sodienthoai'] ?>" required /><br>
            <label for="">Thẻ tín dụng <span style="color: red">*</span></label><br>
            <input name="credit" type="text" value="<?php echo $resultA['thetindung'] ?>" required /><br>
            <label for="">Thẻ ghi nợ <span style="color: red">*</span></label><br>
            <input name="debit_card" type="text" value="<?php echo $resultA['theghino'] ?>" required /><br>
            <label for="">Tài khoản ngân hàng <span style="color: red">*</span></label><br>
            <input name="bank_account" type="text" value="<?php echo $resultA['taikhoannganhang'] ?>" required /><br>
            <label for="">Ngày đăng ký <span style="color: red">*</span></label><br>
            <input name="registration_date" type="datetime" value="<?php echo $resultA['ngaydangkythanhvien'] ?>" required /><br>
            <label for="">Mã giới thiệu <span style="color: red">*</span></label><br>
            <input name="referral_code" type="text" value="<?php echo $resultA['magioithieu'] ?>" required /><br>
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
