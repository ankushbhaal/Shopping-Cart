<?php
include 'Connection.php';

if(isset($_GET['id']))
{
	
$i = $_GET['id'];

$q = "delete from signuptable where User_id = '$i'";

$c = mysql_query($q, $db);

if(!$c)
{
	
	
	echo "<h1> Failed to Delete User........</h1> ";
}
else
{
	header("location:Users.php");
}

}

mysql_close($db);

?>
