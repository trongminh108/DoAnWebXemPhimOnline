<?php
	//BỔ SUNG CODE TẠI ĐÂY
	require_once "../PHP/connect.php";

	$user = $_GET['id'];
	$sql = "DELETE FROM user WHERE user='{$user}'";
	$res = $connect->query($sql);

	if ($res){
		header("location: ADMIN_User.php");
	}
	else{
		echo "Xóa user không thành công <br/>" . $connect->error;
	}
	$connect->close();
?>

