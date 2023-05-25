<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Odd Movie</title>

        <link rel="stylesheet" href="../Style/indexStyle.css" />
		<link rel="stylesheet" href="../Style/oddmovieStyle.css"/>
        <script src="../Javascript/xemphim.js">
        </script>
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
            //cập nhật lượt xem
            $view = $row['luotxem'] + 1;
            $query = "UPDATE phim SET luotxem='{$view}' WHERE maphim='{$row['maphim']}'";
            $connect->query($query);
        ?>
    </head>
    
    <body>
        <header>
            <div class="top"></div>
            <div class="topnav">
                <ul class="nav">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="type.php">Thể loại</a></li>
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
                <div class="thongTinDangNhap">
                    <a href="DangNhap">
                        <div class="tenDangNhap">
                            Đăng nhập
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
				<div class="title">Trang chủ > Phim lẻ > 
                    <?php
                        echo "{$row['tenphim']}";
                    ?> 
                </div>
				<div class = "body_video">
                    <script>
                        ChangeHeigh_16_9();
                    </script>
					<iframe class="videoFilm" src="<?php echo "{$row['link']}"; ?>" frameborder="0" allowfullscreen = "true"></iframe>
				</div>	
				
				<div class = "server">
					<button type="submit" class ="btnServer1"> Server1 </button>
					<button type="submit" class ="btnServer2"> Server2 </button>
				</div>
				
				<div class = "titlecomment">
				Bình luận và đánh giá
				</div>
				
				<div class = "comment">
					<form action="" method="post" class="comment">
                        <div class="postComment">
                            <input class = "writecomment" type = "text" placeholder = "Viết bình luận..."/>
                            <button type="submit" class = "entercomment" >Đăng</button>
                        </div>
                        <div class = "userComment">
                        Số / Số bình luận
                        </div>
					</form>
				</div>
				
				<div class = "quantity">
					<img src = "../Assets/Images/icon/arrow-left.png" alt = "" class = "arrow-left"/>	
					<button class = "so1" type = "submit">1</button>
					<img src = "../Assets/Images/icon/arrow-right.png" alt = "" class = "arrow-right"/>	
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