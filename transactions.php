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
                            <h5 class="m-b-10">Transactions Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"> Transactions Details </a></li>
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
                        <h5> Transactions </h5>
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
                                            Transaction Id  
                                        </th>
                                        <th> Order ID </th>
                                        <th> Date</th>
                                        <th> Amount</th>
                                        <th class="text-right" style="text-align:center">Action</th>
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
                                        <td class="text-right">
                                       
                                            <a href="javascript:void();"  id="rzp-button<?php echo $i ?>" class="btn btn-primary">Complete Order </a>
                                        </td>
                                    </tr>



<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_wulvVBJKAn4RI3", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo 8000 *100 ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
     
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": {
        "name": "<?php echo $user['name'] ?>",
        "email": "<?php echo $user['email'] ?>",
        "contact": "9999999999"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#24636b"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button<?php echo $i ?>').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>





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



<!-- <button >Pay</button> -->


<?php require './admin_footer.php'; ?>