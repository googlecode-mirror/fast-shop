
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/template.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
	ini_set('display_errors', 1);
	include("../config/config.php");
	include("../footer.php");
	include("../header.php");
	include("../navigation.php");
	$sql = "select CustomerID,CusName,CusAddress,CusEmail,CusTelePhone,CusReceiveEmail from Customer where CustomerID=1";
	$result = mysql_query($sql, $conn);
	
	echo "<form id='form1' name='form1' method='post' action='proccessEdit.php'>";
	echo "<table width='500' border='1' cellspacing='0' cellpadding='0' align='center'>";
	//if ($result) echo "ok";
	//else echo "loi";

	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{
			echo "<tr><td>CustomerID</td><td><input type='text' readonly='true' name='CustomerID' value='".$row['CustomerID']."' /></td></tr>";
			echo "<tr><td>Họ và tên</td><td><input type='text' name='CusName' value='".$row['CusName']."' /></td></tr>";
			echo "<tr><td>Điện thoại</td><td><input type='text' name='CusTelePhone' value='".$row['CusTelePhone']."' /></td></tr>";
			echo "<tr><td>Điạ chỉ</td><td><input type='text' name='CusAddress' value='".$row['CusAddress']."' /></td></tr>";
			echo "<tr><td>Email</td><td><input type='text' name='CusEmail' value='".$row['CusEmail']."' /></td></tr>";
			if ($row['CusReceiveEmail']) {
				echo "<tr><td>Nhan email</td><td><input type='checkbox' name='CusReceiveEmail' checked='checked' value='".$row['CusReceiveEmail']."' /></td></tr>";
			}
			else {
				echo "<tr><td>Nhan email</td><td><input type='checkbox' name='CusReceiveEmail'  value='".$row['CusReceiveEmail']."' /></td></tr>";
			}
			echo "<tr><td colspan='2' align='center'>
			<input type='hidden' name='CustomerID' value='{$row['CustomerID']}' />
			<input type='submit' name='submit' value='thay đổi thông tin' /></td></tr>"; 
	}
	echo "</table>";
	echo "</form>";
	echo '<a href="../thaydoimatkhau.php?CustomerID">Thay đổi mật khẩu thành viên<br></a>';

?>
</body>
</html>
