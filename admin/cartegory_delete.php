<?php
    include "class/cartegory_class.php";
    $cartegory = new cartegory();
    if(!isset($_GET['ma_danhmuc']) || $_GET['ma_danhmuc']==NULL){
        echo "<script>window.location = 'order_list.php'</script";
    }
    else{
        $cartegory_id = $_GET['ma_danhmuc'];
    }
    $delete_cartegory = $cartegory -> delete_cartegory($cartegory_id);
   
?>