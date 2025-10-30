<?php
require_once "../server/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../header.php' ?>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <!-- Title section -->
        <div class="title">ลงทะเบียนนักศึกษา</div>
        <div class="content">
            <!-- Registration form -->
            <form action="../controller/register.php" method="post">
                <div class="user-details">
                    <!-- Input for ID -->
                    <div class="input-box">
                        <span class="details">รหัสนักศึกษา</span>
                        <input type="text" name="txt_id" placeholder="ใส่รหัสนักศึกษา" required>
                    </div>
                    <!-- Input for Full name-->
                    <div class="input-box">
                        <span class="details">ชื่อ - นามสกุล</span>
                        <input type="text" name="txt_fullname" placeholder="ใส่ชื่อ - นามสกุล" required>
                    </div>
                    <!-- Input for Number id card -->
                    <div class="input-box">
                        <span class="details">เลขบัตรประชาชน</span>
                        <input type="text" name="txt_card" placeholder="ใส่เลขบัตรประชาชน" required>
                    </div>
                    <!-- Input for gmail -->
                    <div class="input-box">
                        <span class="details">อีเมล์</span>
                        <input type="email" name="txt_email" placeholder="ใส่อีเมล์" required>
                    </div>
                    <!-- Input for address -->
                    <div class="input-box">
                        <span class="details">ที่อยู่ปัจจุบัน</span>
                        <input type="text" name="txt_address" placeholder="ใส่ที่อยู่ปัจจุบัน" required>
                    </div>
                    <!-- Input for tell -->
                    <div class="input-box">
                        <span class="details">เบอร์โทร</span>
                        <input type="text" name="txt_tell" placeholder="ใส่เบอร์โทร" required>
                    </div>
                </div>
                <!-- Submit button -->
                <div class="button">
                    <input type="submit" value="ยืนยัน">
                </div>
            </form>
        </div>
    </div>
</body>
</body>

</html>