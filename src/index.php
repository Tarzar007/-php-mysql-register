<?php
session_start();
require_once "./server/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'header.php' ?>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="container-fluid">
        <form class="mx-auto" action="./controller/login.php" method="post">
            <h4 class="text-center">Login</h4>
            <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label">รหัสนักศึกษา</label>
                <input type="text" name="user_id" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" maxlength="11" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">หมายเลขบัตรประชาชน</label>
                <input type="password" name="card_id" class="form-control" id="exampleInputPassword1" maxlength="13"
                    required>
                <!-- <div id="emailHelp" class="form-text mt-3">Forget password ?</div> -->
            </div>
            <button type="submit" class="btn btn-primary mt-5">Login</button>
            <div class="register-link mt-3">
                <a href="./view/register.php">Register</a>
            </div>
    </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    if (isset($_SESSION['error'])) {
        $message = $_SESSION['error'];
        unset($_SESSION['error']);
        echo "<script>
        Swal.fire({
            title: '$message',
            icon: 'error',
            timer: 2300,
            showConfirmButton: true ,
            confirmButtonText: 'ตกลง'
        });
    </script>";
    }
    ?>
</body>


</html>