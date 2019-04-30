<!--Cathy Chang, Danny Perkins
cc5ar, dgp3sy-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel='stylesheet' href='loginstyles.css' type='text/css' />
	
</head>
<body background = "review_image.jpg">
	<div class="menu">
		<ul>
			<li><a href="./index.html">home</a></li>
		<li><a href="./list.php">my list</a></li>
		<li><a href="./tophikes.html">top rated</a></li>
		<li><a href="./review.php">write a review</a></li>
		<li><a href="./login.html">login</a></li>
		<li><a href="http://localhost:4200/">connect</a><li>

		</ul>
	</div>

	<div class="image-review">
			<div class="logincenter">
			 	<div class="login">
				 <form name = "login" action="review-database.php" method="GET">

				 	<label>Name of Hike: </label> 
				    <input type="text" name = "Name" id="name" autofocus required />
				    <div id="name-msg" class="feedback"></div>  <br/>

				    <label>Location: </label> 
				    <input type="text" name = "Location" id="location" autofocus required />
				    <div id="location-msg" class="feedback"></div>  <br/>

				    <label>Distance: </label>
				    <input type="text" name = "Distance" id="dist" autofocus required />
				    <div id="dist-msg" class="feedback"></div> <br/>

				    <label>Review: </label> <br/>
				    <textarea rows="8" cols="50" name="Review" id='Review'>Enter review here...</textarea>
				    <div id="rev-msg" class="feedback"></div>  <br/>

				    <input type="submit" value="Submit Review" />  

				  </form>
				
				</div>
			</div>
		</div>
<?php

?>

	<footer class="primary-footer container">
      <small class="copyright">&copy; Catherine Chang and Daniel Perkins | 2019 | All Rights Reserved</small>
      <nav class="nav">
      </nav>
    </footer>
</body>