<?php require "./dbconnection.php";
		date_default_timezone_set('Asia/Kolkata');
		$date = date("d-M-Y");
		$ddate = date("dmYhis");
		$time = date("h:i A");

	$ip = $_SERVER['REMOTE_ADDR'];

	if(isset($_POST['login'])) {
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		
		$ch = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$email' and `password`='$password' and `rank`='Admin' "); 
		$res = mysqli_fetch_array($ch); 
			if($res > 0) {
				if(setcookie("uid",$res['id'],time()+86400*30*30)) {
					echo "<script>location.href='./'</script>";
				} 
			} else {
				echo "<script>alert('Username or password is wrong')</script>";
				echo "<script>location.href='./auth-signin.php'</script>";
			}
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title> Consumer Login </title>
    
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

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                       
                        <h4 class="mb-3 f-w-400">Signin</h4>
<form action="" method="post">
                        <div class="form-group mb-3">
                            <label class="floating-label" for="Email">Email address</label>
                            <input type="email" class="form-control" id="Email" placeholder="" name="email" required >
                        </div>
                        <div class="form-group mb-4">
                            <label class="floating-label" for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" placeholder="" name="password" required>
                        </div>
                        <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                        </div>
                        <button class="btn btn-block btn-primary mb-4" type="submit" name="login" >Signin</button>
                        <!--<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.php"-->
                        <!--        class="f-w-400">Reset</a></p>-->
                        <!--<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.php"-->
                        <!--        class="f-w-400">Signup</a></p>-->

</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>