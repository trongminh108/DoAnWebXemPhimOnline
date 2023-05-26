<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require_once "../PHP/connect.php";

        if (!$_FILES["poster"]["error"])
            move_uploaded_file($_FILES["poster"]["tmp_name"], "../Assets/Images/posters/" . $_POST['txtID'] . ".jpg");

        $maphim = $_POST['txtID'];
        $tenphim = $_POST['txtTenPhim'];
        $nam = $_POST['txtNamPhatHanh'];
        $theloai = $_POST['txtTheLoai'];
        $quocgia = $_POST['txtQuocGia'];
        $dienvien = $_POST['txtDienVien'];
        $mota = $_POST['txtMoTa'];
        $link = $_POST['txtLink'];
        if (isset($_POST['isUpdate'])){
            $id = $_POST['isUpdate'];
            $query = "UPDATE phim SET maphim='$maphim', tenphim='$tenphim', namphathanh='$nam',
                theloai='$theloai', quocgia='$quocgia', dienvien='$dienvien', mota='$mota', link='$link'
                WHERE maphim='$id'";
        }
        else{
            $query = "INSERT INTO phim(maphim, tenphim, namphathanh, theloai, quocgia, dienvien, mota, link) 
            VALUES ('$maphim', '$tenphim', '$nam', '$theloai',
            '$quocgia', '$dienvien', '$mota', '$link')";
        }

        if ($connect->query($query)){
            header('Location: ADMIN_ThemPhim.php');
        }
        else{
            echo "Lỗi: " . $sql . "<br/>" . $connect->error;
        }

    ?>
</body>
</html>