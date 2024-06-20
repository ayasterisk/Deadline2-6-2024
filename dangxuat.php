<?php
session_start();
include "San_pham/connect.php";
if (isset( $_SESSION['user'])){
unset($_SESSION['user']);
unset($_SESSION['cart']);}
header('location: index.php');
?>