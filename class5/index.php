<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "php-class";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>To Do App</title>
</head>
<body>

<?php
	
/*
	Build To Do App
	
	build database schema - completed
	a way to insert task into database
	get list of tasks and show them to user
	allow user to mark a task as completed
	
	
	allow user to update and delete task.

*/	

if(!empty($_POST))
{
	$task = $_POST['task1'];

	// connection to DB Server
	// select DB
	// write and run queries
	
	$sql = "INSERT INTO `tasks` (`task`) VALUES ('$task')";
	if(mysqli_query($conn, $sql) == true) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

if(!empty($_GET['id']) and !empty($_GET['action']))
{
	if($_GET['action'] == 'delete') $sql = "Delete FROM tasks WHERE id = '".$_GET['id']."' ;";
	else $sql = "UPDATE tasks SET `status` = '".$_GET['action']."' WHERE id = '".$_GET['id']."' ;";
	
	if(mysqli_query($conn, $sql) == true) {
		echo "record Updated successfully";
		header('location: index.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
	
?>	
	<br>	
	<form action="index.php" method="post">

		<label for="task"> Task </label> 
		<input type="text" name="task1" id="task" required value="">
		<br>

		<input type="submit">

	</form>
		



<?php
															
	$sql = "SELECT * FROM `tasks`";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			//print_r($row);
			echo 'id: '.$row['id'].' - task: '.$row['task'].' - status: '.$row['status'] ;
			
			if($row['status'] == 'pending') echo '   <a href="index.php?id='.$row['id'].'&action=completed">Completed</a>   ';
			else echo '   <a href="index.php?id='.$row['id'].'&action=pending">pending</a>   ';
			
			echo '   <a href="index.php?id='.$row['id'].'&action=delete">Delete</a>   ';
			
			echo ' <br> ';
		}
	} else {
		echo "0 results";
	}
																

	mysqli_close($conn);

?>

</body>
</html>
