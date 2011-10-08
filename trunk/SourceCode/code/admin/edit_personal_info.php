<?php
	require_once '../db_connect.php';
	require_once 'ad_functions.php';
	include_once 'cp_header.php';
	include_once 'cp_leftCol.php';
?>
<div id='cp_main'>
<?php
	if (isset($_GET['function'])) {
		switch($_GET['function']) {
			case 'personalInfo':
				personalInfo();
				break;
			case 'editPersonalInfo':
				editPersonalInfo();
				break;
			default:
				echo '<p>Welcome to admin control panel!</p>';
				break;
		}
	}
	if (isset($_POST['change'])) {
		$AdAdress = $_POST['AdAdress'];
		$AdTelephone = $_POST['AdTelephone'];
		$AdEmail = $_POST['AdEmail'];
		$query = "update Admin set AdAdress = '$AdAdress', AdTelephone = '$AdTelephone', AdEmail = '$AdEmail' where AdUsername = 'Hung'";
		if (!mysql_query($query)) {
			die ('Fail to update personal information!<br/> '.mysql_error());
		}
		mysql_close($link);
		echo "<script>alert('Successful Update!');
		window.location = 'index.php?function=personalInfo';</script>";
	}
	else {
		editPersonalInfo();
	}
?>
</div>
</body>
</html>
