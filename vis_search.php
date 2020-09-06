
   <!DOCTYPE html>
   <head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
<body>
<?php
   session_start();
   if(!isset($_SESSION['username']))
   {
	   ?>
	   <a href='index.php' class="btn btn-primary">login first</button></a>
  <?php }
  else{
   $con= new mysqli("localhost","root","","apt_visit");
   ?>
 <div class="container" >
 <br><br><br>
  <div class="search"><br><br>
 <form action="#" method ="POST">
    <div class="input-group">
     <input type="text" class="form-control" placeholder="Enter Search Keyword" name="search">
	<input type="submit" name="submit" value="Submit">
      </div>
  </form>
  <table class="table text-center table-bordered table-hovered">
	<tr>
	<th colspan="11"><h2 class=" text-center text-black">Show results</h2></th>
	</tr>
	<tr>
	<td>Name</td>
	<td>contact no</td>
	<td>Address</td>
	<td>Floor visiting</td>
	<td>Person meeting</td>
	<td>Entering date</td>
	<td>Entering time</td>
	<td>Status</td>
	<td>Update on exit</td>
	<td>Outing date</td>
	<td>Outing time</td>
	</tr>
	<?php
  if((isset($_POST['submit'])) or(isset($_POST['submit'])) !='' ){
	  $search=$_POST['search'];
	  //echo $choice; 
		    $q="select * from new_list where visname like '%$search%' or contactno like '%$search%' or resi like '%$search%' or floorno like '%$search%' ";
	  $find=mysqli_query($con,$q);
	  while($row=mysqli_fetch_array($find))
	  {
		 ?>
		 <tr>
	<td><?php echo $row['visname'] ?></td>
	<td><?php echo $row['contactno']?></td>
	<td><?php echo $row['resi']?></td>
	<td><?php echo $row['floorno']?></td>
	<td><?php echo $row['meetname'];?> </td>
	<td><?php echo $row['indate'];?> </td>
	<td><?php echo $row['intime'];?> </td>
	<td><?php echo $row['status'];?> </td>
	<?php if($row['status']=='present'){
		?>
		
	   <td><a href="update.php?editid=<?php echo $row['nid'];?>" name="out" class="btn btn-primary btn-sm">update</button></a></td>
	  
	   <?php
	}
	else
	{?>
	<td><?php echo 'exited';?> </td>
	<td><?php echo $row['outdate'];?> </td>
	<td><?php echo $row['outtime'];?> </td>
	</tr>
	<?php
	}
  }
  }
	 else{
	 
	  //echo $choice; 
		    $q="select * from new_list order by indate desc ";
	  $find=mysqli_query($con,$q);
	  while($row=mysqli_fetch_array($find))
	  {
		?>
	<tr>
	<td><?php echo $row['visname'] ?></td>
	<td><?php echo $row['contactno']?></td>
	<td><?php echo $row['resi']?></td>
	<td><?php echo $row['floorno']?></td>
	<td><?php echo $row['meetname'];?> </td>
	<td><?php echo $row['indate'];?> </td>
	<td><?php echo $row['intime'];?> </td>
	<td><?php echo $row['status'];?> </td>
	<?php if($row['status']=='present'){
		?>
		
	   <td><a href="update.php?editid=<?php echo $row['nid'];?>" name="out" class="btn btn-primary btn-sm">update</button></a></td>
	  
	   <?php
	}
	else
	{?>
	<td><?php echo 'exited';?> </td>
	<td><?php echo $row['outdate'];?> </td>
	<td><?php echo $row['outtime'];?> </td>
	</tr>
	<?php
	}
  }
  }
	?>
</table>
<a href='home.php' class="btn btn-primary">Go to homepage</button></a>
   <?php }?>
</div>
</body>
</html>
