<?php
function personalInfo() {
	$query = "select AdAdress, AdTelephone, AdEmail from Admin where AdUsername = 'Hung'";
	$result = mysql_query($query);
	if (!$result) {
		echo "<script>window.location = 'index.php'</script>";
	}
	else {
		echo "<table><tr><th colspan='2'>Admin personal information</th></tr>";
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			echo "<tr><td>Adress</td><td>{$row['AdAdress']}</td></tr>";
			echo "<tr><td>Telephone Number</td><td>{$row['AdTelephone']}</td></tr>";
			echo "<tr><td>Email</td><td>{$row['AdEmail']}</td></tr>";
			echo "<tr><td colspan='2' style='text-align: center;'>
			<a href='edit_personal_info.php'><input type='submit' value='Edit' /></a></form></td></tr>";
		}
		echo "</table>";
	}
}

function editPersonalInfo() {
	$query = "select AdAdress, AdTelephone, AdEmail from Admin where AdUsername = 'Hung'";
	$result = mysql_query($query);
	if (!$result) {
		echo "<script>window.location = 'index.php'</script>";
	}
	else {
		echo "<form action='edit_personal_info.php' method='post'><table><tr><th colspan='2'>Admin personal information</th></tr>";
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			echo "<tr><td>Adress</td><td><input type='text' name='AdAdress' id='AdAdress' value='{$row['AdAdress']}' size='100' onblur='isNotEmpty(this)' /></td></tr>";
			echo "<tr><td>Telephone Number</td><td><input type='text' name='AdTelephone' id='AdTelephone' value='{$row['AdTelephone']}' onblur='isNotEmpty(this)' size='16' /></td></tr>";
			echo "<tr><td>Email</td><td><input type='text' name='AdEmail' id='AdEmail' value='{$row['AdEmail']}' onchange='isNotEmpty(this)' size='50'/></td></tr>";
			echo "<tr><td colspan='2' style='text-align: center;'>
			
			<input type='hidden' name='change' value='change' />
			<input type='submit' value='Edit' /></td></tr>";
		}
		echo "</table></form>";
	}
}

?>
