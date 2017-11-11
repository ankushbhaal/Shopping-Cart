<?php

session_start();

if(isset($_SESSION['Admin'])) 
{

?>

<! DOCTYPE HTML>
<head>
<title>FashioMode.com</title>
</head>
<body>
<?php include 'Header3.php';?>
<iframe src = "show.php" style = "border: 1px; width:1330px; height:615px;" name="frame" scrolling = yes>
this is iframe</iframe> 
<?php include 'Footer.php'; ?>
</body>
</html>

<?php

}

else
{
	
header("location:index.php");
	
}

?>