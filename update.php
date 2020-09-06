<?php
session_start();
	 $con= new mysqli("localhost","root","","apt_visit");
			$id=$_GET['editid'];
			echo $id;
			$q="update new_list SET status='out' WHERE nid='$id'";
			$update=mysqli_query($con,$q);
			if($update)
			{
				echo "successful";
				date_default_timezone_set("Asia/Calcutta");
				$outdate=date("Y-m-d");
		   $outtime=date("h:i:sa");
		   $q1="update new_list SET outdate='$outdate',outtime='$outtime' WHERE nid='$id'";
		   $add=mysqli_query($con,$q1);
		   header('location:vis_search.php');
		   ?>
			</tr>
			<?php
			}
		?>