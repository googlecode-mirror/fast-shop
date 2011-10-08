<?php
	require_once 'db_connect.php' ;
	include_once 'header.php';
	include_once 'navigation.php';

	$categoryID = $_GET['ProductID'];
	$query = "select * from Product where ProductID = $categoryID";
	
	$result = mysql_query($query);
	//echo "scripname: ", $_SERVER['SCRIPT_NAME'];
	echo "<div id='main'><table>";
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "<tr><td><a href='showDetail.php?productID={$row['ProductID']}'><img src='{$row[ProdImage]}' alt=\"Product Image\" width='150' height='150'></a></td>\n
		<td style='width: 500px;'><a href='showDetail.php?productID={$row['ProductID']}'><strong>{$row['ProdName']}</strong></a><br />{$row['ProdDescription']}	</td>\n
		<td style='width: 150px;'>Giá tiền: <strong>{$row['ProdPrice']}</strong><br/>Trạng thái: ";
		if ($row['ProdLeft'] > 0) echo "Còn hàng<br /><br/>";
		else echo "Hết hàng<br /><br />";
		echo "<a style='color: red;' href='purchase.php?productID={$row['ProductID']}'><img src='images/purchase.png' alt='Purchase' />Mua</a>"; //nut mua hang
		echo "</td></tr>";
	}
	echo "</table>";
?>
<div id='comment' style='margin-top: 20px;'>
	<form action='comment.php' method='post'>
		<p>Cảm nhận về sản phẩm</p>
		<textarea name='content' rows='10' cols='40'>Góp ý</textarea><br/>
		<?php echo "<input type='hidden' name='ProductID' value='{$_GET['ProductID']}' />"; ?>
		<input type='submit' value="Góp ý" />
	</form>
</div>
<?php
	include_once 'footer.php';
	mysql_close($link);
?>
