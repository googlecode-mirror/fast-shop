<?php
	include("../config/config.php");
	include("../footer.php");
	include("../header.php");
	include("../navigation.php");

	if (isset($_POST['submitted'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "select CustomerID, CusUsername, CusPassword, CusName from Customer where CusUsername = '$username' and CusPassword = sha1('$password')";
		$result = mysql_query($query);
		if (!mysql_num_rows($result)) {
			echo "<script>alert('Sai username hoặc password! Vui lòng nhập lại!');
			window.location = 'login.php';</script>";
		}
		else {
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
			setcookie('username', $username, time()+86400, '/', '', 0, 0);
			setcookie('password', $password, time()+86400, '/', '', 0, 0);
			setcookie('name', $row['CusName'], time()+86400, '/', '', 0, 0);
			setcookie('userid', $row['CustomerID'], time()+86400, '/', '', 0, 0);
			echo "<script>alert('Bạn đã đăng nhập thành công! Click ok để chuyển về trang chủ!');
			window.location = '".$fixdir."index.php';</script>";			
		}
		exit();
	}
?>
<div id='main' style='text-align: center;'>
	<p>Đăng nhập:</p>
	<div>
	<span class='error'></span>
	<form id='loginform' action='login.php' method='post'>
		<table align="center" >
		<tr><td>Username: </td><td><input id='username' name='username' type='text' size='20' maxlength="50"/></td></tr>
		<tr><td>Password: </td><td><input id='password' name='password' type='password' size='20' maxlength="50"/></td></tr>
		<tr><td colspan="2" style='text-align: center;'><input type='hidden' name='submitted' value='true' /><input type='submit' value="Đăng nhập" /></td></tr>
		</table>
		<p><a href='getPassword.php'>Quên mật khẩu?</a>
				<?php echo "<a href='".$fixdir."register.php'>Chưa có tài khoản?</a></p>"; ?>
	</form>
	<script>
		$('#username').focus();
		$('#loginform').submit(function() {
			if (!$('#username').val()) {
				$('span.error').text('- Vui lòng nhập username!').show();
				return false;
			}
			if (!$('#password').val()) {
				$('span.error').text('- Vui lòng nhập password!').show();
				return false;
			}
			return true;
		});
	</script>
	</div>
</div>
<?php
	
	include_once '../footer.php';
	mysql_close($link);
?>
