<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet"type="text/css"href="mystyle.css">
	</head>
	<body>
			
		<div class="container">		
			<div class="login">
				<h1> ADMIN LOGIN</h1>
				<form action="process.php" method="POST">
					<label for "username">username</label><br>
					<input type="text" id="username" name="username" placeholder="enter username" ><br>
					<label for "pass_word">password</label><br>
					<input type="password" id="pass_word" name="pass_word" placeholder="enter password" ><br><br>
					<input type="submit" name="submit" value="Submit">
					
				</form>
				</div>
		</div>
		</body>
	</html>
