<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'dbconnnection.php' 
?>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}


.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}


</style>
</head>

<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();
if((isset($_SESSION['Email']))||(isset($_SESSIOn['Password']))){

?>



<header>


<div class="topnav">
        <div> <!--Home button-->
            <a href="Bhome.php">
                <img class="logo" width = "40px" height = "40" src="business logo.jpg" />
            </a>
        </div>

        <div> <!--Home button-->
            <a href="">
                <img class="logo" width = "40px" height = "40" px src="usericon.jpg" />
            </a>
        </div>
    
  <h1>Buiness Finacial Group</h1>
  <b><?php echo $_SESSION['Email']; ?></b>
  <a href="Logout.php">Logout</a>
</div>
</header>


<h1>
  <?php echo "View spending application "; ?></h1>
<form method="post" action="pending.php">
  <input type="submit" value="view">
</form>
  <?php
$query = "SELECT * from loanlist"; 

$stmt = mysqli_query($con, $query);
echo "<p>You have enlisted ".$stmt->num_rows." loan and grants</p>";


if($stmt)
    {
     ?><h1><?php   echo 'Results'; ?></h1> <?php
    }
    
    else{
        echo 'Error. Could not fetch results';
    }

    while($row = $stmt->fetch_row()){
      echo "<p><strong>Loan Officer:".$row[1]."</strong>";
          echo "</br>Amount: ".$row[2];
      echo "</br>Requirements and discription: ".$row[3];
    ?>
    <input type="radio" id="select" name="select" value="select"> <!-- N = Loan officer -->
    <label for="select">select</label><br>
<?php
    }
?>

<h1 style = "text-align:center"> Application </h1> 
<form method="post" action="">
        <label for="businessName">Business name:</label>
        <input type="varchar" name="businessName" required><br><br>

        <label for="bEmail">Email:</label>
        <input type="varchar" name="bEmail" required><br><br>

        <p> Business scope and intended use </p>
        <label for="scope"></label>
        <textarea id="scope" name = "scope" rows="4" cols="50" required></textarea></br>

      <?php 
    $bName = $_POST['businessName'];
    $bEmail = $_POST['bEmail'];
    $bScope = $_POST['scope'];

    ?><br><h1>Submitted entry</h1></br>
    <br><?php echo "Business name : ".$bName; ?> </br>
   <br><?php echo "Email: ".$bEmail; ?></br>
    <br><?php echo "Scope: ". $bScope; ?></br>
        </select><br><br>

        <input type="submit" value="Apply">
    </form>
</html>


<?php


$query = "SELECT GrantID from loanlist"; 

$stmt = mysqli_query($con, $query);


$select = "SELECT * from loanlist where GrantID = '1'"; 

$get = mysqli_query($con, $select);

$query2 = "INSERT INTO loanapplication (applicationID, GrantID, bName, bEmail, Scope)
VALUES (NULL, 32, '$bName', '$bEmail', '$bScope')"; 

$stmt2 = mysqli_query($con, $query2);


/* insert application entry to database 

$queryGrant = "SELECT GrantID FROM loanlist";

$getGrant = mysqli_query($con, $queryGrant);

$queryResult = "INSERT into loanapplication (applicationID, GrantID, bName, bEmail, Scope)
values (NULL, $query, '$bName', '$bEmail', '$bScope')"; 

$apply = mysqli_query($con, $queryResult);

if($apply)
    {
     ?><h1><?php   echo 'Application has been submitted'; ?><h1> <?php
    }
    
    else{
        echo 'Error. Application failed to submit';
    }
 
*/

mysqli_close($con);





}else{
 
 ?>
 
 <div class="topnav">
         <div> <!--Home button-->
             <a href="Bhome.php">
                 <img class="logo" width = "40px" height = "40" src="business logo.jpg" />
             </a>
         </div>
 
         <div> <!--Home button-->
             <a href="">
                 <img class="logo" width = "40px" height = "40" px src="usericon.jpg" />
             </a>
         </div>
     
   <h1>Buiness Finacial Group</h1>
   <a href="Login.php">Login </a>
   <a href="CreateAccount.php">Create an account</a>
   
 </div>
 
 </header>
 
 
 
 
 <?php } ?>
 
 