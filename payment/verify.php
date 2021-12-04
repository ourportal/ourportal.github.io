<?php

require('config.php');
// session_start();
//db connection

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

    $error = "Payment Failed";

    date_default_timezone_set('Asia/Kolkata');
    $date = date("d-M-Y");
    $ddate = date("dmYhis");
    $time = date("h:i A");
    $txn = $_POST['razorpay_payment_id']; 


if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{

    $pid = $_SESSION['pid']; 
$p = mysqli_query($con,"SELECT * FROM `products` WHERE `id`='$pid'"); 
$product = mysqli_fetch_array($p); 
    
    $qty = $_SESSION['qty'];

    $uid = $user['id'];
    $name = $user['name']; 
    $email = $user['email']; 
    $phone = $user['phone']; 
    $address = $user['address']; 

    $item = $product['title']; 
    $price = $product['price']; 
      

    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    // $price = $_SESSION['price'];
     

    $p_c = mysqli_query($con,"SELECT * FROM `product_key` WHERE `pid`='$pid' and `status`='Live' order by id asc " ); 
    $product_key_res = mysqli_fetch_array($p_c); 

    $pr_id = $product_key_res['id']; 

    $upd = mysqli_query($con,"UPDATE `product_key` SET `date`='$date',`time`='$time',`uid`='$uid',`status`='Block'   WHERE `id`='$pr_id' "); 


    if(mysqli_query($con, "INSERT INTO `orders` (`name`, `email`, `phone`, `item`, `pid`, `uid`, `address`, `status`, `date`, `time`, `transactionId`,  `price`,`qty`) VALUES ('$name', '$email', '$phone', '$item', '$pid', '$uid', '$address', 'Success', '$date', '$time', '$txn', '$price','$qty');")){

        echo "<script>location.href='../dashboard.php'</script>";
    }

   // echo "<script>"

    
}
else
{

    echo "<script>alert('Payment failed , please check your payment details. ')</script>";
    echo "<script>location.href='../dashboard.php'</script>";
}

// echo $html;
