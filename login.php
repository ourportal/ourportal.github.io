<?php require "./header.php";
 
 date_default_timezone_set('Asia/Kolkata');
 $date = date("d-M-Y");
 $ddate = date("dmYhis");
 $time = date("h:i A");

if(isset($_SESSION['cid'])) {
    echo "<script>location.href='./dashboard.php'</script>";
}


$red = $_GET['red'];
$ip = $_SERVER['REMOTE_ADDR'];

if(isset($_POST['login'])) {
 $email = mysqli_real_escape_string($con, $_POST['email']);
 $password = mysqli_real_escape_string($con, $_POST['password']);
 
 $ch = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$email' and `password`='$password' "); 
 $res = mysqli_fetch_array($ch); 
   if($res > 0) {
   
      $_SESSION['cid'] = $res['id'];
      if(isset($_GET['red'])) {
      echo "<script>location.href='./payment/index.php?pid=$red'</script>";
      } else {
      echo "<script>location.href='./dashboard.php'</script>";
      }
    
   } else {
     echo "<script>alert('Username or password is wrong')</script>";
     if(isset($_GET['red'])) {
     echo "<script>location.href='./login.php?red=$red'</script>";
     } else {
     echo "<script>location.href='./login.php'</script>";
     }
   }
}



if(isset($_POST['register'])){

  $name = mysqli_real_escape_string($con, $_POST['name']); 
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $ch = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$email' "); 
  $res = mysqli_fetch_array($ch); 
    if($res > 0) {
            if(isset($_GET['red'])) {
              echo "<script>alert('You are already registered ! Please login')</script>";
              echo "<script>location.href='./login.php?red=$red'</script>";
            } else {
                 echo "<script>alert('You are already registered ! Please login')</script>";
              echo "<script>location.href='./login.php'</script>";
            }
      
    } else {
      $ins = mysqli_query($con,"INSERT INTO `users` SET `email`='$email' , `password`='$password',`reg_date`='$date',`status`='Live',`name`='$name',`address`='Please Change Address' ");

      if($ins) {
            if(isset($_GET['red'])) {
        echo "<script>alert('Registration success ! Please login now')</script>";
        echo "<script>location.href='./login.php?red=$red'</script>";
            } else {
                echo "<script>alert('Registration success ! Please login now')</script>";
                 echo "<script>location.href='./login.php'</script>";
            }
      }
    }

}
 
 
 ?>

<!-- Content -->
<div id="content">

    <!-- Linking -->
    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Authentication</li>
            </ol>
        </div>
    </div>

    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Login Your Account -->
                    <h5>Login Your Account</h5>

                    <!-- FORM -->
                    <form action="" method="POST">
                        <ul class="row">
                            <li class="col-sm-12">
                                <label>Email
                                    <input type="email" class="form-control" name="email" placeholder="Email" required  >
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label>Password
                                    <input type="password" class="form-control" required name="password" placeholder="Password">
                                </label>
                            </li>
                            <li class="col-sm-6">
                                <div class="checkbox checkbox-primary">
                                    <input id="cate1" class="styled" type="checkbox">
                                    <label for="cate1"> Keep me logged in </label>
                                </div>
                            </li>
                            <li class="col-sm-6"> <a href="#." class="forget">Forgot your password?</a> </li>
                            <li class="col-sm-12 text-left">
                                <button type="submit" class="btn-round" name="login">Login</button>
                            </li>
                        </ul>
                    </form>
                </div>




                <!-- Don’t have an Account? Register now -->
                <div class="col-md-6">
                    <h5>Don’t have an Account? Register now</h5>

                    <!-- FORM -->
                    <form action="" method="POST">
                        <ul class="row">
                            <li class="col-sm-12">
                                <label> Name
                                    <input type="text" class="form-control" name="name" placeholder="Name" required >
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label>Email
                                    <input type="email" class="form-control" name="email" placeholder="Email" required >
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label>Password
                                    <input type="password" class="form-control" name="password" placeholder="Password" required >
                                </label>
                            </li>
                            
                            
                            <li class="col-sm-12 text-left">
                                <button type="submit" class="btn-round" name="register" >Register</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <?php require "./footer.php" ?>