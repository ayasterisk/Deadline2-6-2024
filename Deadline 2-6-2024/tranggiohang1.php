<?php
require 'connect.php';
$sql = "SELECT * FROM quanlysanpham";
$query = mysqli_query($conn, $sql);
?>
<?php
    include("Module/Header.php");
 ?>
<!DOCTYPE html>
<html class="htmlgiohang">
<head>
    <meta charset="utf-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="tranggiohang1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
    <div class="content__cart">
        <div class="content__icon">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Giỏ Hàng</span>
        </div>
        <div class="content__notegiamgia">
            <i class="fa-solid fa-tag"></i>
            <span>Nhấn vào mục Mã giảm giá ở cuối trang để được miễn phí vận chuyển nhé!</span>
        </div>
        <div class="content_table">
            <form action="tranggiohang1.php"></form>
            <table class='content_tablegiohang' border="0" style="border-color: darkgray;">
                <thead>
                    <tr class="content_tr1">
                        <th>Sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Số tiền</th>
                        <th>Thao tác</th>
                        <th>Chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($query)) { ?>
                        <tr class="content_tr2">
                            <td><?php echo $row['ma_sp'] ?></td>
                            <td><?php echo $row['tonkho'] ?></td>
                            <td>#</td>
                            <td>#</td>
                            <td><input type="submit" value="-"><input type="text" value="<?php echo "1" ?>" size="1" class="soluong"><input type="submit" value="+"></td>
                            <td>#</td>
                            <td><input type="submit" name="" id="" value="Xóa"><span><i class="fa-regular fa-trash-can"></i></span></td>
                            <td><input type="checkbox" name="" id=""></td>
                        </tr>
                    <?php }  ?>
                    <tr class="content__tr4" style="background-color: darkgray; color:#f9f9f9f9">
                        <td>Tổng tiền</td>
                        <td colspan="7" align="right">1000000<sup>đ</sup></td>
                    </tr>
                    <tr class="content__tr5">
                        <td colspan="6"></td>
                        <td align="center" colspan="2">
                            <div class="content_them">
                                <button>Thêm<i class="fa-solid fa-cart-plus"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="content__voucher">
                <i class="fa-solid fa-window-maximize"></i>
                <span>Xem tất cả voucher hiện có</span>
                <a href="/">Xem thêm voucher</a>
            </div>
            <div class="content__giamgia">
                <i class="fa-solid fa-tag"></i>
                <span><?php  ?></span>
                <a href="/">Tìm hiểu thêm về voucher</a>
            </div>
            <div class="content__dathangtong">
                <input type="checkbox" name="" id="" value="">
                <input type="submit" name="" id="" value="Chọn tất cả(<?php ?>)" class="content_input_chonall">
                <input type="submit" name="" id="" value="Xóa" class="content_input_chonall">
                <input type="submit" name="" id="" value="Bỏ sản phẩm không hoạt động" class="content_input_spkohoatdong">
                <div class="main__tooltip">
                    <input type="submit" name="" id="" value="Tổng thanh toán(<?php ?>):" class="tongthanhtoan">
                    <div class="content__tooltip">
                        <div class=""><h1>Chi tiết khuyến mãi<h1></div>
                        <div class="tooltip_tongtien">
                            <div class=""><label for=""><h3>Tổng tiền hàng</h3></label></div>
                            <div class=""><input type="text" name="" id="" value="<?php ?>" readonly></div>
                        </div>
                        <div class="tooltip_tongtien">
                            <div class=""><label for=""><h3>voucher giảm giá</h3></label></div>
                            <div class=""><input type="text" name="" id="" value="<?php ?>" readonly></div>
                        </div>
                        <div class="tooltip_tongtien">
                            <div class=""><label for=""><h3>Giảm giá sản phẩm</h3></label></div>
                            <div class=""><input type="text" name="" id="" value="<?php ?>" readonly></div>
                        </div>
                        <div class="tooltip_tongtien">
                            <div class=""><label for=""><h3>Tổng số tiền</h3></label></div>
                            <div class=""><input type="text" name="" id="" value="<?php ?>" readonly></div>
                        </div>
                    </div>
                </div>
                <input type="text" name="" id="" value="<?php ?>" readonly class="tongtien">
                <div><a href="#"><button name="buttondathang" value="Đặt hàng" class="buttondathang">Đặt hàng</button></a></div>
            </div>
            <div class="content_cothethich">
                <div class="content_title">
                    <h2 style="color: chocolate;">CÓ THỂ BẠN CŨNG THÍCH</h2>
                    <h3><a href="#" style="color: darkcyan">Xem tất cả ></a></h3>
                </div>
                <div class="content_title_main">
                    <div class="sanpham1">
                        <form action="">
                            <img src="Image/tu-giay-go-cao-su-2-cua-2-ngan-keo-1.jpg" alt="anh" />
                            <h3>Tủ để giày gỗ cao su</h3>
                            <div class="main_sanpham">
                                <div class="giasanpham">2,950,000<sup>đ</sup></div>
                                <div class="giagiamsanpham">0<sup>đ</sup></div>
                            </div>
                            <div class="sanpham1-mua">
                                <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                <div class="chitiet-sanpham"><a href="#">Chi tiết</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="sanpham1">
                        <form action="">
                            <img src="Image/tu-giay-go-tu-nhien-KG68064-01a.jpg" alt="anh" />
                            <h3>Ghế sofa gỗ cao cấp hiện đại Ghế đôi sofa 115cm tiện ích sang trọng GSF001</h3>
                            <div class="main_sanpham">
                                <div class="giasanpham">19000<sup>đ</sup></div>
                                <div class="giagiamsanpham">20000<sup>đ</sup></div>
                            </div>
                            <div class="sanpham1-mua">
                                <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                <div class="chitiet-sanpham"><a href="#">Chi tiết</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="sanpham1">
                        <form action="">
                            <img src="Image/ghe-xoay-van-phong-chan-sat-1.jpg" alt="anh" />
                            <h3>Ghế xoay lưng thấp nệm bọc da HOGVP162</h3>
                            <div class="main_sanpham">
                                <div class="giasanpham">738,000<sup>đ</sup></div>
                                <div class="giagiamsanpham">820,000<sup>đ</sup></div>
                            </div>
                            <div class="sanpham1-mua">
                                <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                <div class="chitiet-sanpham"><a href="#">Chi tiết</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="sanpham1">
                        <form action="">
                            <img src="Image/gia-treo-do-khung-sat-co-gio-de-do-ban-1.jpg" alt="anh" />
                            <h3>Giá để đồ phòng tắm khung sắt</h3>
                            <div class="main_sanpham">
                                <div class="giasanpham">1,850,000<sup>đ</sup></div>
                                <div class="giagiamsanpham">0<sup>đ</sup></div>
                            </div>
                            <div class="sanpham1-mua">
                                <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                <div class="chitiet-sanpham"><a href="#">Chi tiết</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="sanpham1">
                        <form action="">
                            <img src="Image/gia-treo-do-phong-tam-sat-son-tinh-dien-1.jpg" alt="anh" />
                            <h3>Kệ để đồ phòng tắm</h3>
                            <div class="main_sanpham">
                                <div class="giasanpham">2,600,000<sup>đ</sup></div>
                                <div class="giagiamsanpham">0<sup>đ</sup></div>
                            </div>
                            <div class="sanpham1-mua">
                                <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                <div class="chitiet-sanpham"><a href="#">Chi tiết</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="sanpham1">
                        <form action="">
                            <img src="Image/ke-nha-bep-da-nang-khung-sat-go-cao-su-1.jpg" alt="anh" />
                            <h3>Kệ bếp đa năng 60x40x115cm gỗ cao su KB68048</h3>
                            <div class="main_sanpham">
                                <div class="giasanpham">1,800,000<sup>đ</sup></div>
                                <div class="giagiamsanpham">2,000,000<sup>đ</sup></div>
                            </div>
                            <div class="sanpham1-mua">
                                <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                <div class="chitiet-sanpham"><a href="#">Chi tiết</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="sanpham1">
                        <form action="">
                            <img src="Image/ke-sach-6-tang-go-cao-su-0.jpg" alt="anh" />
                            <h3>Kệ sách 6 tầng</h3>
                            <div class="main_sanpham">
                                <div class="giasanpham">1,960,000<sup>đ</sup></div>
                                <div class="giagiamsanpham">2,450,000<sup>đ</sup></div>
                            </div>
                            <div class="sanpham1-mua">
                                <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                <div class="chitiet-sanpham"><a href="#">Chi tiết</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="sanpham1">
                        <form action="">
                            <img src="Image/ke-tu-dat-goc-tuong-chan-sat-1.jpg" alt="anh" />
                            <h3>Tủ kệ góc tường gỗ cao su</h3>
                            <div class="main_sanpham">
                                <div class="giasanpham">3,825,000<sup>đ</sup></div>
                                <div class="giagiamsanpham">4,250,000<sup>đ</sup></div>
                            </div>
                            <div class="sanpham1-mua">
                                <div class="add_giohang"><a href="#">Thêm vào giỏ</a></div>
                                <div class="chitiet-sanpham"><a href="#">Chi tiết</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
   include ("Module/Footer.php");
?>
</html>
