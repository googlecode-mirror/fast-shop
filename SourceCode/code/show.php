<?php
	require_once 'db_connect.php' ;
	include_once 'header.php';
	include_once 'navigation.php';

	$categoryID = $_GET['CategoryID'];
	$query = "select * from Product where CategoryID = $categoryID";
	
	$result = mysql_query($query);
	//echo "scripname: ", $_SERVER['SCRIPT_NAME'];
	echo "<div id='main'><table>";
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "<tr><td><a href='showDetail.php?ProductID={$row['ProductID']}'><img src='{$row[ProdImage]}' alt=\"Product Image\" width='150' height='150'></a></td>\n
		<td style='width: 500px;'><a href='showDetail.php?ProductID={$row['ProductID']}'><strong>{$row['ProdName']}</strong></a><br />{$row['ProdDescription']}	</td>\n
		<td style='width: 150px;'><div>Giá tiền: <strong>{$row['ProdPrice']}</strong></div></p>Trạng thái: ";
		if ($row['ProdLeft'] > 0) echo "Còn hàng<br /><br/>";
		else echo "Hết hàng<br /><br />";
		echo "<a style='color: red;' href='purchase.php?ProductID={$row['ProductID']}'><img src='images/purchase.png' alt='Purchase' />Mua</a>"; //nut mua hang
		echo "</td></tr>";
	}
	echo "</table></div>";
	include_once 'footer.php';
	mysql_close($link);
?>
