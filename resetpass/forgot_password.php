<!-- forgot_password.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <form action="sent_otp.php" method="POST">
        <label for="email">Enter your email:</label>
        <input type="email" name="email" required>
        <button type="submit">Send OTP</button>
    </form>
</body>
</html>
