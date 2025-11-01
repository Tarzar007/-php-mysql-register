<?php
require_once "../server/connect.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $card_id = $_POST["card_id"];

    // ✅ ตรวจสอบข้อมูลในฐานข้อมูล
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user_id = :userid");
    $stmt->bindParam(':userid', $user_id);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch();
        // ✅ ตรวจสอบรหัส (ถ้าเก็บเป็น password_hash)
        if (password_verify($card_id, $user['number_id'])) {
            // ✅ เก็บข้อมูลใน session
            $_SESSION['user_login'] = $user['user_id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['gmail'] = $user['gmail'];
            header("Location: ../view/index.php");
            // echo "เข้าสู่ระบบสำเร็จ!";
            exit();
        } else {
            $_SESSION['error'] = "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!!";
        }
    } else {
        $_SESSION['error'] = "ไม่พบผู้ใช้ในระบบ";
    }
    // echo "รหัสผ่านหรือผู้ใช้ไม่ถืกต้อง!";
    header("Location: ../index.php");
    exit();
}