
<?php
session_start();
require 'connect.php';
$name=$_POST['username'];
$pass=$_POST['pass_word'];
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	$name=mysqli_real_escape_string($connect,$_POST['username']);
	$pass=mysqli_real_escape_string($connect,$_POST['pass_word']);
	$name=trim($name);
	$pass=trim($pass);
	$name=stripslashes($name);
	$pass=stripslashes($pass);
		
			$select="select * from record where username='$name' && password='$pass' ";
			$result=mysqli_query($connect,$select);
				$row=mysqli_num_rows($result);
						if($row==1)
							{
								header('location:home.php');
								$_SESSION['username']=$name;
							}
							else
							{
								header('location:index.php');
							}
								
					
	}
?>
