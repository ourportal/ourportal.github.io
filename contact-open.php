<?php require './admin_header.php'; ?>


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
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"> Products Details </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-7 col-md-12">

            </div>

            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5> My Products </h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i
                                                    class="feather icon-maximize"></i> maximize</span><span
                                                style="display:none"><i class="feather icon-minimize"></i>
                                                Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                    class="feather icon-minus"></i> collapse</span><span
                                                style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                                    </li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i
                                                class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i>
                                            remove</a></li>
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
                                                SL .
                                            </div>
                                            Product 
                                        </th>
                                        <th>Price</th>
                                        <th> Purchase Date</th>
                                        <th> Validity</th>
                                        <th class="text-right">Priority</th>
                                    </tr>
                                </thead>
                                <tbody>

<?php for ($i=1; $i <=10; $i++) { 
 ?>
                                    <tr>
                                        <td>
                                            <div class="chk-option">
                                               <?php echo $i ?>
                                            </div>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-4.jpg" alt="user image"
                                                    class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>John Deo</h6>
                                                    <p class="text-muted m-b-0">Graphics Designer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td> $ 100.0</td>
                                        <td>Jun, 26</td>
                                        <td>86 Days</td>
                                        <td class="text-right"><label class="badge badge-light-success"> View </label></td>
                                    </tr>



<?php } ?>

                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- prject ,team member start -->
            <!-- seo start -->



            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>



<?php require './admin_footer.php'; ?>