<?php ob_start() ?>
<?php
$errol = false;
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if (isset($_POST['increase'])) {
    foreach ($_POST['quantity'] as $id => $quantity) {
        if ($quantity > 0) {
            $_SESSION['cart'][$id] += 1;
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
if (isset($_POST['reduce'])) {
    foreach ($_POST['quantity'] as $id => $quantity) {
        if ($quantity > 1) {
            $_SESSION['cart'][$id] -= 1;
        }
        if ($quantity == 1) {
            unset($_SESSION['cart'][$id]);
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
if (isset($_GET['action'])) {
    function update_cart($add = false)
    {
        foreach ($_POST['quantity'] as $id => $quantity) {
            if ($quantity == 0) {
                unset($_SESSION['cart'][$id]);
            } else {
                if ($add) {
                    $_SESSION['cart'][$id] += $quantity;
                } else {
                    $_SESSION['cart'][$id] = $quantity;
                }
            }
        }
    }
    switch ($_GET['action']) {
        case "add":
            update_cart(true);
            header('Location:tranggiohang1.php');
            break;
        case "delete":
            if (isset($_GET['id'])) {
                unset($_SESSION['cart'][$_GET['id']]);
            }
            header('Location:tranggiohang1.php');
            break;
        case "deleteall":
            unset($_SESSION['cart']);
            header('Location:tranggiohang1.php');
            break;
        case "submit":
            if (isset($_POST['update_click'])) {
                update_cart();
                header('Location:tranggiohang1.php');
            } elseif (isset($_POST['order_click'])) {
                if (empty($_POST['name'])) {
                    $errol = "Bạn chưa nhập tên người nhận!";
                } elseif (empty($_POST['phone'])) {
                    $errol = "Bạn chưa nhập sô điện thoại người nhận!";
                } elseif (empty($_POST['add'])) {
                    $errol = "Bạn chưa nhập địa chỉ người nhận!";
                } elseif (empty($_POST['quantity'])) {
                    $errol = "Giỏ hàng rỗng";
                }
                if ($errol == false and !empty($_POST['quantity'])) { //LUU THONG TIN VÀO DATABASE
                    $products = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
                    $total = 0;
                    $orderProducts = array();
                    while ($row = mysqli_fetch_array($products)) {
                        $orderProducts[] = $row;
                        $total += $row['gia'] * $_SESSION['cart'][$row['ID']];
                    }
                    $insert = mysqli_query($conn, "INSERT INTO `order` (`id`,`name`, `phone`, `address`, `note`, `total`, `created_time`,`last_update`,`trangthai`
                         ) VALUES (NULL,'".$_POST['name']."','" . $_POST['phone']. "','" . $_POST['add'] . "','" . $_POST['note'] . "','" .$total. "','" . time(). "','".time()."','0')");
                    $order_id = $conn->insert_id;
                    $insertString = "";
                    // foreach ($orderProducts as $key => $product) {
                    //     $insertString .= "(NULL, '" . $order_id . "', '" . $product['ID'] . "', '" . $_POST['quantity'][$product['ID']] . "', '" . $product['gia'] . "', '" . time() . "', '" . time() . "')";
                    //     if ($key != count($orderProducts) - 1) {
                    //         $insertString .= ",";
                    //     }
                    // }
                    //$insertOrder = mysqli_query($conn, "INSERT INTO `order_detail` (`id`, `order_id`, `produc_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES " . $insertString . ";");
                    header('Location:./thanhtoan/thanhtoan.php');
                }

            }
            break;
    }
    
}
if (!empty($_SESSION['cart'])) {
    $product = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
}
?>