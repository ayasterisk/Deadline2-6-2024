<?php
    include "class/order_class.php";
    $order = new order();
    if(!isset($_GET['ma_dh']) || $_GET['ma_dh']==NULL){
        echo "<script>window.location = 'order_list.php'</script";
    }
    else{
        $order_id = $_GET['ma_dh'];
    }
    $delete_order = $order -> delete_order($order_id);
   
?>