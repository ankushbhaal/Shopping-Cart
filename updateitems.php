<?php

include 'Connection.php';

if(isset($_POST['submit']))
{
	
$p = $_POST['id'];	
	
$d = $_POST['d'];	

$pri = $_POST['p'];		

$c = $_POST['cat'];		


	if($c == 'men')
	{

	$query = "UPDATE men SET Description = '$d' WHERE Product_id = '$p'";
	$query2 = "UPDATE men SET Price = '$pri' WHERE Product_id = '$p'";

	$l = mysql_query($query, $db);
	$l2 = mysql_query($query2, $db);

	if($l)
	{
		if($l2)
		{
			echo "Successfully Update item Details........";
		}
	}
	else
	{
			echo "Failed to Update item Details........";
	}

	}
	elseif($c == 'woman')
	{

	$query = "UPDATE woman SET Description = '$d' WHERE Product_id = '$p'";
	$query2 = "UPDATE woman SET Price = '$pri' WHERE Product_id = '$p'";

	$l = mysql_query($query, $db);
	$l2 = mysql_query($query2, $db);

	if($l)
	{
		if($l2)
		{
			echo "<h2>Successfully Update item Details........</h2>";
		}
	}
	else
	{
			echo "<h2>Failed to Update item Details........</h2>";
	}


	}
	else
	{

	}



mysql_close($db);


}

?>