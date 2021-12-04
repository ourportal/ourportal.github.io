<?php  session_start();
    require "./admin/dbconnection.php"; 

    $c = mysqli_query($con,"SELECT * FROM `company` WHERE `id`='1' "); 
    $com = mysqli_fetch_array($c);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    <!--<title> Smart Tech - Ecommerce HTML5 Template</title>-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.html" type="image/x-icon">
    <link rel="icon" href="images/favicon.html" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">
    <script src="js/vendors/modernizr.js"></script>
    <script>
       if (location.protocol !== "https:") {
  location.protocol = "https:";
}
    </script>
</head>

<body>


    <div class="my_floating_bar">
        <img src="./images/phone.png" onclick="window.open('tel:<?php echo $com['phone'] ?>')">
        <img src="./images/whatsapp-icon.png"  onclick="window.open('https://wa.me/91<?php echo $com['phone'] ?>')" >
    </div>


<style>
    .my_floating_bar {
        position:fixed;
        bottom:60px;
        left:0px;
        
        z-index:9999;
        height: 110px;
        width:80px;
        
    }
    .my_floating_bar img {
        height: 60px;
        margin-bottom:5px;
        width:auto;
        box-shadow: 2px 5px 10px 2px #333;
        border-radius:5px;
        padding:5px;
    }
