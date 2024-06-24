<?php
if(isset($_GET['click'])){
    $tam=$_GET['click'];
}
else{
    $tam='';
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;       
use PHPMailer\PHPMailer\Exception;

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'submit':
            if (isset($_POST['dathang'])) {
                mysqli_query($conn, "DELETE FROM `order` WHERE trangthai=0");
                $products = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
                $total = 0;
                $orderProducts = array();
                while ($row = mysqli_fetch_array($products)) {
                    $orderProducts[] = $row;
                    $total += $row['gia'] * $_SESSION['cart'][$row['ID']];
                }
                $insert = mysqli_query($conn, "INSERT INTO `quanlybanhang` (`ma_dh`,`ma_kh`, `thoidiemmuahang`, `diachigiaohang`, `ghichukhachhang`, `tonggiatridonhang`, `trangthai`,`hinhthucthanhtoan`
                             ) VALUES (NULL,'".$_SESSION['user']['ma_kh']."','" . time() . "','" . time() . "','" . $_POST['luuy']. "','".$total."','1','.$tam.')");
                $order_id = $conn->insert_id;
                $insertString = "";
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_OFF;
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'hanhatdoan7889@gmail.com';
                    $mail->Password   = 'boryatnhwgjwwypa';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;
                    //Recipients
                    $mail->setFrom('hanhatdoan7889@gmail.com', 'FF');
                    $mail->addAddress($_SESSION['user']['tendangnhap']);
                    //Content
                    $mail->isHTML(true);
                    $mail->Subject = 'FF';
                    $order_link="http://localhost/Deadline2-6-2024/San_pham/index.php";
                    $text= 'vào đây';
                    $donhang= mysqli_query($conn,"SELECT*FROM quanlybanhang ORDER BY ma_dh desc LIMIT 1");
                    while ($row= mysqli_fetch_array($donhang)){
                    $mail->Body    = 'Chúc mừng quý khách đã đặt thành công đơn hàng có mã đơn hàng là ' .$row['ma_dh']. ' từ shop FF của chúng tôi.<br>
                    Cảm ơn quý khách đã tin tưởng và mua hàng bên shop chúng tôi. <br>
                    Xin mời quý khách click <a href="'.$order_link.'">'.$text.'</a> để tiếp tục mua hàng.';
                    }
                    $mail->send();
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                // Đặt biến session để lưu trạng thái đặt hàng thành công
                $_SESSION['order_success'] = true;

                unset($_SESSION['cart']);
                unset($_SESSION['selected_voucher']);
                unset($_SESSION['glb_count']);
                header('Location: /Deadline2-6-2024/index.php');
                exit();
            }
    }
}
