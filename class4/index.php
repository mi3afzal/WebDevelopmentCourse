<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Untitled Document</title>
</head>
<body>

<?php
$first_name = '';
$last_name = '';
$email = '';
	
if(!empty($_POST))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	
	
	// connection to DB Server
	// select DB
	// write and run queries
	
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
	
	
	$sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`) VALUES ('$first_name', '$last_name', '$email')";
	if(mysqli_query($conn, $sql) == true) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>	
	<br>	
	<form action="index.php" method="post">

		What is your name? <input name="user_name" type="text"><br>

		<label for="first_name"> First Name </label> <input type="text" name="first_name" id="first_name" required value="<?php echo $first_name; ?>"><br>
		<label for="last_name"> Last Name </label> <input type="text" name="last_name" id="last_name" required value="<?php echo $last_name; ?>"><br>
		<label for="email"> Email </label> <input type="email" name="email" id="email" required value="<?php echo $email; ?>"><br>

		<input type="submit">

	</form>
		



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
															
	$sql = "SELECT * FROM `users`";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			//print_r($row);
			echo "id: " . $row['id']. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " " . $row["email"]. "<br>";
		}
	} else {
		echo "0 results";
	}
																

	mysqli_close($conn);

?>

</body>
</html>
