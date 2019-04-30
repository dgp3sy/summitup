<?php session_start();    // make sessions available

// Session data are accessible from an implicit $_SESSION global array variable
// after a call is made to the session_start() function.

?>

<?php

// When an HTML form is submitted to the server using the post method, 
// its field data is automatically assigned to the implicit $_POST global array variable. 
// PHP script can check for the presence of individual submission fields using 
// a built-in isset() function to seek an element of a specified HTML field name. 
// When this confirms the field is present, its name and value can usually be 
// stored in $_SESSION global array variable for later used.
// On successful completion, the script can reloate the browser to the next page
// using the header() function to specify the target URL.

// Define a function to handle failed validation attempts 
function reject($entry)
{
   echo("Rejected Entry: ");
   echo 'Please <a href="login.html">Log in </a>';
   exit();    // exit the current script, no value is returned
}

if (isset($_POST['email'])) {
   $user = trim($_POST['email']);
   
   if (isset($_POST['password'])) {
      $pwd = trim($_POST['password']);
   
      $_SESSION['email'] = $user;
      $_SESSION['password'] = $pwd;

               
      
      // relocate the browser to another page using the header() function to specify the target URL
      header('Location: session-get.php');    
   
   }
}
else  
   header('Location: login.html');

?>