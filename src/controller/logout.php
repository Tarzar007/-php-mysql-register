<?php
session_start(); // เริ่มต้น session

// ลบค่าทั้งหมดใน session
session_unset();

// ทำลาย session ทั้งหมด
session_destroy();

// กลับไปหน้า login
header("Location: ../index.php");
exit();