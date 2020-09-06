
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
	<style>
	body{
		background-color:#00909E;
	}
	.side-container{
	background-color:#27496D;
   margin-left:auto;
    margin-right:auto;
    height:auto; 
    width:auto;
	}
   .img{
	   box-sizing:border box;
	   display:inline-block;
	    padding:12px 22px;
		  width: 100%;
  height: auto;
   }
   
.header {
  overflow: hidden;
  background-color:#dae1e7;
  padding: 20px 10px;
}

.header a {
  float:left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}


.header-right {
  float: right;
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
   .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color:#dae1e7;
  position: fixed;
  height: 65%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

</style>
</head>
<body>
<?php
   session_start();
   if(!isset($_SESSION['username']))
   {?>
	   <a href='index.php' class="btn btn-primary">LOGIN FIRST</button></a>
   <?php }
   else
   {
   $con= new mysqli("localhost","root","","login");
      ?>
   

<div class="container" >	
  <div class="side-container">
  <div class="header">
   <a href="#default" class="logo">APARTMENT VISIT SYSTEM</a>
  <div class="header-right">
    <a class="active" href="#home">Hi,<?php echo $_SESSION['username'] ?></a>
   <?php }?>
    <a href="logout.php">Logout</a>
</div>
</div>
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="new_visit.php">Add new Visitor</a>
  <a href="vis_search.php">Search Visitor</a>
  <a href="#about">Contact</a>
</div>
 <div class="img">
   <img src="apt.jpg" class="float-right" alt="Paris" >
  </div>
</div>
</div>
</body>
</html>
  