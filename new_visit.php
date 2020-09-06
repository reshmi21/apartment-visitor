<!DOCTYPE html>
   
   <head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="mystyleAdd.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<h2>Add new visitor</h2>
<div class="container">

  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="vis_name" name="vis_name" placeholder="Your name..">
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="contact">Contact</label>
      </div>
      <div class="col-75">
        <input type="text" id="contact" name="contact" placeholder="Your contact number..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="Your address.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="floorno">Floor</label>
      </div>
      <div class="col-75">
        <select id="floorno" name="floorno">
          <option value="first">First</option>
          <option value="second">Second</option>
          <option value="third">Third</option>
		  <option value="fourth">Fourth</option>
          <option value="fifth">Fifth</option>
        </select>
      </div>
    </div>
   <div class="row">
      <div class="col-25">
        <label for="fname">Name of Person to meet</label>
      </div>
      <div class="col-75">
        <input type="text" id="meet_name" name="meet_name" placeholder="Person you want to meet..">
      </div>
    </div>
	
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>