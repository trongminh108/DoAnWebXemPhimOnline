<html>
	<body>
	<?php
        require_once "../PHP/connect.php";
		// session_start();
		//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.	
		$TenDN = $_POST['user'];
		$MKhau = $_POST['pass'];

		if(trim($TenDN) == ""){
			header("location: login.php");
		}
		else if(trim($MKhau) == "")
			echo "Vui lòng nhập mật khẩu!";
		else 
		{
			// $MKhau_new = md5($MKhau);
			$sql = "select * 
                    from user 
                    where user = '$TenDN' and pass = '$MKhau'";
			
			$danhsach = $connect->query($sql);
			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$danhsach) {
				die("Tên tài khoản hoặc mật khẩu sai!" . $connect->connect_error);
				exit();
			}

			if(mysqli_num_rows($danhsach) > 0)
			{
				$row = $danhsach->fetch_array(MYSQLI_ASSOC);
                session_start();
				$_SESSION['user'] = $row['user'];				
				$_SESSION['name'] = $row['name'];		
				$_SESSION['email'] = $row['email'];					
				//Thiết lập SESSION quyền hạn, 1: admin, 2: user
				$_SESSION['role'] = $row['role'];			
                // echo "<script>alert('{$_SESSION['role']}');</script>";
				Header("Location:index.php");
			}
			else
			{
				echo "Tên đăng nhập/mật khẩu không tồn tại <br />";
				echo "<a href = 'login.php'>Đăng nhập </a> <br />";
			}
		}			
	?>			
	</body>
</html>