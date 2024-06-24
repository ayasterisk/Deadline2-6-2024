<?php
include "./connect.php";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $stmt = $conn->prepare("SELECT * FROM chitietsanpham WHERE LOWER(ten_sp) LIKE LOWER(?)");
    $search = "%$search%";
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>
            <a style="color: black" href="/Deadline2-6-2024/San_pham/Module/product-details.php?id=<?= $row['ID'] ?>">
                <?php
                echo '<div class="result-item">';
                echo '<img src="' . $row['linkanhchitiet'] . '" alt="' . $row['ten_sp'] . '">';
                echo '<div class="result-details">';
                echo '<strong>' . $row['ten_sp'] . '</strong>';
                echo '<span>' . $row['gia'] . '</span>';
                echo '</div></div>';
                ?>
            </a>
<?php            
        }
    } else {
        echo "No results found";
    }
    $stmt->close();
}

$conn->close();
?>