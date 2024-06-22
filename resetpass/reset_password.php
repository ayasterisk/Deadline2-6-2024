<!-- reset_password.php -->
<?php
include '../connect.php';

$email = $_POST['email'];
$otp = $_POST['otp'];
$password = $_POST['new_password'];

// Check if the OTP is valid
$sql = "SELECT * FROM quanlykhachhang WHERE tendangnhap='$email' AND otp='$otp' AND otp_expiry > NOW()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Update the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE quanlykhachhang SET password='$hashed_password', otp=NULL, otp_expiry=NULL WHERE tenđangnhap='$email'";
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password: " . $conn->error;
    }
} else {
    echo "Invalid OTP or OTP has expired.";
}

$conn->close();
?>
