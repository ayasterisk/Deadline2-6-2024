<?php
session_start();
include "connect.php";
if (isset( $_SESSION['user'])){
unset($_SESSION['selected_voucher']);
unset($_SESSION['user']);
unset($_SESSION['cart']);
unset($_SESSION['glb_count']);}
header('location: index.php');
?>