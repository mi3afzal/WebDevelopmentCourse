<?php require_once('header.php'); ?>
<?php if(isset($name) == true) echo 'Hi '.$name; ?>
	
	<br>
	<article>
		
		<form action="index.php" method="post">
			
			What is your name? <input name="user_name" type="text"><br>			
			<input type="submit">
			
		</form>
		
	</article>
	<br>

	<?php include('footer.php'); ?>

</body>
</html>
