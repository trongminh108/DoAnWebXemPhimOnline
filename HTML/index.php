<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>

        <link rel="stylesheet" href="../Style/indexStyle.css" />
        <link rel="stylesheet" href="../Style/paginationStyle.css"> 

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
        />
        <?php
            require_once "../PHP/connect.php";
        ?>

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
                                echo "<style>
                                        li a[href='ADMIN_Film.php'], a[href='ADMIN_User.php'] {
                                            display: none;
                                            visible: hidden;
                                        }
                                    </style>";
                            }
                            else //chưa đăng nhập
                            {
                                echo "Đăng nhập";
                                echo "<style>
                                        li a[href='ADMIN_Film.php'], a[href='ADMIN_User.php'] {
                                            display: none;
                                            visible: hidden;
                                        }
                                    </style>";
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
            <div class="banner">
                <!-- Slider main container -->
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"
                            style="background-image: url('../Assets/Images/banners/banner-avatar.jpg');"
                        >
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('../Assets/Images/banners/banner-avengers.jpeg');"
                        >
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('../Assets/Images/banners/banner-doraemon.jpg');"
                        >
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <style>
                    .swiper {
                        width: 100%;
                        height: 100%;
                    }

                    .swiper-slide {
                        width: 100%;
                        height: 100%;
                        background-size: cover;
                    }

                    .banner {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .swiper .swiper-button-prev, .swiper-button-next {
                        color: white;
                    }

                    .swiper .swiper-pagination-bullet-active{
                        background-color: white;
                    }


                </style>
                <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                <script>
                    const swiper = new Swiper('.swiper', {
                        autoplay:{
                            delay: 3000,
                            disableOnInteration: false,
                        },
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },

                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        }
                    });
                </script>
            </div>
            <div class="left">
                <div class="title">Phim đang HOT</div>
                <?php
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
                <div class="title">Danh sách phim</div>
                <?php
                    // require_once "../PHP/connect.php";
                    $limit = 3;//Giới hạn item trên 1 trang
                    $page = 1;
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }
                    if($page<=0)
                        $page=1;
                    $firstIndex = ($page-1)*$limit;
                    //Lấy danh sách danh mục từ database

                    $sql = 'select *
                            from phim
                            where 1 ORDER BY tenphim ASC
                            limit '.$firstIndex.','.$limit;
                    $danhsach = $connect->query($sql);
                    //Lấy số lượng trang
                    $sql = 'select count(maphim) as total from phim';
                    $countResult = $connect->query($sql)->fetch_assoc();
                    $count = $countResult['total'];
                    $totalPage = ceil($count/$limit);
                    foreach($danhsach as $row){
                        $count = 1;
                        echo "<a href='detail.php?id={$row['maphim']}'/>";
                            echo "<div class='film {$count}'>";
                                echo "<div class='posterFilm {$count}'>";
                                    echo "<img src='../Assets/Images/posters/{$row['maphim']}.jpg' alt='' />";
                                echo "</div>";
                                echo "<div class='titleFilm {$count}'>{$row['tenphim']}</div>";
                            echo "</div>";
                        echo "</a>";
                    }
                ?>
                <?php
                    // require_once "../PHP/connect.php";
                    // $query = "SELECT * FROM phim";
                    // $danhsach = $connect->query($query);
                    // if (!$danhsach){
                    //     die("Không thể thực hiện câu lệnh SQL" . $connect->connect_error);
                    //     exit();
                    // }
                    // $count = 1;
                    // while($row = $danhsach->fetch_array(MYSQLI_ASSOC)){
                    //     echo "<a href='detail.php?id={$row['maphim']}'/>";
                    //         echo "<div class='film {$count}'>";
                    //             echo "<div class='posterFilm {$count}'>";
                    //                 echo "<img src='../Assets/Images/posters/{$row['maphim']}.jpg' alt='' />";
                    //             echo "</div>";
                    //             echo "<div class='titleFilm {$count}'>{$row['tenphim']}</div>";
                    //         echo "</div>";
                    //     echo "</a>";
                    // }
                ?>
                <div class="pagination">
                    <?php
                        if (isset($_GET['page'])){
                            $page = $_GET['page'];
                        }
                        require_once "../PHP/pagination.php";
                        pagination($totalPage, $page);
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