<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../header.php"; ?>
</head>

<body>
    <h1>ยินดีต้อนรับครับสุดหล่อ</h1>
    <p>คุณ: <?php echo htmlspecialchars($_SESSION['fullname']);   ?></p>
    <p>อีเมล: <?php echo htmlspecialchars($_SESSION['gmail']); ?></p>
</body>

</html>