<?php
session_start();

if(isset($_SESSION['Email']))
{


$e = $_SESSION['Email'];

}

// set LastName = '".$ln."' set Gender = '".gen."' set ContactNo = '".$cn."'

include 'Connection.php';

if(isset($_POST['submit']))
{

$fn = $_POST['f'];

$ln = $_POST['l'];

$gen = $_POST['g'];

$cn = $_POST['c'];

$query = "UPDATE signuptable set FirstName = '".$fn."' where EmailId = '".$e."' ";
$query2 = "UPDATE signuptable set LastName = '".$ln."' where EmailId = '".$e."' ";
$query3 = "UPDATE signuptable set Gender = '".$gen."' where EmailId = '".$e."' ";
$query4 = "UPDATE signuptable set ContactNo = '".$cn."' where EmailId = '".$e."' ";

mysql_query("$query",$db) or die("Failed to Update........data");
mysql_query("$query2",$db) or die("Failed to Update........data");
mysql_query("$query3",$db) or die("Failed to Update........data");
mysql_query("$query4",$db) or die("Failed to Update........data");

echo "<h1> Successfully Update Data.........</h1>";

}
else
{
echo "<h1 style = 'color:red;'> Failed to Update Data................!</h1>";
}
mysql_close($db);
?>