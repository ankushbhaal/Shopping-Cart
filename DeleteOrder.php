<?php
include 'Connection.php';

if(isset($_GET['id']))
{
	
$i = $_GET['id'];

$q = "delete from orders where Order_id = '$i'";

$c = mysql_query($q, $db);

if(!$c)
{
	
	echo "<h1> Failed to delete Order........</h1> ";
}
else
{
	header("location:AllOrders.php");
}

}

mysql_close($db);

?>
