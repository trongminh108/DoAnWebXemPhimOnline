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

        if ($_FILES["poster"]["error"])
            echo "Lỗi: " . $_FILES["poster"]["error"] . "<br/>";
        else{
            // if (file_exists("upload/" .$_FILES["poster"]["name"])){
            //     echo $_FILES["poster"]["name"] . " đã tồn tại!";
            // }
            // else{
                move_uploaded_file($_FILES["poster"]["tmp_name"], "../Assets/Images/posters/" . $_POST['txtID'] . ".jpg");
                echo "Địa chỉ file đã upload: ../Assets/Images/posters/" . $_FILES["poster"]["name"];
            // }
        }
        $maphim = $_POST['txtID'];
        $tenphim = $_POST['txtTenPhim'];
        $nam = $_POST['txtNamPhatHanh'];
        $theloai = $_POST['txtTheLoai'];
        $quocgia = $_POST['txtQuocGia'];
        $dienvien = $_POST['txtDienVien'];
        $mota = $_POST['txtMoTa'];
        $link = $_POST['txtLink'];
        $query = "INSERT INTO phim(maphim, tenphim, namphathanh, theloai, quocgia, dienvien, mota, link) 
            VALUES ('$maphim', '$tenphim', '$nam', '$theloai',
            '$quocgia', '$dienvien', '$mota', '$link')";
    
		if ($connect->query($query)){
			echo "<script>alert('Đã thêm phim!')</script>";
            header('Location: ADMIN_ThemPhim.php');
		}
		else{
			echo "Lỗi: " . $sql . "<br/>" . $connect->error;
		}
    ?>
</body>
</html>