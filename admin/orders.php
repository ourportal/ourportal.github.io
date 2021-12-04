<?php require './header.php'; ?>
<title>Orders - <?php echo $com['name'] ?></title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">

                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> All Orders Analytics
                            </h5>

                        </div>

                        <ul class="breadcrumb">

                            <li class="breadcrumb-item">
                                <a href="index.aspx">
                                    <i class="feather icon-home">
                                    </i>
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="#">
                                    Orders Analytics
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- [ breadcrumb ] end -->



        <div class="col-xl-12 col-md-12"  style="max-height:100vh; overflow-y:scroll">

            <div class="card table-card">

                <div class="card-header">

                    <h5> All  <?php if(isset($_GET['status'])){ echo $_GET['status']; } ?>  orders
                    </h5>

                    <div class="card-header-right">

                        <div class="btn-group card-option">

                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">

                                <i class="feather icon-more-horizontal">
                                </i>

                            </button>

                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
<!-- 
                                <li class="dropdown-item full-card">
                                    <a href="#!">
                                        <span>
                                            <i class="feather icon-maximize">
                                            </i> maximize
                                        </span>
                                        <span style="display:none">
                                            <i class="feather icon-minimize">
                                            </i>
                                            Restore
                                        </span>
                                    </a>
                                </li> -->

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
                                        </div> Transaction Id </th>

                                    <th> Product </th>

                                    <th> Amount </th>
                                    <th> Date </th>

                                    <th> Status </th>
                                    <th> Name </th>
                                    <th> Phone </th>

 

                                </tr>

                            </thead>

                            <tbody>


<?php 
    if($_GET['status']=="success"){
    $o = mysqli_query($con,"SELECT * FROM `orders` WHERE `status`='Success' order by id desc ");
    } else  if ($_GET['status']=="pending") {
        $o = mysqli_query($con,"SELECT * FROM `orders` WHERE `status`='pending'  order by id desc ");
    } else  if ($_GET['status']=="all") {
        $o = mysqli_query($con,"SELECT * FROM `orders` WHERE `status`!='Deleted'  order by id desc ");
    }

     

    $i = 1; 
    while($order = mysqli_fetch_array($o)){

    ?>

                                <tr>

                                    <td>

                                        <div class="chk-option">
                                            <?php echo $i ?>

                                        </div>

                                        <div class="d-inline-block align-middle">

                                            <!-- <img src="assets/images/user/avatar-4.jpg" alt="user image"
                                                class="img-radius wid-40 align-top m-r-15"> -->

                                            <div class="d-inline-block">

                                                <h6> <?php echo $order['transactionId'] ?>
                                                </h6>

                                                <!-- <p class="text-muted m-b-0">Graphics Designer
                                                </p> -->

                                            </div>

                                        </div>

                                    </td>
        <td>
        <?php 
                                $pid = $order['pid']; 
                                $px = mysqli_query($con,"SELECT * FROM `products` WHERE `id`='$pid' "); 
                                $prd = mysqli_fetch_array($px);
                                echo $prd['id'].' : '.$prd['title'];                                
                                ?>
                                
        </td>
                                    <td> <?php echo $order['price'] ?>
                                    </td>

                                    <td> <?php echo $order['date'] ?> <br>
                                    <small><?php echo $order['time'] ?></small>
                                    </td>

                                    <td style="text-transform:capitalize">
                                    <?php echo $order['status'] ?>
                                    </td>
<?php  $ux = $order['uid']; 
    $usx = mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$ux' "); 
    $userx = mysqli_fetch_array($usx);
?>
                                    <td> <?php echo $userx['name'] ?> </td>
                                    <td> <?php echo $userx['phone'] ?> </td>

                                </tr>
<?php $i++; } ?>
                               
                              

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>




        <?php require './footer.php'; ?>