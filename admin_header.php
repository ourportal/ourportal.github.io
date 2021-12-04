<?php session_start();
     require_once "./admin/dbconnection.php";
     if(!isset($_SESSION['cid'])) {
        header("location: login.php");
     }
     $uid = $_SESSION['cid']; 
        if($uid < 0) {
            header("location: login.php");
        }
    $us = mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$uid' and `status`='Live' "); 
    $user = mysqli_fetch_array($us); 


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

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details"> <?php echo $user['name'] ?> <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="#"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="change-password.php"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="logout.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
							<!-- <li class="list-group-item"><a href="auth-normal-sign-in.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li> -->
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>

				 
				  <!-- <li class="nav-item">
                    <a href="./transactions.php" class="nav-link "><span class="pcoded-micon">
                        <i class="feather icon-list"></i></span><span class="pcoded-mtext"> Transactions </span></a>
                    </li> -->




					<!-- <li class="nav-item pcoded-hasmenu">
					    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext"> Client / Victims</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="phishing.php?page=facebook" >Facebook</a></li>
					        <li><a href="phishing.php?page=instagram">Instagram</a></li>
					    </ul>
					</li> -->

 
					<li class="nav-item pcoded-menu-caption">
					    <label> Manage Profile </label>
					</li>
                    
                    <li class="nav-item">
                    <a href="./profile.php" class="nav-link "><span class="pcoded-micon">
                        <i class="feather icon-box"></i></span><span class="pcoded-mtext"> Edit Profile </span></a>
                    </li>

					<li class="nav-item">
                    <a href="./change-password.php" class="nav-link "><span class="pcoded-micon">
                        <i class="feather icon-box"></i></span><span class="pcoded-mtext">Change Password</span></a>
                    </li>

					<li class="nav-item">
                    <a href="./" class="nav-link "><span class="pcoded-micon">
                        <i class="feather icon-globe"></i></span><span class="pcoded-mtext"> Visit Site </span></a>
                    </li>
					<li class="nav-item">
                    <a href="tel:<?php echo $com['phone'] ?>" class="nav-link "><span class="pcoded-micon">
                        <i class="feather icon-list"></i></span><span class="pcoded-mtext"> Supports </span></a>
                    </li>
 
				</ul>
				
			 
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#"><span></span></a>
					<a href="#" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<!-- <img src="assets/images/logo.png" alt="" class="logo">
						<img src="assets/images/logo-icon.png" alt="" class="logo-thumb"> -->
						<h3 style="color:white; font-size:28px; font-weight:bold"><?php echo $com['name'] ?></h3>

					</a>
					<!-- <a href="#!" class="mob-toggler"> -->
						<!-- <i class="feather icon-more-vertical"></i> -->
					<!-- </a> -->
				</div>
				<div class="collapse navbar-collapse">
					<!-- <ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul> -->
					<!-- <ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="login.php" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.php" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.php" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="login.php" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul> -->
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	