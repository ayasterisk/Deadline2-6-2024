<?php
    include "class/customer_class.php";
    $customer = new customer();
    if(!isset($_GET['ma_kh']) || $_GET['ma_kh']==NULL){
        echo "<script>window.location = 'order_list.php'</script";
    }
    else{
        $customer_id = $_GET['ma_kh'];
    }
    $delete_customer = $customer -> delete_customer($customer_id);
   
?>