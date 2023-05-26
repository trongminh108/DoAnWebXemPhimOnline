<html>
	<body>
	<?php
        require_once "../PHP/connect.php";
		// session_start();
		//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.	
		$TenDN = $_POST['user'];
		$MKhau = $_POST['pass'];
        $TenNguoiDung = $_POST['userDisplayName'];
        $Email = $_POST['email'];
        $VaiTro = 0;

		if(trim($TenDN) == ""){
			header("location: signin.php");
		}
		else if(trim($MKhau) == "")
			echo "Vui lòng nhập mật khẩu!";
		else 
		{
			// $MKhau_new = md5($MKhau);
			$sql = "select * 
                    from user 
                    where user = '$TenDN'";
			
			$danhsach = $connect->query($sql);
			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if ($danhsach->num_rows == 1) {
				die("Tên tài khoản đã tồn tại!" . $connect->connect_error);
				exit();
			}
            $sql = "INSERT INTO user VALUES ('$TenDN', '$MKhau', '$TenNguoiDung', '$Email', '$VaiTro')";
            if ($connect->query($sql)){
                session_start();
				$_SESSION['user'] = $TenDN;				
				$_SESSION['name'] = $TenNguoiDung;		
				$_SESSION['email'] = $Email;					
				//Thiết lập SESSION quyền hạn, 1: admin, 2: user
				$_SESSION['role'] = $VaiTro;			
				Header("Location:index.php");
            }
			else
			{
				echo "Tên đăng nhập đã tồn tại <br />";
				echo "<a href='signin.php'>Đăng ký </a> <br />";
			}
		}			
	?>			
	</body>
</html>