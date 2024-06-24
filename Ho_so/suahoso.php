<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Ho_so.css" />
   <title> Sửa thông tin hồ sơ khách hàng</title>
   <script>
        function confirmChange() {
            var result = confirm("Bạn có chắc chắn muốn thay đổi quê quán không?");
            return result;
        }
    </script>
   <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
        <?php
             include './Layout/Header.php';
         ?>
        <div id ="container">
            <div class = "Edit" ><a href="suahoso.php"><i class="fa fa-user" aria-hidden="true"></i>Sửa thông tin tài khoản</a></div>
            <p id="title">
                Thông tin tài khoản
            </p>
            <div class="container_content">
                <div class="container_content_left">
                    <ul>
                        <li>Tên tài khoản: </li>
                        <li>Số điện thoại: </li>
                        <li>Giới tính: </li>
                        <li>Địa chỉ: </li>
                    </ul>
                </div>
                <form accept-charset="UTF-8" action="xulysuahoso.php" id="create_customer" method="post" onsubmit="return confirmChange()">
                <div class="container_content_right">
                    <ul>
                    <li><input type="text" value=" <?php echo ($_SESSION['fullname']); ?>" name="Hoten"></li>
                    <li><input type="text" value= "<?php echo ($_SESSION['phone']); ?>" name = "Sodienthoai"></li>
                    <li><input type="radio" name="gioitinh" value="001" id ="male"> Nam
                        <input type="radio" name="gioitinh" value="002" id ="female"> Nữ</li>
                    <li><input type="text" value= "<?php echo ($_SESSION['address']); ?>" name = "Quequan"></li>
                    <li><button type="submit"> Đồng ý thay đổi</button></li>
                    </ul>
                </div>
                <script>
                  window.onload = function thayDoiGioiTinh() {
                  var gender = <?php echo json_encode($_SESSION['gender']); ?>;
            // Kiểm tra giá trị số và chọn radio button tương ứng
            if (gender === '001') { 
                document.getElementById("male").checked = true;
            } 
            else if (gender === '002') {
                document.getElementById("female").checked = true;
            }
                  }
        ;
    </script>
                </form>
                
            </div>

        </div>
        <?php
         include './Layout/Footer.php';
        ?>
    
</body>
</html>
