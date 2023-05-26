<html>
	<body>
	<?php
		session_start();
		
		//HỦy bỏ SESSION
		unset($_SESSION['user']);
		unset($_SESSION['name']);	
		unset($_SESSION['email']);
		unset($_SESSION['role']);	
		
		Header("Location: index.php");		
	?>	
	</body>
</html>