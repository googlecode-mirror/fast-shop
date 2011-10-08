<?php
	mysql_query("SET NAMES 'UTF8'");
	if (isset($_GET['CategoryID'])) {
		$openCates = $_GET['CategoryID'];
	}
	else {
		$openCates = 1;
	}
	 $query = "select CategoryID, CateName, DepName, Department.DepartmentID from Category, Department
 where Category.DepartmentID = Department.DepartmentID order by Department.DepartmentID";
 	
	 $result = mysql_query($query);
	 while ($row = mysql_fetch_array($result, MYSQL_ASSOC))  {
	 	$menu[$row['DepName']][ $row['CateName'] ] =  $row['CategoryID']; //structure of menu: DepName => [ Catename1=> Cate1ID, Catename2 => Cate2ID,...]
	 }
	 echo "<div id='navMain'><ul>";
	 foreach($menu as $depName => $cates) {
	 	if (in_array($openCates, array_values($cates))) //if so, the list of cates of this dep will be shown
	 		echo "<li id='openCates'><h4>$depName</h4>\n<ul>";
	 	else
	 		echo "<li><h4>$depName</h4>\n<ul>"; //$depDetail[0] is DepID
	 	foreach ($cates as $cateName => $cateID) { //$cates[1] is an array of catenames
	 		echo "<li><a href='show.php?CategoryID={$cateID}'>{$cateName}</a></li>\n";
	 	}
	 	echo "</ul></li>";
	 }
	 echo "</ul></div>";
?>
