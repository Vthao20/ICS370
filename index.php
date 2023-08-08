<?php
echo "welcome";
include 'dbconnnection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

?>