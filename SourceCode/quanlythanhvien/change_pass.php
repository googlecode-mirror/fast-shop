<?php

	include("config/config.php");



	$sql= "select * from customer where CusName='Hung'";
	$result = mysql_query($sql, $conn);
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{

	if($row["CusPassword"]==md5($_POST["matkhaucu"]))
	{
		$sql= "update customer set CusPassword=md5('{$_POST[matkhaumoi]}') where CusName='Hung'";
		mysql_query($sql);
		
		echo "<font  color='red'><center><h2>Đổi Mật Khẩu Thành Công!</h2></center></font>";
		
		echo '<meta http-equiv="refresh" content="2;url=index.php">';	
	
		exit();
	}
	else
	{
		echo "<font  color='red'><center><h2>Sai Mật Khẩu Cũ! Mời Bạn Nhập Lại!</h2></center></font>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thay Đổi Mật Khẩu</title>

<script type="text/javascript">

function checkSubmit()
{
	//form1.xacnhanmatkhaumoi.value
	if(document.getElementById("matkhaumoi").value!=document.getElementById("xacnhanmatkhaumoi").value)
	{
		alert("Mật Khẩu Mới Và Mật Khẩu Xác Nhận Không Trùng Nhau");
		document.getElementById("xacnhanmatkhaumoi").focus();
		return false;
	}
	
	return true;
	
}

</script>

<style type="text/css">
<!--
body {
	background-image: url(bg/bgmayxanh.gif);
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action=""  onsubmit="return checkSubmit()">
  <table width="500" border="0" align="center">
    <tr>
      <th colspan="2" bgcolor="#339900" scope="col"><h2>Đổi Mật Khẩu </h2></th>
    </tr>
    <tr>
      <td width="168" bgcolor="#339900"><h3>Mật Khẩu Cũ </h3></td>
      <td width="316" bgcolor="#339900"><label>
        <input id="matkhaucu" name="matkhaucu" type="password" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#339900"><h3>Mật Khẩu Mới </h3></td>
      <td bgcolor="#339900"><input id="matkhaumoi" name="matkhaumoi" type="password"  /></td>
    </tr>
    <tr>
      <td bgcolor="#339900"><h3>Xác Nhận Mật Khẩu Mới </h3></td>
      <td bgcolor="#339900"><input id="xacnhanmatkhaumoi" name="xacnhanmatkhaumoi" type="password" /></td>
    </tr>
    <tr>
      <td bgcolor="#339900">&nbsp;</td>
      <td bgcolor="#339900"><label>
        <input type="submit" name="Submit" value="Đổi Mật Khẩu" />
        
        <input type="reset" name="Submit2" value="Nhập Lại" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>

</html>
