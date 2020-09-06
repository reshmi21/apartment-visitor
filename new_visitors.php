<?php
session_start();
   $con=new mysqli("localhost","root","","apt_visit");
   $name="";
		   $number="";
		   $address="";
		   $floor="";
		   $meet="";
		   $currdate="";
		   $currtime="";
   if(!$con)
	   die("cannot connect");
   else
   {
	   if($_SERVER['REQUEST_METHOD']=="POST")
	   {
		   $name=$_POST['vis_name'];
		   $number=$_POST['contact'];
		   $address=$_POST['address'];
		   $floor=$_POST['floorno'];
		   $meet=$_POST['meet_name'];
		   date_default_timezone_set("Asia/Calcutta");
		   $currdate=date("Y-m-d");
		   $currtime=date("h:i:sa");
		   $q="insert into new_list(visname,contactno,resi,floorno,meetname,indate,intime,status) values('$name','$number','$address','$floor','$meet','$currdate','$currtime','present')";
		   $add=mysqli_query($con,$q);
		   if($add)
		   {
					header('location:home.php');
				
		   }
		   else
			  echo mysqli_error($con);
	   }
   }