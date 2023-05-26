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
                    <input type = "button" value = "Đăng xuất" class = "btnDangXuat"/>
                </a>
            </div>
            <div class="topnav">
                <ul class="nav">
                    <li><a href="ADMIN_ThemPhim.php">Thêm phim</a></li>
                    <li><a href="ADMIN_Film.php">Quản lý phim</a></li>
                    <li><a href="ADMIN_User.php">Quản lý người dùng</a></li>
                </ul>
            </div>
        </header>
        
        <div class="container">
            <p class = "CapNhatPhim">
                <?php
                    $maphim = "";
                    $tenphim = "";
                    $namphathanh = "";
                    $theloai = "";
                    $quocgia = "";
                    $dienvien = "";
                    $mota = "";
                    $link = "";
                    require_once "../PHP/connect.php";
                    if (isset($_GET['id'])){
                        echo "Cập nhật phim";
                        $query = "SELECT * FROM phim WHERE maphim='{$_GET['id']}'";
                        $row = $connect->query($query)->fetch_assoc();
                        $maphim = $row['maphim'];
                        $tenphim = $row['tenphim'];
                        $namphathanh = $row['namphathanh'];
                        $theloai = $row['theloai'];
                        $quocgia = $row['quocgia'];
                        $dienvien = $row['dienvien'];
                        $mota = $row['mota'];
                        $link =$row['link'];
                    }
                    else
                        echo "Thêm phim";
                ?>
            </p>
            <form action="ADMIN_CapNhatSubmit.php" method="post" enctype="multipart/form-data">
                <table class = "tableCapNhatPhim">
                    <tr>
                        <td><label for="l_ID">ID</label></td>
                        <td><input type="text" id="l_ID" name="txtID" value="<?= $maphim ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Tên phim</label></td>
                        <td><input type="text" id="l_ID" name="txtTenPhim" value="<?= $tenphim ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Năm phát hành</label></td>
                        <td><input type="text" id="l_ID" name="txtNamPhatHanh" value="<?= $namphathanh ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Thể loại </label></td>
                        <td><input type="text" id="l_ID" name="txtTheLoai" value="<?= $theloai ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Quốc gia</label></td>
                        <td><input type="text" id="l_ID" name="txtQuocGia" value="<?= $quocgia ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="l_ID">Diễn viên</label></td>
                        <td><input type="text" id="l_ID" name="txtDienVien" value="<?= $dienvien ?>"></td>
                    </tr>

                    <tr>
                        <div>
                            <td><label for="l_ID">Mô tả</label></td>
                            <td>
                                <textarea name="txtMoTa" type = "text" id = "l_ID" rows="8" cols="60">
                                    <?php echo $mota; ?>
                                </textarea>
                            </td>
                        </div>
                    </tr>

                    <tr>
                        <div>
                            <td><label for="l_ID">Link</label></td>
                            <td>
                                <textarea name="txtLink" type = "text" id = "l_ID" rows="8" cols="60">
                                    <?php echo $link; ?>
                                </textarea>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <td><label for="l_ID">Poster</label></td>
                        <td>
                            <div class="poster"></div>
                            <input type="file" id="myFile" onchange="previewImage(event)" name="poster">
                            <script>
                                function previewImage(event) {
                                    var input = event.target;
                                    var reader = new FileReader();

                                    reader.onload = function() {
                                    var preview = document.getElementsByClassName('poster')[0];
                                    preview.style.backgroundImage = 'url(' + reader.result + ')';
                                    preview.style.display = 'block';
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            </script>
                            <style>
                                .poster {
                                    width: 168px;
                                    height: 216px;
                                    background-color: white;
                                    background-image: url("../Assets/Images/posters/<?php echo $maphim; ?>.jpg");
                                    background-size: cover;
                                    margin-top: 15px;
                                }
                            </style>
                        </td>
                    </tr>
                </table> 
                <button type="submit" class="btnDangPhim" id="button_post" name="button_post">
            </form>
                <?php
                    if (isset($_GET['id']))
                        echo "Cập nhật phim";
                    else
                        echo "Đăng phim";
                ?>
            </button>

        </div>
    </body>
</html>