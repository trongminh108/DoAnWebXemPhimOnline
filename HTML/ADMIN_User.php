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
                    <input type = "button" value = "Đăng xuất" class = "btnDangXuat"/>
                </a>
            </div>
            <div class="topnav">
                <ul class="nav">
                    <li><a href="ADMIN_CapNhat">Cập nhật phim</a></li>
                    <li><a href="ADMIN_Film">Quản lý phim</a></li>
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

                <div>
                    <input type="button" value="Thêm" class = "btnThem"/>
                    <input type="button" value="Xóa" class = "btnXoa"/>
                    <input type="button" value="Sửa" class = "btnSua"/>
                </div>

            </div>
        </header>
        <div class="container">
            <div class = "full_manage">
                <div class = "body_manage">
                    <div class = "header_ID">
                        <table class="table_manager">
                            <tr>
                                <td style = "width: 200px;">User</td>
                                <td style = "width: 200px;">Password</td>
                                <td style = "width: 200px;">Name</td>
                                <td style = "width: 200px;">Email</td>
                                <td style = "width: 50px;">Quyền</td>
                            </tr>
                        </table>
                        <div>           
                            <table class = "table_manager1">
                                <tr>
                                <td style = "width: 200px;">User</td>
                                <td style = "width: 200px;">Password</td>
                                <td style = "width: 200px;">Name</td>
                                <td style = "width: 200px;">Email</td>
                                <td style = "width: 50px;">Quyền</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>