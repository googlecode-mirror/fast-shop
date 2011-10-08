
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>FastShop</title>
<?php echo "<link rel='stylesheet' type='text/css' href='$dir'css/template.css' />"; ?>
<script type='text/javascript' src='jquery.min.js' /></script>
<script type='text/javascript'>
	$(document).ready(function() {
		$('#navMain ul > li > ul').hide();
		$('#openCates > ul').show();
		//$('#navMain ul li ul:first').show();
		$('#navMain ul > li > h4').click(function() {
			$(this).next().toggle();
		});
		slideShow();
	});
	
		function slideShow() {
 			 var current = $('#slideShow a.show');
			 var next = current.next().length ? current.next() : current.parent().children(':first');
  
 			 current.hide().removeClass('show');
 			 next.fadeIn().addClass('show');
  
 			 setTimeout(slideShow, 3000);
		}
</script>
</head>

<body>
<div id='header'>
<div id='loginPlace'>
	Xin chào, <?php if (isset($_COOKIE['username']))  echo $username; else echo 'Khách'?><br/>
		<a href='user/login.php'>Đăng nhập</a> hoặc
		<a href='signup.php'>Đăng ký</a>
</div>
<div id='navHeader'>
	<span><a href='#'>Bestseller</a></span>
	<span><a href='#'>Giảm giá</a></span>
	<span style="border-right: none;"><a href='#'>Trợ giúp</a></span>
</div>
<form action='search.php' method='get'>
	<input id='searchBox' type='text' name='searchBox' size='60' >&nbsp;Tìm kiếm
</form>

</div> <!--end header-->

