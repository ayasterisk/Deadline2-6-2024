<?php
    include "class/product_class.php";
    $product = new product();
    if(!isset($_GET['ma_sp']) || $_GET['ma_sp']==NULL){
        echo "<script>window.location = 'order_list.php'</script";
    }
    else{
        $product_id = $_GET['ma_sp'];
    }
    $delete_product = $product -> delete_product($product_id);
   
?>