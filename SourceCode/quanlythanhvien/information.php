<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("config/config.php");
	$sql = "select CusName,CusAdress,CusEmail,CusTelePhone,CusReceiveEmail from Customer where Cusname = 'Hung'";
	$result = mysql_query($sql, $conn) or mysql_error($conn);
	echo "<table>";
	while($row = mysql_fetch_array($result))
	{
			echo "<tr><td>Họ và tên</td><td><input type='text' name='CusName' value='".$row['CusName']."' /></td></tr>";
			echo "<tr><td>Điện thoại</td><td><input type='text' name='CusTelePhone' value='".$row['CusTelePhone']."' /></td></tr>";
			echo "<tr><td>Điện th</td><td><input type='text' name='CusAddress' value='".$row['CusAddress']."' /></td></tr>";
			echo "<tr><td>Điện thoại</td><td><input type='text' name='CusEmail' value='".$row['CusEmail']."' /></td></tr>";
			echo "<tr><td>".$row['CusReceiveEmail']."</td></tr>";
			if ($row['CusReceiveEmail']) {
				echo "<tr><td>Nhan email</td><td><input type='check' name='CusReceiveEmail' checked='checked' value='".$row['CusReceiveEmail']."' /></td></tr>";
			}
			else {
				echo "<tr><td>Nhan email</td><td><input type='check' name='CusReceiveEmail'  value='".$row['CusReceiveEmail']."' /></td></tr>";
			}
			echo "<tr><td colspan='2'><input type='submit' name='CusEmail' value='thay đổi thông tin' /></td></tr>"; 
	}
	echo "</table>";
?>
</body>
</html>
