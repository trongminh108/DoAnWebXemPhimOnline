<?php 
    // require_once '../PHP/config.php';

    // if(isset($_POST['dangky'])) {
    //     if ($_POST["user"] != '' && $_POST["email"] != '' && $_POST["pass"] != '' && $_POST["repass"] != '') {        
    //         $user = $_POST["user"];
    //         $email = $_POST["email"];
    //         $pass = $_POST["pass"]; 
    //         $repass = $_POST["repass"]; 
    //         $role = 0;      
    //         if ($pass != $repass) {
    //             header("location: sign.php");
    //         } else {
    //             $sql = "SELECT * FROM user WHERE user = '$user'";
    //             $old = mysqli_query($conn, $sql);
    //             if (mysqli_num_rows($old) == 0) {
    //                 echo '<script>alert("Không thể tạo tài khoản!");</script>';
    //             } else {
    //                 $sql="INSERT INTO user(user, pass, role ) VALUES ('$user', '$pass', '$role') ";
    //                 mysqli_query($conn, $sql);
    //                 echo '<script>alert("Đăng ký thành công!");</script>';
    //             }
    //             header("location: sign.php");
    //         }   
    //     } else {
    //         header("location: sign.php");
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en"></html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Đăng ký thành viên</title>
        <link rel="stylesheet" href="../Style/loginSign.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    <div class ="main">
        <form action="signin_submit.php" method="post" id="form-sign">
           <h1 class="form-heading">Đăng ký thành viên</h1>
            <div class="form-group">
            <i class="fa-solid fa-user"></i>
                <input type="text" class="form-input" name="user" ib="" placeholder="Tài khoản" >
            </div>

            <div class="form-group">
            <i class="fa-solid fa-user"></i>
                <input type="text" class="form-input" name="userDisplayName" ib="" placeholder="Tên người dùng" >
            </div>

            <div class="form-group">
            <i class="fa-solid fa-envelope"></i>               
             <input type="text" class="form-input" name="email" ib="" placeholder="Nhập Email" >
            </div>
            <div  class="form-group">
            <i class="fa-solid fa-key"></i>
                <input type="password" class="form-input" name="pass" ib="" placeholder="Mật Khẩu">
                </div>
            <div  class="form-group">
            <i class="fa-solid fa-key"></i>
                <input type="password" class="form-input" name="repass" ib="" placeholder="Xác nhận mật Khẩu">

            </div>
            <div style="display: block; float: left;">
                <a href="index.php">Trang chủ</a>
            </div>
                <input type="submit"  name ="dangky" value="Đăng ký" class="form-submit">    
            
        </form>
        
    </div>
</body>

</html>