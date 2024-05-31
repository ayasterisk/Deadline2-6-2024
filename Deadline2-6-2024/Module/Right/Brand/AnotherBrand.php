<?php
$sosanpham = !empty($_GET['perpage']) ? ($_GET['perpage']) : 12;
$trangso = !empty($_GET['page']) ? ($_GET['page']) : 1;
$offset = ($trangso - 1) * $sosanpham;
$mysql = "SELECT *FROM chitietsanpham  WHERE tenhang not in('Jazz','Fence','HomeOff','Penny','AHURA','Prohome','Moho')  LIMIT $sosanpham OFFSET $offset";
$result = mysqli_query($conn, $mysql);
$total = mysqli_query($conn, "SELECT *FROM chitietsanpham  WHERE tenhang not in('Jazz','Fence','HomeOff','Penny','AHURA','Prohome','Moho')");
$numrow = mysqli_num_rows($total);
$sotrang = ceil($numrow / $sosanpham);
?>

<div class="head-right">
    <h3>Another Brand</h3>
    <form action="" method="post">
        <div class="right-content-sanpham">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="sanpham-one">
                    <a href="Module/product-details.php?id=<?= $row['ID'] ?>"><img src="<?= $row['linkanhchitiet'] ?>" alt="anh" width="267px" height="250px" /></a>
                    <a href="Module/product-details.php?id=<?= $row['ID'] ?>"><h1><?= $row['ten_sp'] ?></h1></a>
                    <div class="pri-sanpham">
                        <div class="cost-sanpham"><?= $row['gia'] ?><sup>đ</sup></div>
                    </div>
                    <div class="buy-sanpham">
                        <div class="add-to-cart"><a href="#">Thêm vào giỏ</a></div>
                        <div class="wm-sanpham"><a href="Module/product-details.php?id=<?= $row['ID'] ?>">Chi tiết</a></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </form>
</div>
<div class="sanpham">
    <div class="pagination">
        <?php if ($trangso > 2) { ?>
            <a href="index.php?xem=AnotherColor&perpage=<?= $sosanpham ?>&page=<?= 1 ?>">FIRST</a> <?php } ?>
        <?php if ($trangso < $sotrang + 1) { ?>
            <?php $nextpage = $trangso - 1; ?>
            <a href="index.php?xem=AnotherColor&perpage=<?= $sosanpham ?>&page=<?= $nextpage ?>">PREV</a> <?php } ?>
        <?php for ($num = 1; $num <= $sotrang; $num++) { ?>
            <?php if ($num != $trangso) { ?>
                <?php if ($num > $trangso - 2 and $num < $trangso + 2) { ?>
                    <a href="index.php?xem=AnotherColor&perpage=<?= $sosanpham ?>&page=<?= $num ?>"><?= $num ?></a>
                <?php } ?>
            <?php } else { ?>
                <strong style="background-color: black; color:white;padding:20px;"><?= $num ?></strong>
            <?php } ?>
        <?php } ?>
        <?php if ($trangso < $sotrang) { ?>
            <?php $nextpage = $trangso + 1; ?>
            <a href="index.php?xem=AnotherColor&perpage=<?= $sosanpham ?>&page=<?= $nextpage ?>">NEXT</a> <?php } ?>
        <?php if ($trangso < $sotrang - 1) { ?>
            <a href="index.php?xem=AnotherColor&perpage=<?= $sosanpham ?>&page=<?= $sotrang ?>">LAST</a> <?php } ?>
    </div>
</div>