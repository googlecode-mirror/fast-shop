<?php
	require_once 'db_connect.php' ;
	include_once 'header.php';
	include_once 'navigation.php';
?>
<div id='bestsellerCol'>
	<h3>Bestseller</h3>
	<div><a href='#'><img src='images/hp_2.jpg' alt='bestseller' /></a></div>
	<div><a href='#'><img src='images/hp_1.jpg' alt='bestseller' /></a></div>
	</table>
</div><!--end bestsellerCol-->
<div id='main'>
<div id='slideShow'>
	<a href='#' class='show'><img  src='images/hp_1.jpg' alt='image' /></a>
	<a href='#'><img src='images/hp_2.jpg' alt='image' /></a>
	<a href='#'><img src='images/hp_3.jpg' alt='image' /></a>
</div>
</div>
<?php
	include_once 'footer.php';
	mysql_close($link);
?>
