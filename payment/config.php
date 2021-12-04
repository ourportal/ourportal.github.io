<?php
    session_start(); 

    $red = $_GET['pid'];

    if(!isset($_SESSION['cid'])) {
        echo "<script>location.href='../login.php?red=$red'</script>";
    }

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);



require "../admin/dbconnection.php";

$uid = $_SESSION['cid'];

$us = mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$uid' and `status`!='Deleted' "); 
$user = mysqli_fetch_array($us); 


$c = mysqli_query($con,"SELECT * FROM `company` WHERE `id`='1' "); 
$com = mysqli_fetch_array($c);




$keyId = $com['api'];
$keySecret = $com['secret'];
$displayCurrency = 'INR';



if($user['address']==null) {
    
    echo "<script>alert('You must add address')</script>";
    echo "<script>location.href='../profile.php'</script>";
}