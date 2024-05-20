<div class="Chinhsach">
    <div class="left">
    <ul class="menu">
    <p class="head-filter">
        <strong>
            DANH MỤC TRANG
        </strong>
    </p>
        <li>
            <a href="index.php?page=page2"><div class="filter"><strong>Giới thiệu</strong></div></a>
        </li>
        <li>
            <a href="index.php?page=page1"><div class="filter"><strong>Chính sách vận chuyển</strong></div></a>
        </li>
        <li>
            <a href="index.php?page=page3"><div class="filter"><strong>Chính sách bảo hành</strong></div></a>
        </li>
        <li>
            <a href="index.php?page=page4"><div class="filter"><strong>Hướng dẫn sử dụng vào bảo quản</strong></div></a>
        </li>
        <li>
            <a href="index.php?page=page5"><div class="filter"><strong>Chính sách đổ trả</strong></div></a>
        </li>
        <li>
            <a href="index.php?page=page6"><div class="filter"><strong>Liên hệ</strong></div></a>
        </li>
    </ul>
    <a href=""><img class= "foot-filter" href="" src="./noithat.jpg"></a>
    </div>
    <div class="content">
    <?php
            // Kiểm tra xem trang nào được chọn và bao gồm nội dung tương ứng
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                $allowed_pages = ['page1', 'page2', 'page3', 'page4', 'page5','page6']; // Các trang được phép
                if(in_array($page, $allowed_pages)){
                    include($page . '.php'); // Bao gồm trang con
                } else {
                    echo 'Trang không tồn tại.';
                }
            } else {
                include('page2.php'); // Trang mặc định
            }
            ?>
    </div>
    </div>

<style>

    
.Chinhsach
{
    display: flex;
}
.left
{
    align-self: left;
    height: 700px;
    width: 400px;
}
.head-filter
{
    margin-left: 50px;
    font-size: 20px;
    font-style: aria-hidden;
    font-weight: light;
}
.menu
{
  
    height: 250px;
    width: 300px;
    margin-left: 50px;
    margin-bottom: 20px;
    border: 0.5px solid rgb(211, 195, 211);

}
ul{
    list-style: none;
}
.menu a
{
    text-decoration: none;
    color: black;
}
.menu  li
{
    padding: 5px;

}
.foot-filter
{
    margin-left: 50px;
    height: 300px;
    width: 350px;
    
}
</style>