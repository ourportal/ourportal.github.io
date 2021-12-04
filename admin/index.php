<?php require "./header.php";

    $t = mysqli_query($con,"SELECT SUM(price) FROM `orders` WHERE `status`='Success' "); 
    $total_earning = mysqli_fetch_array($t);

    // all products 
    $dp = mysqli_query($con,"SELECT SUM(`price`) FROM `orders` WHERE `status`='Success' and `delivery_mode`='Digital Mode' "); 
    $total_digital_products = mysqli_fetch_array($dp);
    
    
    $ph = mysqli_query($con,"SELECT SUM(price) FROM `orders` WHERE `status`='Success' and `delivery_mode`!='Digital Mode' "); 
    $total_physical_products = mysqli_fetch_array($ph);
    
    
    // all users 
    $u = mysqli_query($con,"SELECT COUNT(id) FROM `users` WHERE `status`!='Deleted' "); 
    $total_users = mysqli_fetch_array($u);



?>
<title> Dashboard - <?php echo $com['name'] ?></title>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.aspx"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <!-- page statustic card start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow"> ₹ <?= $total_earning['0'] ?> </h4>
                                        <h6 class="text-muted m-b-0">Total Sale </h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                           <div class="card-footer bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <!-- <p class="text-white m-b-0">% change</p> -->
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">₹ <?= $total_digital_products['0'] ?></h4>
                                        <h6 class="text-muted m-b-0"> Digital Key Sales</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <!-- <p class="text-white m-b-0">% change</p> -->
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red"> ₹ <?= $total_physical_products['0'] ?> </h4>
                                        <h6 class="text-muted m-b-0">Physical Product Sales </h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                         <!--<p class="text-white m-b-0">% change</p> -->
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue"><?= $total_users['0'] ?></h4>
                                        <h6 class="text-muted m-b-0">Total Customers </h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-users f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <!-- <p class="text-white m-b-0">% change</p> -->
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page statustic card end -->
            </div>




            <div class="col-xl-12 col-md-12" style="max-height:100vh; overflow-y:scroll">

                <div class="card table-card">

                    <div class="card-header">

                        <h5>All Products
                        </h5>

                        <div class="card-header-right">

                            <div class="btn-group card-option">

                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">

                                    <i class="feather icon-more-horizontal">
                                    </i>

                                </button>

                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">


                                    <li class="dropdown-item minimize-card">
                                        <a href="#!">
                                            <span>
                                                <i class="feather icon-minus">
                                                </i> collapse
                                            </span>
                                            <span style="display:none">
                                                <i class="feather icon-plus">
                                                </i> expand
                                            </span>
                                        </a>

                                    </li>

                                    <li class="dropdown-item reload-card">
                                        <a href="#!">
                                            <i class="feather icon-refresh-cw">
                                            </i> reload
                                        </a>
                                    </li>



                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="card-body p-0">

                        <div class="table-responsive">

                            <table class="table table-hover mb-0">

                                <thead>

                                    <tr>

                                        <th>

                                            <div class="chk-option">
                                                SL
                                            </div>
                                            Thumbnail
                                        </th>

                                        <th> Title </th>
                                        <th> Product Key </th>

                                        <th> Date </th>


                                        <th class="text-right"> Action
                                        </th>

                                    </tr>

                                </thead>

                                <tbody>


                                    <?php $p = mysqli_query($con,"SELECT * FROM `products` WHERE `status`!='Deleted' order by id desc "); 
                                    $i = 1; 
                                    while($product = mysqli_fetch_array($p)){
                                    ?>

                                    <tr>

                                        <td>

                                            <div class="chk-option">
                                                <?php echo $i ?>

                                            </div>

                                            <div class="d-inline-block align-middle">

                                                <img src="img/<?php echo $product['thumbnail'] ?>"
                                                    alt="<?php echo substr($product['title'],0,2) ?>"
                                                    class="img-radius wid-40 align-top m-r-15">

                                                <div class="d-inline-block">


                                                    <!-- <p class="text-muted m-b-0">Graphics Designer
                                                </p> -->

                                                </div>

                                            </div>

                                        </td>

                                        <td>
                                            <h6> <?php echo substr($product['title'],0,50) ?> </h6>
                                        </td>
                                        <td>
                                            <h6>
                                                <a href="./product-key.php?pid=<?php echo $product['id'] ?>"> <?php 
                                            $pid = $product['id']; 
                                            $k = mysqli_query($con,"SELECT COUNT(id) FROM `product_key` WHERE `pid`='$pid' and `status`='Live'  "); 
                                            $key = mysqli_fetch_array($k); 
                                            echo $key['0'];
                                    
                                    ?> </a>
                                            </h6>
                                        </td>

                                        <td> <?php echo $product['date'] ?>
                                        </td>

                                        <td class="text-right">
                                            <a href="./product-edit.php?edit=<?php echo $product['id'] ?>" class="btn btn-warning"><i class="feather icon-edit"></i></a>
                                            <a href="?del=<?php echo $product['id'] ?>" class="btn btn-danger"
                                                onclick="return confirm('This product will delete ')"><i
                                                    class="feather icon-delete"></i></a>

                                        </td>

                                    </tr>
                                    <?php $i++; } ?>



                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>



 
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>



<?php require "./footer.php" ?>