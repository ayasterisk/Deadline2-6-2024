
<?php
    include "database.php";
?>
<?php
    class product{
        private $db;
        public function __construct(){
            $this -> db = new Database();
        }
        public function show_product(){
            $query = "SELECT * FROM chitietsanpham ORDER BY ma_sp DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function insert_product(){
            $product_id = $_POST['product_id'];
            $product_name = $_POST['product_name'];
            $cartegory_name = $_POST['cartegory_name'];
            $cartegory_id = $_POST['cartegory_id'];
            $localbrand_name = $_POST['localbrand_name'];
            $product_size = $_POST['product_size'];
            $product_color = $_POST['product_color'];
            $link_to_picture = $_POST['link_to_picture'];
            $cost = $_POST['cost'];
            $cost_sale = $_POST['cost_sale'];
            $product_img = $_FILES['product_img']['name'];
            move_uploaded_file($_FILES['product_img']['tmp_name'],"../Image/".$_FILES['product_img']['name']);
            $amount = $_POST['amount'];
            $product_desc = $_POST['product_desc'];

            $query = "INSERT INTO chitietsanpham(
            ma_sp,
            ten_sp,
            loaisp,
            ma_danhmuc,
            tenhang,
            kichthuoc,
            mausac,
            linkanhchitiet,
            gia,
            giakhuyenmai,
            ten_fileanh,
            soluong,
            Mota) VALUES (
            '$product_id',
            '$product_name',
            '$cartegory_name',
            '$cartegory_id',
            '$localbrand_name',
            '$product_size',
            '$product_color',
            '$link_to_picture',
            '$cost',
            '$cost_sale',
            '$product_img',
            '$amount',
            '$product_desc')";
            $result = $this -> db -> insert($query);
            // header('Location:brand_list.php');
            return $result;
        }
        public function delete_product($product_id){
            $query = "DELETE FROM chitietsanpham WHERE ma_sp = '$product_id'";
            $result = $this -> db -> delete($query);
            header('Location:product_list.php');
            return $result;
        }

        public function get_product($product_id){
            $query = "SELECT * FROM chitietsanpham WHERE ma_sp = '$product_id'";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function update_product($product_name,$product_id,$cartegory_name,$cartegory_id,$localbrand_name,$product_size,$product_color,$link_to_picture,$cost,$cost_sale,$product_img,$amount,$product_desc){
            $query = "UPDATE chitietsanpham SET ten_sp = '$product_name', ma_sp = '$product_id', loaisp = '$cartegory_name',ma_sp = '$cartegory_id',tenhang = '$localbrand_name',kichthuoc = '$product_size',mausac = '$product_color',linkanhchitiet = '$link_to_picture',gia = '$cost',giakhuyenmai = '$cost_sale',ten_fileanh = '$product_img',soluong = '$amount',Mota = '$product_desc' WHERE ma_sp = '$product_id' ";
            $result = $this -> db -> update($query);
            header('Location:product_list.php');
            return $result;
        }
        public function show_brand_ajax($cartegory_id){
            $query = "SELECT * FROM tbl_brand WHERE cartegory_id = '$cartegory_id'";
            $result = $this -> db -> select($query);
            return $result;
        }
        // public function insert_product(){
        //     $product_name = $_POST['product_name'];
        //     $cartegory_id = $_POST['cartegory_id'];
        //     $brand_id = $_POST['brand_id'];
        //     $product_price = $_POST['product_price'];
        //     $product_price_new = $_POST['product_price_new'];
        //     $product_desc = $_POST['product_desc'];
        //     $product_img = $_FILES['product_img']['name'];
        //     $filetarget = basename($_FILES['product_img']['name']);
        //     $filetype = strtolower(pathinfo($product_img,PATHINFO_EXTENSION));
        //     $filesize = $_FILES['product_img']['size'];
        //     if(file_exists("uploads/$filetarget")){
        //         $alert = "File đã tồn tại";
        //         return $alert;
        //     }
        //     else
        //     {   if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg"){
        //         $alert = "File không đúng định dạng!!! Lưu ý: chỉ được phép upload file có định dạng jpg, png, jpeg";
        //         return $alert;
        //     }
        //         else
        //         {
        //             if($filesize > 1000000){
        //                 $alert = "File không được lớn hơn 1MB!!!";
        //                 return $alert;
        //             }
        //             else{
        //                 move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
        //                 $query = "INSERT INTO tbl_product(
        //                 product_name,
        //                 cartegory_id,
        //                 brand_id,
        //                 product_price,
        //                 product_price_new,
        //                 product_desc,
        //                 product_img) 
        //                 VALUES (
        //                 '$product_name',
        //                 '$cartegory_id',
        //                 '$brand_id',
        //                 '$product_price',
        //                 '$product_price_new',
        //                 '$product_desc',
        //                 '$product_img')";
        //                 $result = $this -> db -> insert($query);
        //                 if($result){
        //                     $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
        //                     $result = $this -> db -> select($query) -> fetch_assoc();
        //                     $product_id = $result['product_id'];
        //                     $filename = $_FILES['product_img_desc']['name'];
        //                     $file_tmp = $_FILES['product_img_desc']['tmp_name'];
        //                     foreach($filename as $key => $value){
        //                         move_uploaded_file($file_tmp[$key],"uploads/".$value);
        //                         $query = "INSERT INTO tbl_product_img_desc (product_id,product_img_desc) VALUES ('$product_id','$value')";
        //                         $result = $this -> db -> insert($query);
        //                     }
        //                 }
        //             }
                    
        //         }



                
        //     }

            
        //     // header('Location:brand_list.php');
        //     return $result;
        // }











        
        
        
        
        
        
        
    }
?>