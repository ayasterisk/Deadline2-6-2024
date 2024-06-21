<?php
    include "database.php";
?>
<?php
    class dashboard{
        private $db;
        public function __construct(){
            $this -> db = new Database();
        }
        public function show_total_products() {
            $query = "SELECT COUNT(*) as total_products FROM chitietsanpham";
            $result = $this->db->select($query);
            if ($result) {
                $row = $result->fetch_assoc();
                return $row['total_products'];
            } else {
                return 0; // Nếu không có kết quả, trả về 0
            }
        }
        public function show_total_custumers() {
            $query = "SELECT COUNT(*) as total_custumers FROM quanlykhachhang";
            $result = $this->db->select($query);
            if ($result) {
                $row = $result->fetch_assoc();
                return $row['total_custumers'];
            } else {
                return 0; // Nếu không có kết quả, trả về 0
            }   
        }

        public function show_revenue_today() {
            // Lấy ngày hôm nay theo định dạng Y-m-d
            $today = date('Y-m-d');
    
            // Câu truy vấn để tính tổng thu nhập trong ngày hôm nay, sử dụng IFNULL hoặc COALESCE để xử lý null
            $query = "SELECT IFNULL(SUM(tonggiatridonhang), 0) as total_revenue FROM quanlybanhang WHERE DATE(thoidiemmuahang) = '$today'";
            // Hoặc: $query = "SELECT COALESCE(SUM(amount), 0) as total_revenue FROM revenues WHERE DATE(thoidiemmuahang) = '$today'";
            
            $result = $this->db->select($query);
            if ($result) {
                $row = $result->fetch_assoc();
                return (float)$row['total_revenue'];
            } else {
                return 0.0; // Nếu không có kết quả, trả về 0.0
            }
        }
    }
      