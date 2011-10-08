<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		include("/config/config.php");
		$pass=md5($_POST['pass']);
		$id=$_POST['CustomerID'];
	

		$update="update Customer set CusPassword='$pass' where CustomerID=$id";
		
		mysql_query($update) or mysql_error();
		
		mysql_close($conn);
		?>
		<script>
					alert('Chúc mừng bạn cập nhật thành công!');
					window.location='thaydoimatkhau.php';
			</script>
</body>
</html>
