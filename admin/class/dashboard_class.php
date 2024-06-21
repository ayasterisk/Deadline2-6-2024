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
    }
      