<?php 
    require "./admin/dbconnection.php"; 
    session_start();
    
    $uid = $_SESSION['cid'];
    
    if(!isset($_SESSION['cid'])) {
        echo "<script>alert('Please login first ')</script>";
        echo "<script>location.href='./login.php'</script>";
    }
    
    date_default_timezone_set('Asia/Kolkata');
    $date = date("d-M-Y");
    $ddate = date("dmYhis");
    $time = date("h:i A");
     $us = mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$uid' and `status`='Live' "); 
    $user = mysqli_fetch_array($us); 
    
    $name = $user['name'];
    $phone = $user['phone'];
    $email = $user['email'];
    $address = $user['address'];
    
    
    if(isset($_POST['add_cart'])) {
        
        $pid = $_POST['pid']; 
        $qty = $_POST['qty']; 
        $pk = mysqli_query($con,"SELECT COUNT(id) FROM `product_key`  WHERE `pid`='$pid' and `status`='Live' "); 
        $pkey = mysqli_fetch_array($pk);
        
       // echo "<script>alert('QTY got $qty')</script>";
        
        
        $pr = mysqli_query($con,"SELECT * FROM `products`  WHERE `id`='$pid' and `status`!='Deleted' "); 
        $product = mysqli_fetch_array($pr);
        
        $price = $product['price'];
    
        if($product['delivery_type']=="Digital Mode"){
            if($pkey['0'] >= $qty) {
                $o = mysqli_query($con,"INSERT INTO `orders` SET `name`='$name',`phone`='$phone',`email`='$email',`address`='$address',`pid`='$pid',`uid`='$uid',`qty`='$qty',`price`='$price',`status`='Pending', `date`='$date',`time`='$time' ");
                 echo "<script>location.href='./product.php?pid=$pid&add=success'</script>";
            } else {
                echo "<script>alert('Sold out ! Please try again ')</script>";
                echo "<script>location.href='./product.php?pid=$pid'</script>";
            }
            
        } else {
                $o = mysqli_query($con,"INSERT INTO `orders` SET `name`='$name',`phone`='$phone',`email`='$email',`address`='$address',`pid`='$pid',`uid`='$uid',`qty`='$qty',`price`='$price',`status`='Pending', `date`='$date',`time`='$time' ");
                 echo "<script>location.href='./product.php?pid=$pid&add=success'</script>";
        }
    } else {
        echo "<script>window.history.back()</script>";
    }

?>