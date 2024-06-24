<h2>Tính toán phí vận chuyển cho đơn hàng</h2>

<?php
// Tính toán phí vận chuyển cho từng shop
$phi_van_chuyen_shop_X = 20000; // Phí vận chuyển từ Shop X
$phi_van_chuyen_shop_Y = 30000; // Phí vận chuyển từ Shop Y

// Tổng phí vận chuyển của đơn hàng
$tong_phi_van_chuyen = $phi_van_chuyen_shop_X + $phi_van_chuyen_shop_Y;

// Hiển thị thông tin
echo "<p>Phí vận chuyển sản phẩm từ Shop X: " . number_format($phi_van_chuyen_shop_X) . " VNĐ</p>";
echo "<p>Phí vận chuyển sản phẩm từ Shop Y: " . number_format($phi_van_chuyen_shop_Y) . " VNĐ</p>";
echo "<h3>Tổng tiền phí vận chuyển của đơn hàng: " . number_format($tong_phi_van_chuyen) . " VNĐ</h3>";
?>