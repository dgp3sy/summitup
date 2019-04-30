<!--Cathy Chang, Danny Perkins
cc5ar, dgp3sy-->

<?php
// hostname
$hostname = 'localhost:3306';
// database name
$dbname = 'dgp3sy';
// database credentials
$username = 'dgp3sy';
$password = 'pwd4640';
$dsn = "mysql:host=$hostname;dbname=$dbname";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
  die("connection failed " . $conn->connect->error);
}
$sql = "SELECT Hike_Name, Location, Distance, Review FROM review";
$result = mysqli_query($conn, $sql);



mysqli_close($conn);
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel='stylesheet' href='liststyles.css' type='text/css' />
	
</head>
<body background="http://localhost/a-4/snowy-mountain.JPG">
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

	<div class="image">
			<div class="logincenter">
				<h1> My Reviews: </h1>
				<?php
				    while($row = mysqli_fetch_assoc($result)) {
        echo "Hike Name: " . $row["Hike_Name"]. " <br/> Location: " . $row["Location"]. " <br/> Distance: " . $row["Distance"]. "<br>" . $row['Review'] . "<a href='./edit-item.php'> edit</a>" . "<br/><br/>";
    }
				?> 

			 	 
			</div>
		</div>
	</body>

	<footer class="primary-footer container">
      <small class="copyright">&copy; Catherine Chang and Daniel Perkins | 2019 | All Rights Reserved</small>
      <nav class="nav">
      </nav>
    </footer>

