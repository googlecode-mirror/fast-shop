<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Quan ly thanh vien</title>
</head>

<body>
<?php
	$conn = mysql_connect("localhost", "root", "") or die ("Không kết nối đc CSDL!");
	mysql_select_db("shop",$conn) or mysql_error("Không tồn tại bảng này trong CSDL!");
?>
</body>
</html>
