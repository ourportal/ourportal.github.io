<?php 
    
    session_start();
     if(!isset($_SESSION['cid'])) {
        header("location: login.php");
     }
    if(require "./admin/dbconnection.php"){} else {
        echo "<h1>Error</h1>";
    }
?>


    <?php if(isset($_GET['oid'])) {
        $oid = $_GET['oid']; 
        $uid = $_SESSION['cid']; 
        $od = mysqli_query($con,"SELECT * FROM `orders` WHERE `id`='$oid' and `uid`='$uid' "); 
        $res = mysqli_fetch_array($od);
        
        
        
        $pid = $res['pid'];
        $opd = mysqli_query($con,"SELECT * FROM `products` WHERE `id`='$pid'"); 
        $product = mysqli_fetch_array($opd);
        
        
        $c = mysqli_query($con,"SELECT * FROM `company` "); 
        $com = mysqli_fetch_array($c);
    
    
         $us = mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$uid' and `status`='Live' "); 
         $user = mysqli_fetch_array($us); 
    
    
            if($res<0) {
                echo "<script>location.href='./dashboard.php'</script>";
            }
    }?>
    
    
<!DOCTYPE html>
<html lang="en">

<head>
     
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <script>
       if (location.protocol !== "https:") {
  location.protocol = "https:";
}
    </script>
    

    
    <body onclick="print()">
        <div class="container bg-light" style="min-height:100vh; min-width:100%; display:flex; flex-direction:column; align-items:center;  " >
            <center><h2><?php echo $com['name'] ?></h2> <br> 
                
                <h4>Bill for <?= $user['name'] ?></h4>
            
            </center>
            <table clas="table">
                <tr>
                    <td>Order no</td>
                    <td><?php echo $_GET['oid'] ?></td>
                </tr>
                <tr>
                    <td> Item Name </td>
                    <td><?php echo $product['title'] ?></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><?php echo $res['price'] ?> inr.</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><?php echo $res['date'] ?> </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $user['address'] ?> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $user['email'] ?>  </td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo $user['phone'] ?> </td>
                </tr>
                <tr>
                    <td> Activation Keys</td>
                    <td> 
                        
<?php  $qty = $order['qty'];
                                        //  echo $qty; 
$p_cx = mysqli_query($con,"SELECT * FROM `product_key` WHERE `pid`='$pid' and `uid`='$uid' order by id desc  " ); 
 while($product_key_resx = mysqli_fetch_array($p_cx)){
    echo $product_key_resx['product_key'];
    echo "<br>";
 }    ?> 
                    
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <center>
                            <a href="javascript:void()" class="btn btn-primary">Print</a>
                        </center>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    
    <style>
    table {
        max-width:500px;
        
    }
        td {
            padding: 10px;
            border:1px solid #980897;
        }
    </style>
    