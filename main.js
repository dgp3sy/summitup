/*
     var city = document.getElementById("cityname");    
   function valid(minLength) {
      var msg = document.getElementById("error-msg");      
      if (city.value.length < 1) {
         msg.textContent = "Cannot be blank"
      }
      else {
         msg.textContent = "";
      }
   }

  user.addEventListener('blur', function() { 
         valid(8); 
      }, false);*/

      var user = document.getElementById("username");    
   function checkUsername(minLength) {
      var msg = document.getElementById("user-msg");      
      if (user.value.length < minLength && user.value.length > 0)
         msg.textContent = "Username must be " + minLength + " characters or more";
      else
         msg.textContent = "";
   }
   user.addEventListener('blur', function() { 
         checkUsername(8); 
      }, false);

 