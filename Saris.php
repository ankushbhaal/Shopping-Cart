<!DOCTYPE HTML>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<?php

session_start();

include 'Connection.php';

$result = mysql_query("SELECT * FROM woman where ProductType='Saris'");

echo "<h1 class = 'f'> Saris</h1><hr>";

echo "<table cellspacing = 10 cellpadding = 10 style='font-family:Futura Lt BT; font-weight:400;'> <tr>";

$c = 0;

while($row = mysql_fetch_array($result))
{	
$c++;	

echo "<td align = 'center' class = 'imgbg'>  
<a href ='DisplayProduct.php?p=$row[1]&p2=$row[0]&p3=$row[2]'><img src ='".$row['Imagepath']."' height = 307 width = 230> </a><br> <font style = 'font-family:Rupee Foradian'>` </font>".$row['Price']."<br>".$row['Description'];

if($c == 4)
{
echo "<tr>";
}

if($c >= 4)
{
$c = 0;
}
}


echo "</td></tr></table>";


mysql_close($db);

?>


</body>
</html>