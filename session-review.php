<?php 
session_start(); 
?>

<?php


function reject($entry)
{
   echo 'Please <a href="review.html"> fill in all fields </a>';
   exit();    // exit the current script, no value is returned
}

if (isset($_GET['name'])) {
   $name = trim($_GET['name']);
   if (!ctype_alnum($name))   
      reject('Name');
   
   if (isset($_GET['location'])) {
      $loc = trim($_GET['location']);
      if (!ctype_alnum($loc))
         reject('Location');

      if (isset($_GET['dist'])) {
         $dist = trim($_GET['dist']);

         if (isset($_GET['rev'])) {
            $rev = trim($_GET['rev']);

         
         $_SESSION['name'] = $name;
         $_SESSION['location'] = $loc;
         $_SESSION['dist'] = $dist;
         $_SESSION['rev'] = $rev;
         
         // relocate the browser to another page using the header() function to specify the target URL
         header('Location: session-review.php');    
         }
      }      
   }
}
else  
   header('Location: session-review.html');

?>