<!DOCTYPE html>
<html>
<head>
    <title>Nội dung</title>
</head>
<body>
    <div class="content">
        <?php
            // Kiểm tra xem trang nào được yêu cầu từ menu
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
                // Hiển thị nội dung tương ứng
                switch($page) {
                    case 'page1':
                        echo "<h2>CHÍNH SÁCH VẬN CHUYỂN - LẮP ĐẶT</h2>
                        <ol>
                            <li>Khách hàng ở khu vực Tp.HCM: Giao hàng - lắp đặt - thanh toán tại nhà (thời gian 24h)</li>
                            <li>Với khách mua ở tỉnh và các thành phố lân cận khu vực Tp.HCM: Full House sẽ trực tiếp vận chuyển, lắp đặt - thanh toán tại nhà (thời gian 24h)</li>
                            <li>Khách mua hàng ở tỉnh, thành phố khác thuộc miền Trung, miền Bắc: Full House sẽ gửi hàng thông qua các đối tác vận chuyển uy tín đến, có bảo lãnh hàng hoá - giao hàng, lắp đặt thanh toán tại nhà (thời gian 5 đến 8 ngày)</li>
                        </ol>
                
                        <h2>PHÍ VẬN CHUYỂN HÀNG HÓA</h2>
                        <ol>
                            <li>Khu vực Tp.HCM: miễn phí vận chuyển lắp đặt (không áp dụng cho các sản phẩm sale >50% và đơn hàng dưới 5tr)</li>
                            <li>Khu vực lân cận TP.HCM:
                                <ul>
                                    <li>Đơn hàng > 50.000.000đ: miễn phí vận chuyển</li>
                                    <li>Đơn hàng nhỏ hơn 50.000.000đ: phí vận chuyển 500.000đ- 1.000.000đ tùy khu vực</li>
                                </ul>
                            </li>
                            <li>Khu vực miền Trung, miền Bắc: Thu phí vận chuyển theo thực tế phát sinh (1.000.000đ-2.000.000đ)</li>
                        </ol>";
                        break;
                    case 'page2':
                        echo "<h2>Đây là trang 2</h2>";
                        echo "<p>Nội dung của trang 2...</p>";
                        break;
                    case 'page3':
                        echo "<h2>Đây là trang 3</h2>";
                        echo "<p>Nội dung của trang 3...</p>";
                        break;
                    default:
                        echo "<h2>Trang không tồn tại</h2>";
                        break;
                }
            } else {
                echo "<h2>Vui lòng chọn một trang từ menu</h2>";
            }
        ?>
    </div>
</body>
</html>