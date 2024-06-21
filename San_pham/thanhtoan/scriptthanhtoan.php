<?php

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
                $insert = mysqli_query($conn, "INSERT INTO `quanlybanhang` (`ma_dh`,`ma_kh`, `thoidiemmuahang`, `diachigiaohang`, `ghichukhachhang`, `tonggiatridonhang`, `trangthai`
                             ) VALUES (NULL,'1','" . time() . "','" . time() . "','1','1','1')");
                $order_id = $conn->insert_id;
                $insertString = "";
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'hanhatdoan7889@gmail.com';
                    $mail->Password   = 'boryatnhwgjwwypa';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;
                    //Recipients
                    $mail->setFrom('hanhatdoan7889@gmail.com', 'FF');
                    $mail->addAddress('Utvanle113@gmail.com');
                    //Content
                    $mail->isHTML(true);
                    $mail->Subject = 'FF';
                    $mail->Body    = 'Chúc mừng bạn đã đặt thành công đơn hàng có mã đơn hàng là 1 từ shop FF của chúng tôi';

                    $mail->send();
                    echo 'Gởi thành công';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
    }
}