</style>

    <!-- Page Wrapper -->
    <div id="wrap" class="layout-1">

        <!-- Top bar -->
        <div class="top-bar">
            <div class="container">
                <p>Welcome to <?php echo $com['name'] ?></p>
                <div class="right-sec">
                    <ul>
                        
                        <?php if(!isset($_SESSION['cid'])) {?>
                        <li><a href="./login.php">Login/Register </a></li>
                        <?php } else{?>
                        <li><a href="./dashboard.php">My Dashboard </a></li>
                        <?php } ?>
                        
                        <li><a href="./about.php">Store Location </a></li>

                        <!--<li>-->
                        <!--    <select class="selectpicker">-->
                        <!--        <option> English </option>-->

                        <!--    </select>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--    <select class="selectpicker">-->
                        <!--        <option>(INR) Indian Rupee</option>-->

                        <!--    </select>-->
                        <!--</li>-->
                    </ul>
                    <div class="social-top">
                        <a href="<?php echo $com['facebook'] ?>"  target="_blank" ><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $com['twitter'] ?>"  target="_blank" ><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $com['linkedin'] ?>"  target="_blank" ><i class="fa fa-linkedin"></i></a>
                        <a href="<?php echo $com['instagram'] ?>"  target="_blank" ><i class="fa fa-instagram"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="logo">

                    <a href="./"><img src="admin/img/<?php echo $com['logo'] ?>" alt=""  style="max-height:70px; max-width:320px;"></a>
                </div>
                <div class="search-cate">

                    
                        <input type="search" placeholder="Search entire store here..." onchange="location.href='./shop.php?q='+this.value" >
                    <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                  
                </div>

                <!-- Cart Part -->
                <!-- <ul class="nav navbar-right cart-pop">
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"><span class="itm-cont">3</span> <i
                                class="flaticon-shopping-bag"></i> <strong>My Cart</strong> <br>
                            <span>3 item(s) - $500.00</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="media-left"> <a href="#." class="thumb"> <img src="images/item-img-1-1.jpg"
                                            class="img-responsive" alt=""> </a> </div>
                                <div class="media-body"> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full
                                        HD</a> <span>250 x 1</span> </div>
                            </li>
                            <li>
                                <div class="media-left"> <a href="#." class="thumb"> <img src="images/item-img-1-2.jpg"
                                            class="img-responsive" alt=""> </a> </div>
                                <div class="media-body"> <a href="#." class="tittle">Funda Para Ebook 7" full HD</a>
                                    <span>250 x 1</span> </div>
                            </li>
                            <li class="btn-cart"> <a href="#." class="btn-round">View Cart</a> </li>
                        </ul>
                    </li>
                </ul> -->
            </div>

            <!-- Nav -->
            <nav class="navbar ownmenu">
                <div class="container">

                    <!-- Categories -->
                    <div class="cate-lst"> <a data-toggle="collapse" class="cate-style" href="#cater"><i
                                class="fa fa-list-ul"></i> Our Categories </a>
                        <div class="cate-bar-in">
                            <div id="cater" class="collapse">
                                <ul>
                                    <li><a href="./shop.php?q=antivirus"> Antivirus </a></li>
                                    <li><a href="./shop.php?q=antivirus"> Internet Security </a></li>
                                    <li><a href="./shop.php?q=total-security"> Total Security </a></li>
                                    <li><a href="./shop.php?q=mobile-security"> Mobile Security </a></li>
                                    <li><a href="./shop.php?q=other-products"> Other Products  </a></li>
                                    <li><a href="./shop.php?q=accessories"> Accessories </a></li>
                                      
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Navbar Header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#nav-open-btn" aria-expanded="false"> <span><i
                                    class="fa fa-navicon"></i></span> </button>
                    </div>
                    <!-- NAV -->
                    <div class="collapse navbar-collapse" id="nav-open-btn">
                        <ul class="nav">
                            <li class="dropdown megamenu"> <a href="./">Home </a></li>
                            <li class="dropdown megamenu"> <a href="./about.php">About </a></li>


                            <li class="dropdown"> <a href="./" class="dropdown-toggle" data-toggle="dropdown"> Products
                                </a>
                                <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
                                    <li><a href="./shop.php?q=antivirus"> Antivirus </a></li>
                                    <li><a href="./shop.php?q=internet-security"> Internet Security </a></li>
                                    <li><a href="./shop.php?q=total-security"> Total Security </a></li>
                                    <li><a href="./shop.php?q=mobile-security"> Mobile Security </a></li>
                                    <li><a href="./shop.php?q=other-products"> Other Products </a></li>
                                    <li><a href="./shop.php?q=accessories"> Accessories </a></li>

                                </ul>
                            </li>
                            <!-- Mega Menu Nav -->
                            <!-- <li class="dropdown megamenu"> <a href="./" class="dropdown-toggle"
                                    data-toggle="dropdown">Mega menu </a>
                                <div class="dropdown-menu animated-2s fadeInUpHalf">
                                    <div class="mega-inside">
                                        <div class="top-lins">
                                            <ul>
                                                <li><a href="#."> Cell Phones & Accessories </a></li>
                                                <li><a href="#."> Carrier Phones </a></li>
                                                <li><a href="#."> Unlocked Phones </a></li>
                                                <li><a href="#."> Prime Exclusive Phones </a></li>
                                                <li><a href="#."> Accessories </a></li>
                                                <li><a href="#."> Cases </a></li>
                                                <li><a href="#."> Best Sellers </a></li>
                                                <li><a href="#."> Deals </a></li>
                                                <li><a href="#."> All Electronics </a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6>Electronics</h6>
                                                <ul>
                                                    <li><a href="#."> Cell Phones & Accessories </a></li>
                                                    <li><a href="#."> Carrier Phones </a></li>
                                                    <li><a href="#."> Unlocked Phones </a></li>
                                                    <li><a href="#."> Prime Exclusive Phones </a></li>
                                                    <li><a href="#."> Accessories </a></li>
                                                    <li><a href="#."> Cases </a></li>
                                                    <li><a href="#."> Best Sellers </a></li>
                                                    <li><a href="#."> Deals </a></li>
                                                    <li><a href="#."> All Electronics </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6>Computers</h6>
                                                <ul>
                                                    <li><a href="#."> Computers & Tablets</a></li>
                                                    <li><a href="#."> Monitors</a></li>
                                                    <li><a href="#."> Laptops & tablets</a></li>
                                                    <li><a href="#."> Networking</a></li>
                                                    <li><a href="#."> Drives & Storage</a></li>
                                                    <li><a href="#."> Computer Parts & Components</a></li>
                                                    <li><a href="#."> Printers & Ink</a></li>
                                                    <li><a href="#."> Office & School Supplies </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6>Home Appliances</h6>
                                                <ul>
                                                    <li><a href="#."> Refrigerators</a></li>
                                                    <li><a href="#."> Wall Ovens</a></li>
                                                    <li><a href="#."> Cooktops & Hoods</a></li>
                                                    <li><a href="#."> Microwaves</a></li>
                                                    <li><a href="#."> Dishwashers</a></li>
                                                    <li><a href="#."> Washers</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4"> <img class=" nav-img" src="images/navi-img.png"
                                                    alt=""> </div>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="dropdown"> <a href="blog.html" class="dropdown-toggle"
                                    data-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
                                    <li><a href="Blog-2.html">Blog </a></li>
                                    <li><a href="Blog_details.html">Blog Single </a></li>
                                </ul>
                            </li> -->
                            <li> <a href="./contact.php"> Contact Us </a></li>
                        </ul>
                    </div>

                    <!-- NAV RIGHT -->
                    <div class="nav-right" onclick="window.open('tel: <?php echo $com['phone'] ?>')"> <span
                            class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong>
                            <?php echo $com['phone'] ?> </span> </div>
                </div>
            </nav>
        </header>
        
  
  