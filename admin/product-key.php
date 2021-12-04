<?php require './header.php';

    if(isset($_GET['del'])) {
        $del = $_GET['del']; 
        $d = mysqli_query($con,"DELETE FROM  `product_key`  WHERE `id`='$del' ");
        if($d) {
            echo "<script>alert('Product deleted ! ')</script>"; 
            echo "<script>location.href='./product-key.php'</script>"; 

        }
    }

?>

<title> All Products - <?php echo $com['name'] ?> </title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">

                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> All Product Key(s) 
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
                                    Product Key Analytics
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- [ breadcrumb ] end -->



        <div class="col-xl-12 col-md-12"  >

            <div class="card table-card">

                <div class="card-header">

                    <h5>All Product Key(s)
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

                    <div class="table-responsive" style="max-height:100vh; overflow:scroll">

                        <table class="table table-hover mb-0">

                            <thead>

                                <tr>
 
                                    <th>

                                        <div class="chk-option">
                                                SL
                                        </div>  </th>

                                    <th> Product Key
                                    </th>

                                    
                                    <th> Product Name </th>
                                    <th> Activation Date </th>
                                    <th> Activated By </th>
                                    <th> Address </th>
                                    <th> Validity </th>
                                    <th> Action </th>


                                    <!-- <th class="text-right"> Action
                                    </th> -->

                                </tr>

                            </thead>

                            <tbody>


<?php
    if(isset($_GET['pid'])) {
        $pid = $_GET['pid']; 
        $p = mysqli_query($con,"SELECT * FROM `product_key` WHERE `pid`='$pid' order by id desc "); 
    } else {
        $p = mysqli_query($con,"SELECT * FROM `product_key` WHERE `status`!='Deleted' order by id desc "); 
    }
    
    $i = 1; 
    while($product = mysqli_fetch_array($p)){
    ?>

                                <tr>

                                    <td>

                                        <div class="chk-option">
                                            <?php echo $i ?>

                                        </div>

                                      

                                    </td>

                                    <td>  <h6> <?php echo $product['product_key'] ?>
                                                </h6>

                                    </td>

                                    <td>   
                                <?php 
                                $pid = $product['pid']; 
                                $px = mysqli_query($con,"SELECT * FROM `products` WHERE `id`='$pid' "); 
                                $prd = mysqli_fetch_array($px);
                                echo $prd['id'].' : '.$prd['title'];                                
                                ?>
                                
                                </td>
                                    <td> <?php echo $product['date'] ?> </td>
                                    <td> <?php 
                                    
                                    $user_id = $product['uid']; 
$u_c = mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$user_id'  "); 
$user_result = mysqli_fetch_array($u_c); 

echo $user_result['name'];
                                    
                                    
                                    ?> </td>

                                    <td>
                                        <?=  $user_result['address'];?>
                                    </td>
<td>  <h6> <?php echo $product['validity'] ?>
                                                </h6>

                                    </td>

                                    <td class="text-right">
                                    <?php if($product['status']=='Live') {?>
                                         <a href="?del=<?php echo $product['id'] ?>" class="btn btn-danger" onclick="return confirm('This product will delete ')" >
                                             <i class="feather icon-delete"></i></a>
                                      <?php } ?>
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