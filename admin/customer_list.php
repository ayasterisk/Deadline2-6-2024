<?php
    include "header.php";
    include "slider.php";
    include "class/customer_class.php";
?>


<?php
    $customer = new customer();
    $show_customer = $customer->show_customer();
?>

<div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
          <h1>Danh sách khách hàng</h1>
          <table>
            <tr>
              <th>Stt</th>
              <th>Mã khách hàng</th>
              <th>Tên khách hàng</th>
              <th>Tên đăng nhập</th>
              <th>Mật khẩu</th>
              <th>Ngày sinh</th>
              <th>Giới tính</th>
              <th>Địa chỉ</th>
              <th>Số điện thoại</th>
              <th>Thẻ tín dụng</th>
              <th>Thẻ ghi nợ</th>
              <th>Tài khoản ngân hàng</th>
              <th>Ngày đăng ký thành viên</th>
              <th>Mã giới thiệu</th>
              <th>Tùy chỉnh</th>
            </tr>
            <?php
            if($show_customer){
              $i=0;
              while($result=$show_customer->fetch_assoc()){
                $i++;
            ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $result['ma_kh']?></td>
              <td><?php echo $result['ten_kh']?></td>
              <td><?php echo $result['tendangnhap']?></td>
              <td><?php echo $result['matkhau']?></td>
              <td><?php echo $result['ngaysinh']?></td>
              <td><?php echo $result['gioitinh']?></td>
              <td><?php echo $result['diachi']?></td>
              <td><?php echo $result['sodienthoai']?></td>
              <td><?php echo $result['thetindung']?></td>
              <td><?php echo $result['theghino']?></td>
              <td><?php echo $result['taikhoannganhang']?></td>
              <td><?php echo $result['ngaydangkythanhvien']?></td>
              <td><?php echo $result['magioithieu']?></td>
              <td><a href="customer_edit.php?ma_kh=<?php echo $result['ma_kh'] ?>"><i style="color:red" class="fa-solid fa-pen-to-square"></i></a>|<a href="customer_delete.php?ma_kh=<?php echo $result['ma_kh'] ?>"><i style="color:red" class="fa-solid fa-trash-can"></i></a></td>
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

