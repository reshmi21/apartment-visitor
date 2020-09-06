
   <!DOCTYPE html>
   
   <head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet"type="text/css"href="mystyleAdd.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	
	</head>
<body>
<?php
   session_start();
   if(!isset($_SESSION['username']))
   {?>
	   <a href='index.php' class="btn btn-primary">login first</button></a>
   <?php }
   else{  
   $con= new mysqli("localhost","root","","apt_visit");
   ?>
 <div class="container">
 <br><br><br>
    <div class="floor"><br><br>
	<form  action="#" method ="POST">
				 <label for "floorno">Choose Floor:</label><br>
					  <select id= "floorno" name="floorno"> 
					<option value="first">1st</option>
					<option value="second">2nd</option>
					<option value="third">3rd</option>
					<option value="fourth">4th</option>
					</select>
					<br>
       <input type="submit" name="submit" id="btn" value="Submit" style="width:40">
	 
	   </div>
  </form>
   <table class="table text-center table-bordered table-hovered" id="stat">
	<tr>
	<th colspan="14"><h2 class=" text-center text-black">Visitor status</h2></th>
	</tr>
	<tr>
	<td colspan="2">Name</td>
	<td colspan="2">contact no</td>
	<td colspan="2">Address</td>
	<td colspan="2">Person meeting</td>
	<td colspan="2">In time</td>
	<td colspan="2">update on exit</td>
	</tr>
  <?php
  $floor="";
  if(isset($_POST['submit'])){
	  $floor=$_POST['floorno'];
	  $q="select * from new_list where floorno='$floor' ";
	  $find=mysqli_query($con,$q);
	  while($row=mysqli_fetch_array($find))
	  {
		 
		?>
	<tr>
	<td colspan="2"><?php echo $row['visname'] ?></td>
	<td colspan="2"><?php echo $row['contactno']?></td>
	<td colspan="2"><?php echo $row['resi']?></td>
	<td colspan="2"><?php echo $row['meetname']?></td>
	<td colspan="2"><?php echo $row['intime'];?> </td>
	<td colspan="2"><a href="#?id=<?php echo $row['nid']?>" class="btn btn-primary" id="out">Click to confirm exit</a>
	<p id="status"></p></td>
	
</tr>
 <?php
 }
  }
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
		   $q1="update new_list SET outdate='$outdate',outtime='$outtime' WHERE nid=$id";
		   $add=mysqli_query($con,$q1);
			echo "done";
			//"<script> location.href='visit_stat.php';</script>";
			}
	}
		 
   }
   ?>
</table>
<a href='home.php' class="btn btn-primary">Go to homepage</button></a>
</div>
<script>
var i = 0;
var t = document.getElementById('stat');
//var para=document.getElementById('status');
$("#stat tr").each(function() {
    $(t.rows[i].cells[5]).click(function()
	{
	var org=$(this).text();
	var para=$(this).find("p");
	para.html("Visitor Exited!");
	//console.log($(this).find("#out"));
	$(this).find("#out").hide();
	});
    //$(t.rows[i].cells[5]).hide();
	i++;
});
document.querySelector('#stat').value='';
</script>
</body>
</html>
