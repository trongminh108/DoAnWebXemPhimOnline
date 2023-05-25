<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>

        <link rel="stylesheet" href="../Style/typeStyle.css" />
		<link rel="stylesheet" href="../Style/indexStyle.css" />
		<link rel="stylesheet" href="../Style/paginationStyle.css">
		
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
                    <li><a href="type.php">Năm phát hành</a></li>
                    <li><a href="type.php">Quốc gia</a></li>
                    <li><a href="PhimLe">Phim lẻ</a></li>
                    <li><a href="PhimBo">Phim bộ</a></li>
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
			<div class="type"> 
				<table class = "TheLoai">
					<tr>
						<td>
							<input type="checkbox" id="checkboxHanhDong" name="chkHanhDong">
							<label for="checkboxHanhDong">Hành động</label>
						</td>
	
						<td>
							<input type="checkbox" id="checkboxTinhCam" name="chkTinhCam">
							<label for="checkboxTinhCam">Tình cảm</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxChienTranh" name="chkChienTranh">
							<label for="checkboxChienTranh">Chiến tranh</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxHai" name="chkHai">
							<label for="checkboxHai">Hài</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxHoatHinh" name="chkHoatHinh">
							<label for="checkboxHoatHinh">Hoạt hình<label>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="checkbox" id="checkboxCoTrang" name="chkCoTrang">
							<label for="checkboxCoTrang">Cổ trang</label>
						</td>	
							
						<td>	
							<input type="checkbox" id="checkboxVoThuat" name="chkVoThuat">	
							<label for="checkboxVoThuat">Võ thuật</label>
						</td>	
							
						<td>	
							<input type="checkbox" id="checkboxChuyenSinh" name="chkChuyenSinh">	
							<label for="checkboxChuyenSinh">Chuyển sinh</label>
						</td>	
						
						<td>
							<input type="checkbox" id="checkboxAmNhac" name="chkAmNhac">	
							<label for="checkboxAmNhac">Âm nhạc</label>
						</td>	
						
						<td>
							<input type="checkbox" id="checkboxTamLy" name="chkTL">	
							<label for="checkboxTamLy">Tâm lý</label>
						</td>	
					</tr>
					
					<tr>
						<td>
							<input type="checkbox" id="checkboxKinhDi" name="chkKinhDi">	
							<label for="checkboxKinhDi">Kinh dị</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxHinhSu" name="chkHinhSu">
							<label for="checkboxHinhSu">Hình sự</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxVienTuong" name="chkVienTuong">
							<label for="checkboxVienTuong">Viễn tưởng</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxThanThoai" name="chkThanThoai">
							<label for="checkboxThanThoai">Thần thoại</label>
						</td>
						
						
					</tr>
					
					<tr>
						<td>
							<input type="checkbox" id="checkboxGiaDinh" name="chkGiaDinh">
							<label for="checkboxGiaDinh">Gia đình</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxKichTinh" name="chkKichTinh">
							<label for="checkboxKichTinh">Kịch tính</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxPhieuLuu" name="chkPhieuLuu">
							<label for="checkboxPhieuLuu">Phiêu lưu</label>
						</td>
						
						<td>
							<input type="checkbox" id="checkboxKhoaHoc" name="chkKhoaHoc">
							<label for="checkboxKhoaHoc">Khoa học</label>
						</td>
						
					</tr>
						
				</table>
				<div class = "titleNamPhatHanh">
					Năm phát hành:
					<div>
						<select id="optNamPhatHanh" name="optNamPhatHanh">
						<?php
							$current_year = date('Y');
							for ($year = 2000; $year <= $current_year; $year++)
							{
								echo "<option value=\"$year\">$year</option>";
							}
						?>
						</select>
					</div>
				</div>
					
				<div class = "titleQuocGia">
					Quốc gia:
					<select id="optQuocGia" name="optQuocGia">
					<?php
						$mangQuocGia = array("Mỹ", "Vương Quốc Anh", "Ấn Độ");
						foreach ($mangQuocGia as $country)
						{
							echo "<option value=\"$country\">$country</option>";
						}
					?>
					</select>
				</div>
				
				<div>
					<button class = "LocPhim" name = "btnLocPhim" type = "submit">
						Lọc phim
					</button>
				</div>
					
			</div>
			
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
                <div class="title">Danh sách phim</div>
                <?php
                    require_once "../PHP/connect.php";
                    $limit = 1;//Giới hạn item trên 1 trang
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
                            where 1 limit '.$firstIndex.','.$limit;
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
        <footer>
            <img src="../Assets/Images/logo-theking.png" alt="" />
            Copyright 2023 © The King Watch Movie <br />
            Xem phim mới miễn phí nhanh chất lượng cao. Xem Phim online Việt
            Sub, Thuyết minh, lồng tiếng chất lượng HD. <br />
            Xem phim nhanh online chất lượng cao.
        </footer>
    </body>
</html>