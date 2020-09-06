  <?php
	$con= new mysqli("localhost","root","","apt_visit");
	if(isset($_GET['id']))
	{
		 $id=$_GET['id'];
			$q="update new_list SET status='out' WHERE nid=$id";
			$update=mysqli_query($con,$q);
			if($update)
			{
				date_default_timezone_set("Asia/Calcutta");
				$outdate=date("Y-m-d");
		   $outtime=date("h:i:sa");
		   $q1="update new_list SET outdate='$outdate',outtime='$outtime' WHERE status='out'";
		   $add=mysqli_query($con,$q1);
			echo "<script> location.href='visit_stat.php';</script>";
			}
	}
		
	  else
			echo mysqli_error($con);
	  
	   ?>