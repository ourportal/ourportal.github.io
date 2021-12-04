<?php 
    require "./dbconnection.php"; 
    if(!isset($_COOKIE['uid'])) {
        header("location: auth-signin.php");
     }
$c = mysqli_query($con,"SELECT * FROM `company` WHERE `id`='1' "); 
    $com = mysqli_fetch_array($c);
?>

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
    <title>Customers - <?php echo $com['name'] ?></title>
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    </head>
    
    <body class="bg-light" onclick="print()" style="min-height:100vh; min-width:100%">
        <div class="container">
            <center>
                <h3>
                    <?php echo $com['name'] ?>
                </h3>
            </center> <hr> 
            <table class="table">
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
                
<?php $ux = mysqli_query($con,"SELECT * FROM `users` WHERE `rank`!='Admin' and `status`!='Deleted' order by id desc ");
    $i = 1;
    while($userx = mysqli_fetch_array($ux)){?>
                <tr>
                    <td><?php echo $i; $i++; ?></td>
                    <td><?php echo $userx['name'] ?></td>
                    <td><?php echo $userx['phone'] ?></td>
                    <td><?php echo $userx['email'] ?></td>
                    <td><?php echo $userx['address'] ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>