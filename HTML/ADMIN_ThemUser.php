<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ADMIN Cập Nhật</title>

        <link rel="stylesheet" href="../Style/indexStyle.css" />
		<link rel="stylesheet" href="../Style/ADMIN_ThemPhim.css"/>
    </head>
    <body>
        <header>
            <div class="top">
                <a href="index.php">
                    <input type = "button" value = "Trang chủ" class = "btnDangXuat"/>
                </a>
            </div>
            <div class="topnav">
                <ul class="nav">
                    <li><a href="ADMIN_ThemPhim.php">Thêm phim</a></li>
                    <li><a href="ADMIN_Film.php">Quản lý phim</a></li>
                    <li><a href="ADMIN_ThemUser">Thêm User</a></li>
                    <li><a href="ADMIN_User.php">Quản lý người dùng</a></li>
                </ul>
            </div>
        </header>
        
        <div class="container">
            <p class = "CapNhatPhim">
                <?php
                    $user = "";
                    $pass = "";
                    $name = "";
                    $email = "";
                    $role = "";
                    require_once "../PHP/connect.php";
                    if (isset($_GET['id'])){
                        echo "Cập nhật User";
                        $query = "SELECT * FROM user WHERE user='{$_GET['id']}'";
                        $row = $connect->query($query)->fetch_assoc();
                        $user = $row['user'];
                        $pass = $row['pass'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $role = $row['role'];
                    }
                    else
                        echo "Thêm User";
                ?>
            </p>
            <form action="ADMIN_CapNhatUser.php" method="post">
                <table class = "tableCapNhatPhim">
                    <tr>
                        <td><label for="l_ID">Tên người dùng</label></td>
                        <td><input type="text" id="l_ID" name="txtUser" value="<?= $user ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Mật khẩu</label></td>
                        <td><input type="text" id="l_ID" name="txtPass" value="<?= $pass ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Tên hiển thị</label></td>
                        <td><input type="text" id="l_ID" name="txtName" value="<?= $name ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Email</label></td>
                        <td><input type="text" id="l_ID" name="txtEmail" value="<?= $email ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Vai trò</label></td>
                        <td><input type="text" id="l_ID" name="txtRole" value="<?= $role ?>"></td>
                    </tr>

                </table> 
                <button type="submit" class="btnDangPhim" id="button_post" name="button_post">
                    <?php
                        if (isset($_GET['id'])){
                            echo "Cập nhật User";
                            echo "<input type='text' name='isUpdate' value='{$_GET['id']}' style='display: none;'/>";
                        }
                        else
                            echo "Tạo User";
                    ?>
                </button>  
            </form>

        </div>
    </body>
</html>