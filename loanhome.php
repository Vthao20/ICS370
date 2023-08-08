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
  <a href="logout.php">Logout</a>

  
</div>

</header>

<div style="padding-left:16px">
  <h2 style = "text-align:center">Welcome </h2>
  <p style = "text-align:center" >Business Fianancial Services. Low on funds? struggling to manage fianances? 
    Our application provides a great solution! We offer services that will help your company 
    receive proper grants and loans as well as help mange and finance all cash flow. Please Log in or create an account to begin managing</p>
</div>

<h2 style = "text-align:center; font-size: 40px"> Review Applications </h2>

<div> <!--graph-->
            <a href="review.php"><img src="application.jpg" width = "50px" height = "100px"class = "center"/></a>
        </div>


<h2 style = "text-align:center; font-size: 40px"> List loan or grant </h2>

<div> <!--graph-->
            <a href="Loans.php"><img src="list.jpg" width = "50px" height = "100px" class = "center"/></a>
        </div>

</html>


