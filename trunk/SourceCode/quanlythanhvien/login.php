<?php 
	include("/config/config.php");
	include("/footer.php");
	include("/header.php");
	include("/navigation.php");
echo "<form id='form1' name='form1' method='post' action='information.php'>";
echo "<table width='500' border='0' align='center' cellpadding='0' cellspacing='0'>";
echo "<tr>";
echo "<td align='center'>Username:</td>";
echo "<td><label>";
echo "<input name='username' type='text' size='25' />";
echo "</label></td>";
echo "</tr>";
echo "<tr>";
echo "<td align='center'>Password:</td>";
echo "<td><label>";
echo "<input name='password' type='password' size='25' />";
echo "</label></td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2' align='center'><label>";
echo "<input type='submit' name='ok' value='Dang nhap' />";
echo "</label></td>";
echo "</tr>";
echo "</table>";
if(isset($_POST['ok']))
{
if($_POST['username'] == NULL)
{
echo "Please enter your username<br />";
}
else
{
$u=$_POST['username'];
}
if($_POST['password'] == NULL)
{
echo "Please enter your password<br />";
}
else
{
$p=$_POST['password'];
}
}
if($u && $p)
{
include("/config/config.php");
$sql="select * from customer where CusUsername='".$u."' and CusPassword='".$p."'";
$query=mysql_query($sql);
if(mysql_num_rows($query) == 0)
{
 echo "Username or password is not correct, please try again";
}
else
{
$row=mysql_fetch_array($query);

}
}

?>
