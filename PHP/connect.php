<?php
	$servername = "localhost";
	$username = "root";
	$password = "vertrigo";
	$databasename = "webxemphim";
	$connect = new mysqli($servername, $username, $password, $databasename);
	if ($connect->connect_error){
		die("Không kết nối: " . $connect->connect_error);
		exit();
	}
?>
