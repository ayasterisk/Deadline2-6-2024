
<?php
    include "database.php";
?>
<?php
    class brand{
        private $db;
        public function __construct(){
            $this -> db = new Database();
        }
        public function insert_brand($cartegory_id,$brand_name){
            $query = "INSERT INTO quan_ly_loai_san_pham(ma_danhmuc,loaisp) VALUES ('$cartegory_id','$brand_name')";
            $result = $this -> db -> insert($query);
            header('Location:brand_list.php');
            return $result;
        }
        public function show_cartegory(){
            $query = "SELECT * FROM danhmucsanpham ORDER BY ma_danhmuc DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_brand(){
            // $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
            $query = "SELECT * FROM quan_ly_loai_san_pham ORDER BY ma_loaisp DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function get_brand($brand_id){
            $query = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id'";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function update_brand($cartegory_id,$brand_name,$brand_id){
            $query = "UPDATE tbl_brand SET brand_name = '$brand_name', cartegory_id = '$cartegory_id' WHERE brand_id = '$brand_id' ";
            $result = $this -> db -> update($query);
            header('Location:brand_list.php');
            return $result;
        }
        public function delete_brand($brand_id){
            $query = "DELETE FROM tbl_brand WHERE brand_id = '$brand_id'";
            $result = $this -> db -> delete($query);
            header('Location:brand_list.php');
            return $result;
        }
        
    }
?>