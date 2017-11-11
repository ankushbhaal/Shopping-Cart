<?php

session_start();

require 'Connection.php';

if(isset($_POST['Email_id']))
{

$eid = $_POST['Email_id'];

$pass = $_POST['password'];

$query = "SELECT * FROM signuptable where EmailId = '$eid' and Password = '$pass'";

$query2 = "SELECT * FROM Administrator where Email_id = '$eid' and Password = '$pass'";

$result = mysql_query($query) or die("Error in query");

$result3 = mysql_query($query2) or die("Error in query");

$row = mysql_num_rows($result);

$row2 = mysql_num_rows($result3);

$result2 = mysql_query("SELECT FirstName from signuptable where EmailId = '$eid'");

$r = mysql_fetch_row($result2);

if($row == 1)
{

$_SESSION['Email'] = $eid;

$_SESSION['name'] = $r[0];


header("location:index.php");

}
elseif($row2 == 1)
{

$_SESSION['Admin'] = $eid;

header("location:hompage2.php?");
}

else
{
header("location:index.php?");
}

}

mysql_close($db);
?>