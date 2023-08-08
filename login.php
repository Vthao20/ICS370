<!DOCTYPE html>
<html>
  <head>
    <title>Project1Login</title>
    <link rel="stylesheet" href="styles.css">
    <?php include 'dbconnnection.php' 
 
    ?>
 
  </head>
 
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
<form action="ValidateUser.php " method="post">
  <b><h3 style = "text-align: center">Login</h3></b>
 
  <label for="email">Email:</label></br>
  <input type="email" required placeholder="Email" name="Email" size="50"
 maxlength="100" /></br></br>
 
 <label for="Password">Password:</label></br>
 <input type="password" required placeholder="Password" name="Password" size="50"
 maxlength="100" id="myInput" /></br></br>


 <input type="radio" id="type" name="type" value="Y"> <!-- Y = business owner -->
<label for="Business Owner">Business Owner</label><br>
<input type="radio" id="type" name="type" value="N"> <!-- N = Loan officer -->
<label for="Loan Officer">Loan Officer</label><br>

 
 <p style= "text-align:center"><a href="CreateAccount.php">Create an account</a></p></br>
 
 <td><input type="submit" value="Login" /></td><br/>
 </form>
</div>


