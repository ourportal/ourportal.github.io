<?php require './admin_header.php';

   

?>
<title>My Orders - <?php echo $com['name'] ?></title>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"> Orders Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!"> My Orders Details </a></li>
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
                        <h5> My Orders </h5>
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
                                        <th>Qty</th>
                                        <th> Purchase Date</th>
                                        <th> Validity</th>
                                        <th> Product Key </th>
                                        <th> Setup </th>
                                        <th> Bill </th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

    $o = mysqli_query($con,"SELECT * FROM `orders` WHERE `uid`='$uid' order by id desc "); 
    $i = 1;
    while($order = mysqli_fetch_array($o)){
        $pid = $order['pid'];
        $po = mysqli_query($con,"SELECT * FROM `products` WHERE `id`='$pid'  "); 
        $product = mysqli_fetch_array($po); 

        
    
$p_c = mysqli_query($con,"SELECT * FROM `product_key` WHERE `pid`='$pid' and `uid`='$uid'  " ); 
 $product_key_res = mysqli_fetch_array($p_c);  

$t_k = mysqli_query($con,"SELECT COUNT(id) FROM `product_key` WHERE `pid`='$pid' and `status`='Live'  " ); 
 $t_key = mysqli_fetch_array($t_k);  

    
     if(isset($_GET['cancel'])) {
        $can = $_GET['cancel']; 
        if(order['status']!='Success') {
           $opd = mysqli_query($con,"DELETE FROM `orders` WHERE `id`='$can' ");
            if($opd) {
                echo "<script>location.href='./dashboard.php'</script>";
            }
        }   
    }
  

 ?>
                                    <tr>
                                        <td>
                                            <div class="chk-option">
                                                <?php echo $i ?>
                                            </div>
                                            <div class="d-inline-block align-middle">
                                                <img src="admin/img/<?php echo $product['thumbnail'] ?>" alt="user image"
                                                    class="img-radius wid-80 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6> <?php echo $product['title'] ?></h6>
                                                    <p class="text-muted m-b-0"> <?php  //echo $order['title'] ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td> ₹ <?php echo $order['price']*$order['qty'] ?></td>
                                        <td>  <?php echo $order['qty'] ?></td>
                                        <td> <?php echo $order['date'] ?> </td>
                                    <?php if($order['status']!="Success") {?>
                                            <td colspan="2"><center>
                                                
                                                
                                                <?php if($product['delivery_type']=="Digital Mode"){?>
                                                
                                                <a href="?cancel=<?php echo $order['id'] ?>" class="btn btn-danger">Cancel Order</a>
                                            <?php if($t_key['0'] >= $order['qty']) {?>   
                                                <a href="../pay/?oid=<?php echo $order['id'] ?>" class="btn btn-primary">Complete Order </a>
                                            <?php } else {?>
                                                <a href="javascript:void(0)" class="btn btn-secondary">Out of stock   </a>
                                                <?php } ?>
                                            
                                            
                                            
                                            <?php }  else {
                                            //physical checking ?>
                                                <a href="?cancel=<?php echo $order['id'] ?>" class="btn btn-danger">Cancel Order</a>
                                             
                                                <a href="../pay/?oid=<?php echo $order['id'] ?>" class="btn btn-primary">Complete Order </a>
                                                
                                                <?php }?>
                                            </center>
                                            </td>
                                    <?php } else {?>
                                        <td>  <?php  echo $product_key_res['validity'];  ?> </td>
                                 
                                    <td style="overflow:scroll">
                                        
                                         <?php  $qty = $order['qty'];
                                        //  echo $qty; 
$p_cx = mysqli_query($con,"SELECT * FROM `product_key` WHERE `pid`='$pid' and `uid`='$uid' order by id desc  " ); 
 while($product_key_resx = mysqli_fetch_array($p_cx)){
    echo $product_key_resx['product_key'];
    echo "<br>";
 }    ?> 
                                         
                                         
                                         </td>
                                    
                                     <td> 
                                     <?php if($product['delivery_type']=="Digital Mode"){?>
                                     <a href="./admin/setup/<?php echo $product['setup'] ?>" target="_blank" download="<?php echo $product['title'].'-'.$product['setup'] ?>" class="btn btn-warning"> <i class="feather icon-download"></i> </a> </td>
                                     <?php } else {}?>
                                     
                                     <td>  <a href="./view-bill.php?oid=<?php echo $order['id'] ?>" target="_blank" download="<?php echo $product['title'].$order['date'] ?>-bill.html" class="btn btn-success"> <i class="feather icon-eye"></i> </a> </td>
<?php }?>
                    

                                      
                                    </tr>



                                    <?php $i++; } ?>


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