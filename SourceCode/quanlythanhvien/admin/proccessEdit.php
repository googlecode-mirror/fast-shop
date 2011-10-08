<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: proccessEdit</title>
</head>

<body>
	<?php
		include("../config/config.php");
		
		$id=$_POST['CustomerID'];
		$name=$_POST['CusName'];
		$tele=$_POST['CusTelePhone'];
		$address=$_POST['CusAddress'];
		$email=$_POST['CusEmail'];

		$update="update Customer set CusName='$name',CusTelePhone='$tele',CusAddress='$address',CusEmail='$email' where CustomerID=$id";
		
		mysql_query($update) or mysql_error();
		
		mysql_close($conn);
		?>
		<script>
					alert('Chúc mừng bạn cập nhật thành công!');
					window.location='information.php';
			</script>
	
</body>
</html>
