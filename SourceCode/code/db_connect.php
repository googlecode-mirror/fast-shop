<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'FastShop');
	define('CSSDIR', '');
	define('LIVE', TRUE);
	if (LIVE)
		ini_set('display_errors', 0);
	$link = mysql_connect(HOST, USER, PASS);
	if (!$link) {
		die( 'Not connected: '.mysql_error());
	}
	mysql_select_db(DB, $link) or die ('Can\'t use '.DB.mysql_error());
	mysql_query("SET NAMES 'UTF8'");
?>
