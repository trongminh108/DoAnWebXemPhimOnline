<?php
	//BỔ SUNG CODE TẠI ĐÂY
	require_once "../PHP/connect.php";

	$MaPhim = $_GET['id'];
	$sql = "DELETE FROM phim WHERE maphim='{$MaPhim}'";
	$res = $connect->query($sql);

	if ($res){
		header("location: ADMIN_Film.php");
	}
	else{
		echo "Xóa khách hàng không thành công <br/>" . $connect->error;
	}
	$connect->close();
?>

