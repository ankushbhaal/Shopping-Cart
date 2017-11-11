<?php

include 'Connection.php';

$c = $_POST['category'];

$p = $_POST['pid'];

$d = $_POST['Desc'];

$pri = $_POST['price'];

	if($c == 'men')
	{
		$query = "SELECT Imagepath from men where Product_id = '$p'";
		$r = mysql_query($query, $db);
		$r2 = mysql_fetch_array($r);		
		$string =  $r2['Imagepath'];
		$newstring = str_replace('/project/','',$string);	
		$query = "DELETE from men where Product_id = '$p'";

		$l = mysql_query($query, $db);
		if($l)
		{
			echo "<h2> Successfully Deleted.........";
			unlink($newstring);	
		}
		else
		{
			echo "<h2> Failed to delete...............";			
		}
	}
	else
	{

		$query = "SELECT Imagepath from woman where Product_id = '$p'";
		$r = mysql_query($query, $db);
		$r2 = mysql_fetch_array($r);		
		$string =  $r2['Imagepath'];
		$newstring = str_replace('/project/','',$string);	
		$query = "DELETE from woman where Product_id = '$p'";

		$l2 = mysql_query($query, $db);	

		if($l2)
		{
			echo "<h2> Successfully Deleted.........";
			unlink($newstring);	
		}
		else
		{
			echo "<h2> Failed to delete...............";			
		}

}


mysql_close($db);
?>