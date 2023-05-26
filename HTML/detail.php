<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Detail</title>

        <link rel="stylesheet" href="../Style/indexStyle.css" />
        <link rel="stylesheet" href="../Style/detailStyle.css"/>
        
        <?php
            require_once "../PHP/connect.php";
            $query = "SELECT * FROM phim";
            $danhsach = $connect->query($query);
            $maphim = $_GET['id'];
            $query = "SELECT * FROM phim where maphim='{$maphim}'";
            $danhsach = $connect->query($query);
            if (!$danhsach){
                die("Không thể thực hiện câu lệnh SQL" . $connect->connect_error);
                exit();
            }
            $count = 1;
            $row = $danhsach->fetch_array(MYSQLI_ASSOC);
        ?>
        <style>
            .hinhAnh{
                background-image: url("../Assets/Images/posters/<?php echo "{$row['maphim']}" ?>");
            }
        </style>

    </head>
    <body>
        <header>
            <div class="top">
                <img src="../Assets/Images/logo/King.png" alt="">
                THE KING
            </div>
            <div class="topnav">
                <ul class="nav">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="type.php">Thể loại</a></li>
                    <li><a href="NamPhatHanh">Năm phát hành</a></li>
                    <li><a href="QuocGia">Quốc gia</a></li>
                    <li><a href="ADMIN_Film.php">Quản lý phim</a></li>
                    <li><a href="ADMIN_User.php">Quản lý user</a></li>
                </ul>
                <div class="fSearch">
                    <form action="search.php" method="post" class="fSearch">
                        <input
                            type="text"
                            class="textSearch"
                            name="textSearch"
                            placeholder="Tên phim..."
                        />
                        <input type="submit" value="Search" />
                    </form>
                </div>
                <div class="thongTinDangNhap">
                    <a href="login.php">
                        <div class="tenDangNhap">
                        <?php	
                            session_start();
                            if(isset($_SESSION['role']) && $_SESSION['role'] == 1)//Admin
                            {
                                echo "<a href='logout.php' class='dangNhapXuat'>Admin {$_SESSION['name']}</a>";
                            }
                            else if(isset($_SESSION['role']) && $_SESSION['role'] == 0)//User
                            {
                                echo "<a href='logout.php' class='dangNhapXuat'>{$_SESSION['name']}</a>";
                            }
                            else //chưa đăng nhập
                            {
                                echo "Đăng nhập";
                            }		
                        ?>	
                        </div>
                        <div class="hinhAnhDangNhap">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="left">
                <div class="title">Phim đang HOT</div>
                <?php
                    require_once "../PHP/connect.php";
                    $query = "SELECT * 
                    FROM phim
                    WHERE luotxem != 0
                    ORDER BY luotxem DESC
                    LIMIT 5";
                    $dsphimhot = $connect->query($query);
                    foreach ($dsphimhot as $film){
                        echo "<div class='filmHot'>
                            <a href='detail.php?id={$film["maphim"]}' class='linkFilmHot'>
                                <div class='posterFilmHot'>
                                    <img src='../Assets/Images/posters/{$film['maphim']}.jpg' alt='' />
                                    <div class='titleFilmHot'>{$film['tenphim']}</div>
                                </div>
                            </a>
                        </div>";
                    }
                ?>
            </div>
            <div class="content">
                <?php   
                    echo "<div class='title'>{$row['tenphim']}</div>";
                ?>
                <div class="thongTinFilm">
                    <div class="hinhAnh"></div>
                    <div class="thongTin">
                        <div class="thongTinChiTiet">
                            <?php
                                echo "<div>Quốc gia: {$row['quocgia']} </div>
                                <div>Năm phát hành: {$row['namphathanh']} </div>
                                <div>Thể loại: {$row['theloai']} </div>
                                <div>Lượt xem: {$row['luotxem']}</div>"
                            ?>
                        </div>
                        
                        <?php
                            echo "<a class='xemPhim' href='xemphim_OddMovie.php?id={$row['maphim']}'>Xem phim</a>";
                        ?>
                    </div>
                </div>

                <div class="thongTinFilm moTa">
                    <b>Mô tả</b>    
                    <div class="moTa" style="text-align: justify;">
                        <?php
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $row['mota'];
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <footer>
            <img src="../Assets/Images/logo-theking.png" alt="" />
            Copyright 2023 © The King Watch Movie <br />
            Xem phim mới miễn phí nhanh chất lượng cao. Xem Phim online Việt
            Sub, Thuyết minh, lồng tiếng chất lượng HD. <br />
            Xem phim nhanh online chất lượng cao.
        </footer>
    </body>
</html>