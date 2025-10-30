<?php require_once "../server/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["txt_id"];
    $fullname = $_POST["txt_fullname"];
    $card_id = $_POST["txt_card"];
    $gmail = $_POST["txt_email"];
    $address = $_POST["txt_address"];
    $tell = $_POST["txt_tell"];

    $cardid_secret = password_hash($card_id, PASSWORD_DEFAULT);
    $sql = "INSERT INTO tbl_user (user_id ,fullname,number_id,gmail,address,tell) VALUES (:userid,:fname,:idcard,:gmail,:addr,:tell)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":userid", $user_id);
    $stmt->bindParam(":fname", $fullname);
    $stmt->bindParam(":idcard", $cardid_secret);
    $stmt->bindParam(":gmail", $gmail);
    $stmt->bindParam(":addr", $address);
    $stmt->bindParam(":tell", $tell);

    if ($stmt->execute()) {
        $_SESSION['success'] = "ลงทะเบียนสำเร็จ!";
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}