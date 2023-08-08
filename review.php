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



?>



<header>


<div class="topnav">
        <div> <!--Home button-->
            <a href="loanhome.php">
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
<h1 style = "text-align:center">Review Application<h1> 

</html>

<div class="box">
<form action="" method="post">


<?php
/* insert application entry to database */


$queryResult = "SELECT * from loanapplication WHERE stat IS NULL";

$stmt = mysqli_query($con, $queryResult);

while($row = $stmt->fetch_row()){
    echo "<p><strong>ApplicationID: ".$row[0]."<strong>";
    echo "</br>Name: ".$row[2];
    echo "</br>Email: ".$row[3];
    echo "</br>Scope: ".$row[4];
?>
   </br><input type="radio" id="confirm" name="confirm" value="Accepted"> <!-- Y = business owner -->
<label for="Accept">Accept</label><br>
<input type="radio" id="confirm" name="confirm" value="Declined"> <!-- N = Loan officer -->
<label for="Decline">Decline</label><br>

<?php
}
?>
<td><input type="submit" value="submit" /></td><br/>

</form>



<?php
/* insert application entry to database */
$confirm = $_POST['confirm'];
echo "Application has been: $confirm";

$queryResult = "UPDATE loanapplication 
SET stat = '$confirm'
Where bName = 'walmart'"; /*make sure bname is walamrt or business*/

$stmt = mysqli_query($con, $queryResult);



mysqli_close($con);

?>

 
 