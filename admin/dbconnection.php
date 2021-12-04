<?php
define('DB_SERVER','localhost');
define('DB_USER','kanaico1_our_portal');
define('DB_PASS' ,'Kanai@1234$');
define('DB_NAME', 'kanaico1_our_portal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "<script>alert('Failed to connect to MySQL:')</script>";
 }

?>

