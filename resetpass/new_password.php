<!-- new_password.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <form action="reset_password.php" method="POST">
        <input type="" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="" name="otp" value="<?php echo $_POST['otp']; ?>">
        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
