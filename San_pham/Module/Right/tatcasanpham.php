<?php
$sosanpham = !empty($_GET['perpage']) ? ($_GET['perpage']) : 12;
$trangso = !empty($_GET['page']) ? ($_GET['page']) : 1;
$offset = ($trangso - 1) * $sosanpham;
$mysql = "SELECT *FROM chitietsanpham ORDER BY gia LIMIT $sosanpham OFFSET $offset";
$result = mysqli_query($conn, $mysql);
$total = mysqli_query($conn, 'SELECT *FROM chitietsanpham ');
$numrow = mysqli_num_rows($total);
$sotrang = ceil($numrow / $sosanpham);
?>

<div class="head-right">
    <h3>TẤT CẢ SẢN PHẨM</h3>
    <form action="" method="post">
        <div class="right-content-sanpham">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <a href="Module/product-details.php?id=<?= $row['ID'] ?>">
                    <div class="sanpham-one">
                        <?php
                            if($row['gia']!=0){
                            $discount=ceil(($row['giakhuyenmai']/$row['gia'])*100);
                            if($discount==0){ ?>
                                <div class=""></div>
                        <?php } else{ ?>
                            <div class="nhan_giamgia" style="text-align: center;"><?= $discount ?> %</div>
                            <?php }} ?>
                        <a href="Module/product-details.php?id=<?= $row['ID'] ?>"><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" width="267px" height="250px" /></a>
                        <a href="Module/product-details.php?id=<?= $row['ID'] ?>"><h1><?= $row['ten_sp'] ?></h1></a>
                        <div class="pri-sanpham">
                            <div class="cost-sanpham"><?= number_format($row['gia'],0,"",",") ?><sup>đ</sup></div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </form>
</div>
<div class="sanpham">
    <div class="pagination">
        <?php if ($trangso > 2) { ?>
            <a href="index.php?xem=tatcasanpham&perpage=<?= $sosanpham ?>&page=<?= 1 ?>">FIRST</a> <?php } ?>
        <?php if ($trangso < $sotrang + 1) { ?>
            <?php $nextpage = $trangso - 1; ?>
            <a href="index.php?xem=tatcasanpham&perpage=<?= $sosanpham ?>&page=<?= $nextpage ?>">PREV</a> <?php } ?>
        <?php for ($num = 1; $num <= $sotrang; $num++) { ?>
            <?php if ($num != $trangso) { ?>
                <?php if ($num > $trangso - 2 and $num < $trangso + 2) { ?>
                    <a href="index.php?xem=tatcasanpham&perpage=<?= $sosanpham ?>&page=<?= $num ?>"><?= $num ?></a>
                <?php } ?>
            <?php } else { ?>
                <strong style="background-color: black; color:white;padding:20px;"><?= $num ?></strong>
            <?php } ?>
        <?php } ?>
        <?php if ($trangso < $sotrang) { ?>
            <?php $nextpage = $trangso + 1; ?>
            <a href="index.php?xem=tatcasanpham&perpage=<?= $sosanpham ?>&page=<?= $nextpage ?>">NEXT</a> <?php } ?>
        <?php if ($trangso < $sotrang - 1) { ?>
            <a href="index.php?xem=tatcasanpham&perpage=<?= $sosanpham ?>&page=<?= $sotrang ?>">LAST</a> <?php } ?>
    </div>
</div>