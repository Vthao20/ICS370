<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="bHome.php">Home Page</a>';
?>
<div> <!--Home button-->
<a href="bHome.php">
    <img class="logo" width = "40px" height = "40" src="business logo.jpg" />
</a>
</div>