<?php require './header.php'; ?>
<title>Customers - <?php echo $com['name'] ?></title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">

                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> All Customers Analytics
                            </h5>

                        </div>

                        <ul class="breadcrumb">

                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="feather icon-home">
                                    </i>
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="#">
                                    Customers Analytics
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

                    <h5> All  Customers <a href="./customers-view.php" class="btn btn-primary" target="_blank">Print</a>
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
                                        </div> Name </th>

                                    <th> Email </th>

                                    <th> Address </th>
                                    <th> Date </th>

                                    <th> Status </th>

 

                                </tr>

                            </thead>

                            <tbody>


<?php 
   
        $o = mysqli_query($con,"SELECT * FROM `users` WHERE `rank`!='Admin'  order by id desc ");
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

                                                <h6> <?php echo $order['name'] ?>
                                                </h6>

                                               

                                            </div>

                                        </div>

                                    </td>
        <td>
        <?php echo $order['email']  ?>
                                
        </td>
                                    <td> <?php echo $order['address'] ?> </td>
                                    <td> <?php echo $order['reg_date'] ?> </td>

                                    
                                    <td style="text-transform:capitalize">
                                    <?php echo $order['status'] ?>
                                    </td>

                                    

                                </tr>
<?php $i++; } ?>
                               
                              

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>




        <?php require './footer.php'; ?>