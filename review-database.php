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

try 
{
//  $db = new PDO("mysql:host=$hostname;dbname=web4640", $username, $password);
   $db = new PDO($dsn, $username, $password);



  if (($_SERVER['REQUEST_METHOD'] == 'GET') && (!empty($_GET))) {
    if (isset($_GET['Name']))
	    $hike = $_GET['Name'];

    if (isset($_GET['Location']))
	    $loc = $_GET['Location'];

    if (isset($_GET['Distance']))
	    $dist = $_GET['Distance'];

    if (isset($_GET['Review']))
      $rev = htmlspecialchars($_GET['Review']);
    echo(htmlspecialchars($_GET['Review']));

    //$user = who is entering the review? - use a session?
     session_start();
     $user = $_SESSION['email'];


      // Add item to database here
    $sql = "INSERT INTO review (Username, Hike_Name, Location, Distance, Review) VALUES ('$user', '$hike', '$loc', '$dist', '$rev')";

    if ($conn->query($sql) == TRUE) {

      // How to redirect to review.php with data table information
      //header("Location: review.php?Username=$user&Email=$email&Password=$pwd");
    }
    else {
      echo "error: " . $sql  . $conn->error;
    }


    header("Location: index.html");

  }
	


}
catch (PDOException $e)  {

   $error_message = $e->getMessage();        
   echo "<p>An error occurred while connecting to the database: $error_message </p>";
}
catch (Exception $e)       
{
   $error_message = $e->getMessage();
   echo "<p>Error message: $error_message </p>";
}
?>