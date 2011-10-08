<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Log out</title>
</head>

<body>
<?php
	if (isset($_COOKIE['username'])) {
	setcookie('username', '', time()-86400, '/', '', 0, 0);
	setcookie('password', '', time()-86400, '/', '', 0, 0);
	}
	echo "<script>alert('Đăng xuất thành công!');
	window.location = 'login.php';</script>";
?>
</body>
</html>