<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="regProccess.php" method="post" name="frmRegister" target="_parent" id="frmRegister">
  <table width="50%" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>ĐĂNG KÝ THÔNG TIN THÀNH VIÊN</strong></div></td>
    </tr>
    <tr>
      <td><div align="right">Tên đăng nhập</div></td>
      <td><label for="txtUser"></label>
      <input type="text" name="txtUser" id="txtUser" /></td>
    </tr>
    <tr>
      <td><div align="right">Mật khẩu</div></td>
      <td><label for="txtPass"></label>
          <input type="password" name="txtPass" id="txtPass" /></td>
    </tr>
    <tr>
      <td><div align="right">Xác nhận mật khẩu </div></td>
      <td><label for="txtPass"></label>
          <input type="password" name="txtRePass" id="txtRePass" /></td>
    </tr>
    <tr>
      <td><div align="right">Email</div></td>
      <td><label for="txtPass"></label>
          <input type="text" name="txtEmail" id="txtEmail" /></td>
    </tr>
    <tr>
      <td><div align="right">Họ và tên </div></td>
      <td><label for="txtPass"></label>
          <input type="text" name="txtName" id="txtName" /></td>
    </tr>
    <tr>
      <td><div align="right">Địa chỉ thường trú </div></td>
      <td><label for="txtPass"></label>
          <input type="text" name="txtAdd" id="txtAdd" /></td>
    </tr>
    <tr>
      <td><div align="right">Điện thoại liên hệ </div></td>
      <td><label for="txtPass"></label>
          <input type="text" name="txtPhone" id="txtPhone" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="checkbox" value="checkbox" />
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
