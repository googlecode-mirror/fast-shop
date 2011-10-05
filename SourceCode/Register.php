<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="C:\xampp\htdocs\code\js\validate.js"></script>
<script language="javascript">
function validatetxtUser(){
	var x=document.forms['frmRegister']['txtUser'].value;
	var temp1=new RegExp("[A-Z]");
	var temp2=new RegExp("[a-z]");
	if (x==null || x=="" || x.length<4 || x.length>12){
	document.getElementById("p1").style.visibility="visible";
		return false;
	}
	else if (temp1.test(x.substring(0,1))==false && temp2.test(x.substring(0,1))==false){
	document.getElementById("p1").style.visibility="visible";
		return false;
	}
}

function validatetxtPass(){
	var x=document.forms['frmRegister']['txtPass'].value;
	if (x.length<6){
	document.getElementById("p2").style.visibility="visible";
		return false;
	}
}

function validatetxtRePass(){
	var x=document.forms['frmRegister']['txtPass'].value;
	var y=document.forms['frmRegister']['txtRePass'].value;
	if (x!=y || x.length<6){
		document.getElementById("p3").style.visibility="visible";
		return false;
	}
}

function validatetxtName(){
	var x=document.forms['frmRegister']['txtName'].value;
	if (x==null || x==""){
		document.getElementById("p5").style.visibility="visible";
		return false;
	}
}

function validatetxtAdd(){
	var x=document.forms['frmRegister']['txtAdd'].value;
	if (x==null || x==""){
		document.getElementById("p6").style.visibility="visible";
		return false;
	}
}

function validatetxtPhone(){
	var x=document.forms['frmRegister']['txtPhone'].value;
	if (x==null || x=="" || isNaN(x)==false){
		document.getElementById("p7").style.visibility="visible";
		return false;
	}
}

function validatetxtEmail(){
	var x=document.forms['frmRegister']['txtEmail'].value;
	var temp= new RegExp("\\w{3,20}@\\w{3,20}\\.\\w{3}", "");
	if (temp.test(x)==false){
		document.getElementById("p4").style.visibility="visible";
		return false;
	}
}
</script>
</head>

<body>

<form action="regProccess.php" method="post" name="frmRegister" target="_parent" id="frmRegister">
  <table width="50%" border="0" align="center">
    <tr>
      <td colspan="3"><div align="center"><strong>ĐĂNG KÝ THÔNG TIN THÀNH VIÊN</strong></div></td>
    </tr>
    <tr>
      <td width="44%" height="21"><div align="right"></div></td>
      <td width="23%">&nbsp;</td>
      <td width="33%">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right">Tên đăng nhập</div></td>
      <td>
      <input type="text" name="txtUser" id="txtUser" onblur="validatetxtUser()" /></td>
      <td><span id="p1" style="visibility:hidden;color:#FF0000"><img src="admin/images/Icon_Delete.gif" alt="img" width="35" height="32" align="absmiddle" />Không hợp lệ</span></td>
    </tr>
    <tr>
      <td><div align="right">Mật khẩu</div></td>
      <td>
          <input type="password" name="txtPass" id="txtPass" onblur="validatetxtPass()"/></td>
      <td><span id="p2" style="visibility:hidden;color:#FF0000"><img src="admin/images/Icon_Delete.gif" alt="img" width="35" height="32" align="absmiddle" />Không hợp lệ</span></td>
    </tr>
    <tr>
      <td><div align="right">Xác nhận mật khẩu </div></td>
      <td>
          <input type="password" name="txtRePass" id="txtRePass" onblur="validatetxtRePass()"/></td>
      <td><span id="p3" style="visibility:hidden;color:#FF0000"><img src="admin/images/Icon_Delete.gif" alt="img" width="35" height="32" align="absmiddle" />Không hợp lệ</span></td>
    </tr>
    <tr>
      <td><div align="right">Email</div></td>
      <td>
          <input type="text" name="txtEmail" id="txtEmail" onblur="validatetxtEmail()"/></td>
      <td><span id="p4" style="visibility:hidden;color:#FF0000"><img src="admin/images/Icon_Delete.gif" alt="img" width="35" height="32" align="absmiddle" />Không hợp lệ</span></td>
    </tr>
    <tr>
      <td><div align="right">Họ và tên </div></td>
      <td>
          <input type="text" name="txtName" id="txtName" onblur="validatetxtName()"/></td>
      <td><span id="p5" style="visibility:hidden;color:#FF0000"><img src="admin/images/Icon_Delete.gif" alt="img" width="35" height="32" align="absmiddle" />Không hợp lệ</span></td>
    </tr>
    <tr>
      <td><div align="right">Địa chỉ thường trú </div></td>
      <td>
          <input type="text" name="txtAdd" id="txtAdd" onblur="validatetxtAdd()"/></td>
      <td><span id="p6" style="visibility:hidden;color:#FF0000"><img src="admin/images/Icon_Delete.gif" alt="img" width="35" height="32" align="absmiddle" />Không hợp lệ</span></td>
    </tr>
    <tr>
      <td><div align="right">Điện thoại liên hệ</div></td>
      <td><input type="text" name="txtPhone" id="txtPhone" onblur="validatetxtPhone()"/></td>
      <td><span id="p7" style="visibility:hidden;color:#FF0000"><img src="admin/images/Icon_Delete.gif" alt="img" width="35" height="32" align="absmiddle" />Không hợp lệ</span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="cbAgree" value="checkbox" />
    <label for="txtPass"> Tôi đã đọc và chấp nhận các điều khoản của Website </label></td></tr>
    <tr>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Đăng ký" />
        <input type="reset" name="btnReset" id="btnReset" value="Làm lại" />
      </div></td>
    </tr>
  </table>
</form>

</body>
</html>