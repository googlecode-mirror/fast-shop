<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
ini_set('display_errors', 1);
	include("../config/config.php");
	include("../footer.php");
	include("../header.php");
	include("../navigation.php");


echo '<a href="thaydoimatkhau.php">Quay lại<br></a>';


$CustomerID = $_POST['CustomerID'];
$sql_query = @mysql_query("SELECT * FROM customer WHERE id='{$CustomerID}'");
$member = @mysql_fetch_array( $sql_query ); 
//----Noi dung thong bao sau khi sua

echo "<b>Đang đổi mật khẩu tài khoản {$member['username']}</b>. <br> "; 



if ($_GET['do']=="sua") {
$passcu = md5( addslashes( $_POST['passcu'] ) );
$pass = md5( addslashes( $_POST['pass'] ) );
$repass = md5( addslashes( $_POST['repass'] ) );
if(md5( addslashes( $_POST['passcu'] ) )==mysql_query("SELECT CusPassword FROM customer WHERE CustomerID=1")) 
{
if ($_POST['pass']==$_POST['repass'] && $_POST['pass']!="") 
{
$sqlx="UPDATE `customer` SET `CusPassword` = '".$pass."' WHERE `CustomerID` = 1 ;";
$suapass=mysql_query($sqlx);
if ($suapass) 
echo "(Đã đổi pass) ";
else
echo "(Chưa đổi pass) ";
}
else echo "(Chưa đổi pass. Lỗi: mật khẩu không thể để trống) ";
}
else echo "(mật khẩu cũ không đúng) ";
}

else
echo"
<form method='POST' action='?do=sua'>
<table border='1' width='100%' id='table1' cellspacing='0' cellpadding='0' style='border-collapse: collapse' bordercolor='#C0C0C0'> 
<tr>
<td>Password cũ:</td>
<td><input type='password' name='passcu' size='20'></td>
</tr>
<tr>
<td>Password:</td>
<td><input type='password' name='pass' size='20'></td>
</tr>
<tr>
<td>Retype Password:</td>
<td><input type='password' name='repass' size='20'></td>
</tr>
</table>
<p align='center'><input type='submit' value='Sửa'><input type='reset' value='Khôi phục' name='B2'></p>
</form>
";

?>