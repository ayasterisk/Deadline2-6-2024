
<?php
    include "database.php";
?>
<?php
    class customer{
        private $db;
        public function __construct(){
            $this -> db = new Database();
        }
        public function show_customer(){
            $query = "SELECT * FROM quanlykhachhang ORDER BY ma_kh DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        
        
        public function delete_customer($customer_id){
            $query = "DELETE FROM quanlykhachhang WHERE ma_kh = '$customer_id'";
            $result = $this -> db -> delete($query);
            header('Location:customer_list.php');
            return $result;
        }

        public function get_customer($customer_id){
            $query = "SELECT * FROM quanlykhachhang WHERE ma_kh = '$customer_id'";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function update_customer($customer_id,$customer_name,$user_name,$password,$birthday,$gender,$address,$phonenumber,$credit,$debit_card,$bank_account,$registration_date,$referral_code){
            $query = "UPDATE quanlykhachhang SET ma_kh = '$customer_id', ten_kh = '$customer_name', tendangnhap = '$user_name',matkhau = '$password',ngaysinh = '$birthday',gioitinh = '$gender',diachi = '$address',sodienthoai = '$phonenumber',thetindung = '$credit',theghino = '$debit_card',taikhoannganhang = '$bank_account',ngaydangkythanhvien = '$registration_date',magioithieu = '$referral_code' WHERE ma_kh = '$customer_id' ";
            $result = $this -> db -> update($query);
            header('Location:customer_list.php');
            return $result;
        }
        public function show_brand_ajax($cartegory_id){
            $query = "SELECT * FROM tbl_brand WHERE cartegory_id = '$cartegory_id'";
            $result = $this -> db -> select($query);
            return $result;
        }

        
        
        
        
    }
?>