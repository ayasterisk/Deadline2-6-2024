<!-- verify_otp.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
</head>
<body>
    <form action="new_password.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="otp">OTP:</label>
        <input type="text" name="otp" required>
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>
