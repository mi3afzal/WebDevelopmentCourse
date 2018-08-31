<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
	$res = isset($_REQUEST['user_name']);
	
	if($res == TRUE)
	{
		$name = $_REQUEST['user_name'];
		//setcookie('Name', $name);
		
		$_SESSION['Name'] = $name;
	} 
	else
	{
		//if(isset($_COOKIE['Name'])) $name = $_COOKIE['Name'];
		if(isset($_SESSION['Name'])) $name = $_SESSION['Name'];
	}
	
?>

<header>
	<a href="index.php">Index</a>   
	<a href="home.php">Home</a><br><br><br><br>
</header>