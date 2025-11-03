<?php session_start();
// if (!isset($_SESSION['user_login'])) {
//     header("Location: ../index.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../header.php"; ?>
</head>

<body>
    <?php include_once "nav.php" ?>
    <h1>ยินดีต้อนรับครับสุดหล่อ</h1>
    <p>คุณ: <?php echo htmlspecialchars($_SESSION['fullname']);   ?></p>
    <p>อีเมล: <?php echo htmlspecialchars($_SESSION['gmail']); ?></p>
</body>

</html>