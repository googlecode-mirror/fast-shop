<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$txtUser = $_POST['txtUser'];
$txtPass = $_POST['txtPass'];
$txtRePass = $_POST['txtRePass'];
$txtEmail = $_POST['txtEmail'];
$txtName = $_POST['txtName'];
$txtAdd = $_POST['txtAdd'];
$txtPhone = $_POST['txtPhone'];

$conn = mysql_connect("localhost","root","") or die("Ket noi khong thanh cong");

mysql_select_db("fastshop",$conn);

$sql="select * from Customer";
$result=mysql_query($sql) or die("Truy vấn không thành công!");
$row=mysql_fetch_array($result);
$count=mysql_num_rows($result);
if($count>0){?>
	<script type="text/javascript">
		alert("hehe da dc su dung roi");
	</script>
<?php sleep(10);
	header("location:register.php");
	mysql_close($conn); }
else{
	$sql="insert into Customer(CusName,CusAddress,CusUsername,CusPassword,CusEmail,CusTelePhone) 					value('".$txtName."','".$txtAdd."','".$txtUser."','".md5($txtPass)."','".$txtEmail."','".$txtPhone."')";

	mysql_query($sql,$conn) or mysql_errno();
	echo "Dang ky thanh cong";
	mysql_close($conn);
}
?>
</body>
</html>