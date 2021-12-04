<?php  require "./dbconnection.php";
date_default_timezone_set('Asia/Kolkata');
$date = date("d-M-Y");
$ddate = date("dmYhis");
$time = date("h:i A");

if(isset($_POST['register'])){

		$name = mysqli_real_escape_string($con, $_POST['name']); 
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		$ch = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$email' "); 
		$res = mysqli_fetch_array($ch); 
			if($res > 0) {
				echo "<script>alert('You are already registered ! Please login')</script>";
				echo "<script>location.href='./auth-signin.aspx'</script>";
			} else {
				$ins = mysqli_query($con,"INSERT INTO `users` SET `email`='$email' , `password`='$password',`reg_date`='$date',`package`='free',`expiry`='1',`status`='Live',`name`='$name' ");

				if($ins) {
					echo "<script>alert('Registration success ! Please login now')</script>";
				echo "<script>location.href='./auth-signin.aspx'</script>";
				}
			}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
						<form action="" method="post">
                         
                        <h4 class="mb-3 f-w-400">Sign up</h4>
                        <div class="form-group mb-3">
                            <label class="floating-label" for="Username">Name</label>
                            <input type="text" class="form-control" id="Username" placeholder="" name="name" required >
                        </div>
                        <div class="form-group mb-3">
                            <label class="floating-label" for="Email">Email address</label>
                            <input type="text" class="form-control" id="Email" placeholder="" name="email" required > 
                        </div>
                        <div class="form-group mb-4">
                            <label class="floating-label" for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" placeholder="" name="password" required >
                        </div>
                      
                        <button class="btn btn-primary btn-block mb-4" type="sbumit" name="register">Sign up</button>
                        <p class="mb-2">Already have an account? <a href="auth-signin.aspx" class="f-w-400">Signin</a>
						</form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>