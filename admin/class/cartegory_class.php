<?php
    include "database.php";
?>
<?php
    class cartegory{
        private $db;
        public function __construct(){
            $this -> db = new Database();
        }
        public function insert_cartegory($cartgory_name){
            $query = "INSERT INTO danhmucsanpham(tendanhmuc) VALUES ('$cartgory_name')";
            $result = $this -> db -> insert($query);
            header('Location:cartegory_list.php');
            // return $result;
        }
        public function show_cartegory(){
            $query = "SELECT * FROM danhmucsanpham ORDER BY ma_danhmuc DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function get_cartegory($cartegory_id){
            $query = "SELECT * FROM danhmucsanpham WHERE ma_danhmuc = '$cartegory_id'";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function update_cartegory($cartegory_name,$cartegory_id){
            $query = "UPDATE danhmucsanpham SET tendanhmuc = '$cartegory_name' WHERE ma_danhmuc = '$cartegory_id' ";
            $result = $this -> db -> update($query);
            header('Location:cartegory_list.php');
            return $result;
        }
        public function delete_cartegory($cartegory_id){
            $query = "DELETE FROM danhmucsanpham WHERE ma_danhmuc = '$cartegory_id'";
            $result = $this -> db -> delete($query);
            header('Location:cartegory_list.php');
            return $result;
        }
    }
?>