<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ADMIN User</title>

        <link rel="stylesheet" href="../Style/indexStyle.css" />
		<link rel="stylesheet" href="../Style/ADMIN_Film.css"/>
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
                    <li><a href="ADMIN_CapNhat">Thêm phim</a></li>
                    <li><a href="ADMIN_Film">Quản lý phim</a></li>
                    <li><a href="ADMIN_ThemUser">Thêm User</a></li>
                    <li><a href="ADMIN_User">Quản lý người dùng</a></li>
                </ul>
                <div class="fSearch">
                <form action="" method="post" class="fSearch">
                    <input
                        type="text"
                        class="textSearch"
                        placeholder="User cần tìm..."
                        />
                    <input type="submit" value="Search" />
                </form>

            </div>
        </header>
        <div class="container">
            <div class = "full_manage">
                <div class = "body_manage">
                    <div class = "header_ID">
                        <table class="table_manager">
                            <tr style="background-color: #83b1fb;">
                                <td style = "width: 200px;">User</td>
                                <td style = "width: 200px;">Password</td>
                                <td style = "width: 200px;">Name</td>
                                <td style = "width: 200px;">Email</td>
                                <td style = "width: 50px;">Quyền</td>
                                <td style = "width: 200px;">Sửa</td>
                                <td style = "width: 50px;">Xóa</td>
                            </tr>
                            <?php
                                require_once "../PHP/connect.php";
                                $query = "SELECT * FROM user";
                                $danhsach = $connect->query($query);
                                if (!$danhsach){
                                    die("Không thể thực hiện lệnh SQL");
		                            exit();
                                }
                                foreach ($danhsach as $row){
                                    echo "<tr>
                                        <td class='user dataUser'>
                                            {$row['user']}
                                        </td>
                                        <td class='pass dataUser'>
                                            {$row['pass']}
                                        </td>
                                        <td class='name dataUser'>
                                            {$row['name']}
                                        </td>
                                        <td class='email dataUser'>
                                            {$row['email']}
                                        </td>
                                        <td class='role dataUser'>
                                            {$row['role']}
                                        </td>
                                        <td align='center'>
                                            <a href='ADMIN_ThemUser.php?id={$row['user']}'>
                                                <img src='../Assets/Images/icon/edit.png' alt='edit'>
                                            </a>
                                        </td>
                    
                                        <td align='center'>
                                            <a href='ADMIN_XoaUser.php?id={$row['user']}'>
                                                <img src='../Assets/Images/icon/delete.png' alt='delete'>
                                            </a>
                                        </td>
                                    </tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>