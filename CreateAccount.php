<!DOCTYPE html>
<html>
<head>
    <title>CreateAccount</title>
    <?php include 'dbconnnection.php'?>
</head>
<body>
 <style>
.box{ 
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
    text-align: center;
    
  }
  </style>

<div class="box">
 
<form action="usercreated.php" method="post">
 
  <b><h3 style = "text-align: center">Create Account</h3></b>
 
  <img src= https://static.vecteezy.com/system/resources/thumbnails/005/545/335/small/user-sign-icon-person-symbol-human-avatar-isolated-on-white-backogrund-vector.jpg class = "image" ></th></tr></br> <!--User icon -->
 
  <label for="Email">Email:</label></br>
 <input type="Email" required placeholder="Email" name="Email" size="50"
 maxlength="100" />
 </br></br>
 
 <label for= "Name">Business Name or Name:</label></br>
 <input type="text" required placeholder="Name" name="Name" size="50"
 maxlength="100" /></br></br>
 
  
 <label for= "Password">Password:</label></br>
 <input type="Password" required placeholder="Password" name="Password" size="50"
 maxlength="100" id="myInput" /></br></br>



 <input type="radio" id="business" name="type" value="Y"> <!-- Y = business owner -->
<label for="business">Business Owner</label><br>
<input type="radio" id="business" name="type" value="N"> <!-- N = Loan officer -->
<label for="business">Loan Officer</label><br>
 

 <td><input type="submit" value="Login" /></td><br/>
</form>
 
</div>
</body>
</html>
 