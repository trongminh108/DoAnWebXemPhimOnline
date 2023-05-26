<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ADMIN Quản Lý Phim</title>

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
                    <li><a href="ADMIN_ThemPhim.php">Thêm phim</a></li>
                    <li><a href="ADMIN_Film.php">Quản lý phim</a></li>
                    <li><a href="ADMIN_ThemUser">Thêm User</a></li>
                    <li><a href="ADMIN_User.php">Quản lý người dùng</a></li>
                </ul>

                <div class="fSearch">
                    <form action="" method="post" class="fSearch">
                        <input
                            type="text"
                            class="textSearch"
                            name="ADMIN_textSearch"
                            placeholder="Phim cần tìm..."
                            />
                        <input type="submit" value="Search" />
                    </form>
                </div>

            </div>
        </header>
        <div class="container">
            <!-- <div class = "full_manage">
                <div class = "body_manage">
                    <div class = "header_ID"> -->
                        <table class="table_manager">
                            <tr class="header">
                                <td>ID</td>
                                <td>Tên phim</td>
                                <td>Năm phát hành</td>
                                <td>Thể loại</td>
                                <td>Quốc gia</td>
                                <td>Diễn viên</td>
                                <td>Mô tả</td>
                                <td>Link</td>
                                <td>Sửa</td>
                                <td>Xóa</td>
                            </tr>
                            <?php
                                require_once "../PHP/connect.php";
                                $query = "SELECT * FROM phim";
                                $danhsach = $connect->query($query);
                                if (!$danhsach){
                                    die("Không thể thực hiện lệnh SQL");
		                            exit();
                                }
                                foreach ($danhsach as $row){
                                    echo "<tr>
                                        <td class='id dataFilm'>
                                            {$row['maphim']}
                                        </td>
                                        <td class='name dataFilm'>
                                            {$row['tenphim']}
                                        </td>
                                        <td class='year dataFilm'>
                                            {$row['namphathanh']}
                                        </td>
                                        <td class='type dataFilm'>
                                            {$row['theloai']}
                                        </td>
                                        <td class='country dataFilm'>
                                            {$row['quocgia']}
                                        </td>
                                        <td class='actors dataFilm'>
                                            {$row['dienvien']}
                                        </td>
                                        <td class='description dataFilm'>
                                            {$row['mota']}
                                        </td>
                                        <td class='link dataFilm'>
                                            {$row['link']}
                                        </td>
                                        <td align='center'>
                                            <a href='ADMIN_ThemPhim.php?id={$row['maphim']}'>
                                                <img src='../Assets/Images/icon/edit.png' alt='edit'>
                                            </a>
                                        </td>
                    
                                        <td align='center'>
                                            <a href='ADMIN_XoaPhim.php?id={$row['maphim']}'>
                                                <img src='../Assets/Images/icon/delete.png' alt='delete'>
                                            </a>
                                        </td>
                                    </tr>";
                                }
                            ?>
                        </table>
                        <!-- </div>
                    </div>
                </div>
            </div> -->
        </div>	
    </body>
</html>