<!--Cathy Chang, Danny Perkins
cc5ar, dgp3sy-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel='stylesheet' href='loginstyles.css' type='text/css' />
	
</head>
<body background = "login_image.jpg">
	<div class="menu">
		<ul>
			<li><a href="./index.html">home</a></li>
		<li><a href="list.php">my list</a></li>
		<li><a href="./tophikes.html">top rated</a></li>
		<li><a href="review.php">write a review</a></li>
		<li><a href="./login.html">login</a></li>
		<li><a href="user-form.component.html">connect</a><li>

		</ul>
	</div>

	<div class="image">
			<div class="logincenter">
			 	<div class="login">
				 <form name = "login" action="login-database.php" method="POST">
				 	<label>Username: </label> 
				    <input type="text" name = "Name" id="name" autofocus required />
				    <div id="name-msg" class="feedback"></div>  <br/>

				    <label>Email: </label> 
				    <input type="text" name = "Email" id="email" autofocus required />
				    <div id="email-msg" class="feedback"></div>  <br/>

				    <label>Password: </label> 
				    <input type="password" name = "Password" id="pwd" required />
				    <div id="pwd-msg" class="feedback"></div>  <br/>
				    <input type="submit" id='submit-button' value="Create Account" name="action" />  

				  </form>
				
				</div>
			</div>
		</div>


	<footer class="primary-footer container">
      <small class="copyright">&copy; Catherine Chang and Daniel Perkins | 2019 | All Rights Reserved</small>
      <nav class="nav">
      </nav>
    </footer>


<script> 

function validateEmail() {
         var emailID = document.login.Email.value;
         var msg = document.getElementById("email-msg")
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 ) && emailID.length > 0) {
            msg.textContent = "Please enter a valid email ID"
            document.getElementById("submit-button").disabled = true;
         }
         else {
         	msg.textContent = "";
         	document.getElementById("submit-button").disabled = false;

         }
    }

var e_mail = document.getElementById("email");
e_mail.addEventListener('blur', function() {validateEmail();}, true);





</script>
<?php
//require('login-database.php');
?>        



</body>