<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Control Panel</title>

<frameset rows="90, *" marginwidth="0" marginheight="0" frameborder="0" border="0" borderwidth="0">
	<frame name="head" src="head.php" scrolling=no>
<frameset cols="170, *" marginwidth="0" marginheight="0" frameborder="0" border="0" borderwidth="0">
	<frame name="navi" src="navi.php" scrolling=no>
	<frame name="main" src="main.php" marginwidth=20>
</frameset>
</frameset>
</head>

</html>




<?php
	require_once '../db_connect.php';
	require_once 'ad_functions.php';
	include_once 'cp_header.php';
	include_once 'cp_leftCol.php';
?>
<frameset rows=>
<div id='cp_main'>
<?php
		echo '<p>Welcome to admin control panel!</p>';
	mysql_close($link);
?>
</div>
</body>
</html>
*/
