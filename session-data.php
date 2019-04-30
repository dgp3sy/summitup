<?php session_start();     // always make session available when dealing session object  
?>

<?php

function kill_session()
{
   unset($_SESSION['email']);
   unset($_SESSION['pwd']);
   session_destroy();
   echo '<hr />Session Destroyed<br />';
   
   // display to see if there is anything left
   echo 'Session ID: '. session_id() .'<br />';
   var_dump($_SESSION);
}

// Check if any session variables are set and retrieve all stored names and values
if (count($_SESSION) > 0)
{
   echo '<dl>';
   foreach ($_SESSION as $key => $value)
   {
      echo "<dt>Key: $key";
      echo "<dd>Value: $value";
   }
   echo '</dl><hr/>';
   
   // display the session ID and array, then call the function to terminate the session
   echo 'Session ID: ' . session_id() . '<br />';
   var_dump($_SESSION);
   kill_session();
}
else 
   echo 'Please <a href="session-form.html" >Log in</a>';

?>