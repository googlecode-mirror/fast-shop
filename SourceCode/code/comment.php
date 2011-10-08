<?php
	if (!isset($_COOKIE['username'])) {
		echo "<script>alert('Để comment, bạn cần phải đăng nhập!');
		window.location = 'login.php';		
		</script>";
	}
	else {
		echo "<script>alert('Cảm ơn bạn đã comment!');";
		$query = "insert into Comment (ProductID, ComContent) values({$_POST['ProductID']}, '{$_POST['content']}')";
		
		if (!mysql_query($query)) {
			echo "Có lỗi xảy ra, xin lỗi quý khách!";
		}
		echo "<script>	window.location = 'showDetail.php?ProductID={$_POST['ProductID']}';</script>";
		
	}
?>
