<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>

        <link rel="stylesheet" href="../Style/indexStyle.css" />
    </head>
    <body>
        <header>
            <div class="top"></div>
            <div class="topnav">
                <ul class="nav">
                    <li><a href="TrangChu">Trang Chủ</a></li>
                    <li><a href="TheLoai">Thể loại</a></li>
                    <li><a href="NamPhatHanh">Năm phát hành</a></li>
                    <li><a href="QuocGia">Quốc gia</a></li>
                    <li><a href="PhimLe">Phim lẻ</a></li>
                    <li><a href="PhimBo">Phim bộ</a></li>
                </ul>
                <div class="fSearch">
                    <form action="" method="post" class="fSearch">
                        <input
                            type="text"
                            class="textSearch"
                            placeholder="Tên phim..."
                        />
                        <input type="button" value="Search" />
                    </form>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="banner"></div>
            <div class="left">
                <div class="title">Phim đang HOT</div>
            </div>
            <div class="content">
                <div class="title">Danh sách phim</div>
                <?php
                    require_once "../PHP/connect.php";
                    $query = "SELECT * FROM phim";
                    $danhsach = $connect->query($query);
                    $query = "SELECT * FROM phim";
                    $danhsach = $connect->query($query);
                    if (!$danhsach){
                        die("Không thể thực hiện câu lệnh SQL" . $connect->connect_error);
                        exit();
                    }
                    $count = 1;
                    while($row = $danhsach->fetch_array(MYSQLI_ASSOC)){
                        echo "<a href='detail.php?id={$row['maphim']}'>";
                            echo "<div class='film {$count}'>";
                                echo "<div class='posterFilm {$count}'>";
                                    echo "<img src='../Assets/Images/posters/{$row['maphim']}.jpg' alt='' />";
                                echo "</div>";
                                echo "<div class='titleFilm {$count}'>{$row['tenphim']}</div>";
                            echo "</div>";
                        echo "</a>";
                    }
                ?>
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