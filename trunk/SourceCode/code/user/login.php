<?php
	require_once '../db_connect.php' ;
	include_once '../header.php';
	include_once '../navigation.php';
?>
<div id='main'>
	<form action='login.php' method='post'>
		<table border='2px'>
		<tr><td><input name='username' type='text' size='50' /></td></tr>
		<tr><td><input name='password' type='password' size='50' /></td></tr>
		</table>
	</form>
</div>
<?php
	include_once 'footer.php';
	mysql_close($link);
?>
