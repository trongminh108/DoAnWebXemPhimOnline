<?php 
    // session_start();
    // ob_start();
    // require_once '../PHP/connect.php';

    // if(isset($_POST['dangnhap']) && $_POST['dangnhap']) {

    //     $user = $_POST['user'];
    //     $pass = $_POST['pass']; 
    //     $role = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM user WHERE user = '$user' and pass = '$pass'"))['role'];
    //     echo $role;
    //     if($role != null) {
    //         header('location: index.php');
    //         exit(); 
    //     }
    //     else {
    //         $txt_errol="Tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra lại.";
    //         header('location: login.php');
    //         exit();
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en"></html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login - User</title>
        <link rel="stylesheet" href="../Style/loginSign.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
<body>
    <div class ="main">
        <form action="login_submit.php" method="post" id="form-login">
            <h1 class="form-heading">Đăng Nhập</h1>
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" class="form-input" name="user" ib="" placeholder="Tài khoản" >
            </div>

            <div  class="form-group">
                <i class="fa-solid fa-key"></i>
                <input type="password" class="form-input" name="pass" ib="" placeholder="Mật Khẩu">
                <div id="eye"> 
                    <i class="fa-regular fa-eye"></i>
                </div>
            </div>
                <div style="display: block; float: right;">
                    <a href="signin.php">Đăng ký tài khoản mới?</a>
                </div>
                <div style="display: block; float: left;">
                    <a href="index.php">Trang chủ</a>
                </div>
                <input type="submit"  name ="dangnhap" value="Đăng Nhập" class="form-submit">    
        </form>
        <?php
            // if(isset($txt_errol)) {
            //     // echo "<div class='error-message'>$txt_errol</div>";
            //     echo "<script>alert('{$txt_errol}');</script>";
            // }
        ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="../Javascript/app.js"></script>

</html>