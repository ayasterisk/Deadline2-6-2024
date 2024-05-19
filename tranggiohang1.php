<?php
require 'connect.php';
$sql = "SELECT * FROM quanlysanpham";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html class="htmlgiohang">

<head>
    <meta charset="utf-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="tranggiohang1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="content">
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
                <div><a href="/thanhtoannhom4/thanhtoannhom4.php"><button name="buttondathang" value="Đặt hàng" class="buttondathang">Đặt hàng</button></a></div>
            </div>
            <div class="content_cothethich">
                <div class="content_title">
                    <h2 style="color: chocolate;">CÓ THỂ BẠN CŨNG THÍCH</h2>
                    <h3><a href="#" style="color: darkcyan">Xem tất cả ></a></h3>
                </div>
                <div class="content_title_main">
                    <div class="sanpham1">
                        <form action="">
                            <img src="img/1a_6c1ac53636f846418e2f718244ac97c2_master.webp" alt="anh" />
                            <h3>Ghế sofa</h3>
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
                            <img src="img/blue1.jpg" alt="anh" />
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
                            <img src="img/blue2.jpg" alt="anh" />
                            <h3>Ghế sofa</h3>
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
                            <img src="img/blue3.jpg" alt="anh" />
                            <h3>Ghế sofa</h3>
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
                            <img src="img/blue4.jpg" alt="anh" />
                            <h3>Ghế sofa</h3>
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
                            <img src="img/blue5.jpg" alt="anh" />
                            <h3>Ghế sofa</h3>
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
                            <img src="img/blue6.jpg" alt="anh" />
                            <h3>Ghế sofa</h3>
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
                            <img src="img/blue7.jpg" alt="anh" />
                            <h3>Ghế sofa</h3>
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
                </div>
            </div>
        </div>
</body>
</html>
