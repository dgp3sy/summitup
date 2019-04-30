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

function reject($entry)
{
   echo("Rejected Entry: ");
   echo 'Please <a href="login.html">Log in </a>';
   exit();    // exit the current script, no value is returned
}

if (isset($_POST['Name'])) {

  //Expressions: 
   $len = len($_POST['Name']); // Predefined function
   $len_email = $_POST['Email'];
   $diff = $len_email - $len;

   $user = trim($_POST['Name']);
   
   if (isset($_POST['Password'])) {
      $pwd = trim($_POST['Password']);
   
       setcookie('Email', $user, time()+3600);
       setcookie('Password', md5($pwd), time()+3600);  // create a hash conversion of password values using md5() function
          

               
      
      // relocate the browser to another page using the header() function to specify the target URL
      header('Location: session-get.php');    
   
   }
}


try 
{
//  $db = new PDO("mysql:host=$hostname;dbname=web4640", $username, $password);
   $db = new PDO($dsn, $username, $password);



  if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST))) {
    if (isset($_POST['Name']))
	     $user = $_POST['Name'];
    if (isset($_POST['Email']))
	     $email = $_POST['Email'];
    if (isset($_POST['Password']))
	     $pwd = $_POST['Password'];
  }
	

	// Add item to database here
    $sql = "INSERT INTO login (Username, Email, Password)
    VALUES ('$user', '$email', '$pwd')";

    if ($conn->query($sql) == TRUE) {

      // How to redirect to review.php with data table information
      header("Location: index-cookie.php");
    }
    else {
      echo "error: " . $sql  . $conn->error;
    }


    echo "New record created successfully";
}

// Error messages: 
catch (PDOException $e)     
{

   $error_message = $e->getMessage();        
   echo "<p>An error occurred while connecting to the database: $error_message </p>";
}
catch (Exception $e)       
{
   $error_message = $e->getMessage();
   echo "<p>Error message: $error_message </p>";
}
?>