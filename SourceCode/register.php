<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="JavaScript" src="C:\xampp\htdocs\code\js\validate.js"></script>
<script language="javascript">
function validatetxtUser(){
	var x=document.forms['frmRegister']['txtUser'].value;
	var temp1=new RegExp("[A-Z]");
	var temp2=new RegExp("[a-z]");
	if (x==null || x=="" || x.length<4 || x.length>12){
		document.write("<p>Tên đăng nhập phải từ 4-12 ký tự</p>");
		return false;
	}
	else if (temp1.test(x.substring(0,1))==false && temp2.test(x.substring(0,1))==false){
		document.write("<p>Tên đăng nhập phải bắt đầu bằng chữ</p>");
		return false;
	}
}

function validatetxtPass(){
	var x=document.forms['frmRegister']['txtPass'].value;
	if (x.length<6){
		document.write("<p>Mật khẩu phải từ 6 ký tự trở lên</p>");
		return false;
	}
}

function validatetxtRePass(){
	var x=document.forms['frmRegister']['txtPass'].value;
	var y=document.forms['frmRegister']['txtRePass'].value;
	if (x!=y){
		document.write("<p>Xác nhận mật khẩu không chính xác</p>");
		return false;
	}
}

function validatetxtName(){
	var x=document.forms['frmRegister']['txtName'].value;
	if (x==null || x==""){
		document.write("<p>Tên không được để trống</p>");
		return false;
	}
}

function validatetxtAdd(){
	var x=document.forms['frmRegister']['txtAdd'].value;
	if (x==null || x==""){
		document.write("<p>Địa chỉ không được để trống</p>");
		return false;
	}
}

function validatetxtPhone(){
	var x=document.forms['frmRegister']['txtPhone'].value;
	if (x==null || x=="" || isNaN(x)==false){
		document.write("<p>Số điện thoại không được để trống và chỉ bao gồm số</p>");
		return false;
	}
}

function validatetxtEmail(){
	var x=document.forms['frmRegister']['txtEmail'].value;
	var temp= new RegExp("\\w{3,20}@\\w{3,20}\\.\\w{3}", "");
	if (temp.test(x)==false){
		document.write("<p>Định dạng Email không hợp lệ</p>");
		return false;
	}
}
</script>
</head>

<body>

<form action="regProccess.php" method="post" name="frmRegister" target="_parent" id="frmRegister">
  <table width="50%" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>ĐĂNG KÝ THÔNG TIN THÀNH VIÊN</strong></div></td>
    </tr>
    <tr>
      <td><div align="right">Tên đăng nhập</div></td>
      <td>
      <input type="text" name="txtUser" id="txtUser" onblur="validatetxtUser()" /></td>
    </tr>
    <tr>
      <td><div align="right">Mật khẩu</div></td>
      <td>
          <input type="password" name="txtPass" id="txtPass" onblur="validatetxtPass()"/></td>
    </tr>
    <tr>
      <td><div align="right">Xác nhận mật khẩu </div></td>
      <td>
          <input type="password" name="txtRePass" id="txtRePass" onblur="validatetxtRePass()"/></td>
    </tr>
    <tr>
      <td><div align="right">Email</div></td>
      <td>
          <input type="text" name="txtEmail" id="txtEmail" onblur="validatetxtEmail()"/></td>
    </tr>
    <tr>
      <td><div align="right">Họ và tên </div></td>
      <td>
          <input type="text" name="txtName" id="txtName" onblur="validatetxtName()"/></td>
    </tr>
    <tr>
      <td><div align="right">Địa chỉ thường trú </div></td>
      <td>
          <input type="text" name="txtAdd" id="txtAdd" onblur="validatetxtAdd()"/></td>
    </tr>
    <tr>
      <td><div align="right">Điện thoại liên hệ</div></td>
      <td>
          <input type="text" name="txtPhone" id="txtPhone" onblur="validatetxtPhone()"/></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="cbAgree" value="checkbox" />
    <label for="txtPass"> Tôi đã đọc và chấp nhận các điều khoản của Website </label></td></tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Đăng ký" />
        <input type="reset" name="btnReset" id="btnReset" value="Làm lại" />
      </div></td>
    </tr>
  </table>
</form>

</body>
</html>