<?php
	include("/config/config.php");
	include("/footer.php");
	include("/header.php");
	include("/navigation.php");
?>


<script >

function checkForm()
{
	if( $("#emailmoi").val() == "" )	
	{
		alert("Vui lòng nhập Email mới");
		return false;
	}
	var x=document.forms["form2"]["emailmoi"].value
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	  {
	  alert("Email mới khong hop le");
	  return false;
	  }
	
	if( $("#reemailmoi").val() == "" )	
	{
		alert("Vui lòng nhập Email mới để xác nhận ");
		return false;
	}
	var y=document.forms["form2"]["reemailmoi"].value
	var atpos1=y.indexOf("@");
	var dotpos1=y.lastIndexOf(".");
	if (atpos1<1 || dotpos1<atpos1+2 || dotpos1+2>=y.length)
	{
	  alert("Email mới xac nhan khong hop le");
	  return false;
	}
	
	if( $("#emailmoi").val() != $("#reemailmoi").val()  )	
	{
		alert("Email ko trùng nhau !!! Xin nhap lai");
		return false;
	}
	
	if( $("#matkhaumoi").val() == "" )	
	{
		alert("Vui lòng nhập mật khẩu mới");
		return false;
	}
	
	if( $("#rematkhaumoi").val() == "" )	
	{
		alert("Vui lòng nhập mật khẩu lại để xác nhận");
		return false;
	}
	
	if( $("#matkhaumoi").val() != $("#rematkhaumoi").val()  )	
	{
		alert("Mật khẩu ko trùng nhau !!! Xin nhap lai");
		return false;
	}
	
<!-- Validate 2. phan sua doi thong tin ca nhan -->
	
	
	if( $("#hotenmoi").val() == "" )	
	{
		alert("Vui lòng nhập họ tên mới");
		return false;
	}
	




	if( $("#diachimoi").val() == "" )	
	{
		alert("Vui lòng nhập cho biết địa chỉ mới của bạn");
		return false;
	}
  
	if( $("#sodienthoai").val() == "" )	
	{
		alert("Vui lòng nhập cho biết số điện thoại mới của bạn");
		return false;
	}

/*	var chrac= /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
	if(!document.getElementById("email").value.match(chrac))
	{
		alert("Sai định dạng email : Email phải có tên miền.");
		return false;
	} */

	
	if( $("#sodienthoai").val() == "" )	
	{
		alert("Vui lòng nhập số điện thoai của bạn");
		return false;
	}
/*	var dt=/^\d{9,11}$/;
	if( $("#sodienthoai").val() == "" ) 
	{
		alert("Vui lòng nhập số điện thoai di động của bạn");
		return false;
	}
	if(!dt.test($("#sodienthoai").val()))
	{
	    alert("số điện thoại không hợp lệ");
	    return false;
	} */
	kt=/^[0][1-9]([0-9]{7,9})$/;
	a=form1.sodienthoai.value;
	if(a=="")
	{
	alert("Vui lòng nhập số điện thoai di động của bạn");
	form1.sodienthoai.focus();
	return false;
	}
	else
	if(!kt.test)
	{
	alert("số điện thoại không hợp lệ");
	form1.sodienthoai.focus();
	return false;
	}
	
	
	return true;

}


</script>
<?php

	echo mysql_error();
	$sql= "select * from customer where CustomerID = 1 ";
	$result= mysql_query($sql,$conn);
	if ($result) echo "ok";
	else echo "loi";	
    while($row=mysql_fetch_array($result,MYSQL_ASSOC))
	{

	
echo "<h2 style='font-weight:bold color:blue; margin-bottom:10px; padding-bottom:10px;'> Sửa thông tin tài khoản : </h2>";
echo "<form method='post' action='' name='form1' id='form1' onsubmit='return checkForm()'>";
echo "<table width='500' border='0' align='center' cellpadding='0' cellspacing='0'>";
  
 
echo "<tr> <td colspan='2' align='center'> 1. Thông tin tài khoản</td> </tr>";
echo "<tr><td>Tên đăng nhập:</td><td><input type='text' name='CusUsername' value='".$row['CusUsername']."'/></td></tr> ";
	
echo "<tr><td>Email :</td><td> <input type='text' name='CusEmail' value='".$row['CusEmail']."' /></td></tr>";
	  
echo "<tr><td>Email mới:</td><td><input type='text' size='25' name='emailmoi' id='emailmoi'/></td></tr>";
		
		
echo "<tr><td>Nhập lại Email mới:</td><td><input type='text' size='25' name='reemailmoi' id='reemailmoi'/></td></tr>";
 
echo "<tr><td>Mật khẩu cũ :</td><td><input type='password' size='25' name='matkhaucu' id='matkhaucu'/></td></tr>";
	
echo "<tr><td>Mật khẩu mới :</td><td><input type='password' size='25' name='matkhaumoi' id='matkhaumoi'/></td></tr>";

echo "<tr><td>Nhập lại mật khẩu mới:</td><td><input type='password' size='25' name='rematkhaumoi' id='rematkhaumoi'/></td></tr>"; 
echo "<tr> <td colspan='2' align='center'> 2. Thông tin cá nhân</td> </tr>";
echo "<tr><td>Họ và tên mới :</td><td><input type='text' size='25' name='hotenmoi' id='hotenmoi'
	  title=Quý khach vui lòng điền đầy đủ thông tin tên thật của quý khách để đảm bảo cho việc giao dich'/>
	</td></tr>";
echo "<tr><td>Số điện thoại:</td><td><input type='text' size='25' tendangnhap='sodienthoaimoi' id='sodienthoaimoi'/></td></tr>";
echo "<tr><td  colspan='2' align='center'><label><input tendangnhap='' type='submit' onclick='MM_validateForm('adress','','R');return document.MM_returnValue' value='Hoàn tất sửa đổi'  /></label><label><input name='' type='reset' value='Nhập lại' /></label>";	
}
echo "</table>";
echo "</form>"; 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$sql= "select * from customer where CustomerID =1";
	$result= mysql_query($sql);
	$row= mysql_fetch_array($result);
	if(md5($_POST["matkhaucu"])== ($row["CusPassword"]) )
	{
		$sql= "update customer set  CusPassword = md5($_POST[matkhaumoi]),CusEmail = '{$_POST[emailmoi]}', CusName ='{$_POST[hotenmoi]}',
		CusAddress ='{$_POST[diachimoi]}',CusTelePhone ='{$_POST[sodienthoaimoi]}',
		 where CustomerID =1";
		mysql_query($sql) or mysql_error();;
		
		echo "<font color='red'>Sửa đổi thành công !!!</font>";
		
		echo '<meta http-equiv="refresh" content="3;url=index.php">';	
	
		exit();
	}
	else
	{
		echo "<font color='red'>Sai mật khẩu !!! Vui lòng nhập lại !</font>";
	}
}

?>
