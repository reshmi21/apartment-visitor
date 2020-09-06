<?php
   session_start();
   if(!isset($_SESSION['username'])){
   	header('location:new_visit.php');
   }
   $con= new mysqli("localhost","root","","apt_visit");
   $user=$_SESSION['username'];
   ?>
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
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	</head>
<body>
<div class="container" >
<form action="#" method ="POST">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="search by visitor id" name="search">
       <input type="submit" name="submit" value="Submit">
      </div>
  </form>
  <?php
  $id="";
 if(isset($_POST['submit'])){
	  $id=$_POST['search'];
	  $q="select * from new_list where nid='$id' ";
	  $find=mysqli_query($con,$q);
	  $row=mysqli_num_rows($find);
	   if($row==1){
	  while($row=mysqli_fetch_array($find))
	  {
		 
	/*	?>  
<?php
   $q1="select DISTINCT(visname) visname,contactno,resi,floorno,meetname from new_list where visname='$user'";
  if($res1=mysqli_query($con,$q1)){
    if(mysqli_num_rows($res1) > 0) {
    /* echo "<table>"; 
	  echo "<tr>"; 
	
                echo "<th>name</th>"; 
                echo "<th>contact</th>"; 
                echo "<th>address</th>"; 
				echo "<th>floor</th>"; 
				echo "<th>person to meet</th>"; 
            echo "</tr>"; 
			*/
			?>
			<div class="card">
			  <h4 class="card-header text-left">vistor information added</h4> 		
		<div class="card-body text-left" >
		 
             <?php echo $row['visname'] ?> <br><br>
			 <?php echo $row['contactno'] ?><br> <br>
			 <?php echo $row['resi'] ?><br><br> 
			 <?php echo $row['floorno'] ?><br><br> 
			 <?php echo $row['meetname']?><br><br>
			</div>
			<?php
   }
	}
   else
	  echo "ERROR: Could not able to execute. "  
                                . mysqli_error($con); 
	}
    ?>
	<a href='update.php' class="btn btn-primary">update to exit</button></a>
	</div><br><br>
	</div>
	
	   </body>
	   </html>
  