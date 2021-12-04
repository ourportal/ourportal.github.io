<?php require './header.php'; 

    if(!isset($_GET['pid'])) {
       echo "<script>location.href='./'</script>";
    }

    $pid = $_GET['pid']; 

    $a = mysqli_query($con,"SELECT * FROM `products` WHERE `id`='$pid' and `status`!='Deleted' order by id desc "); 
    $product = mysqli_fetch_array($a);
        if($product < 1) {
            echo "<script>location.href='./'</script>";
        }


$pid = $product['id']; 
$pk = mysqli_query($con,"SELECT COUNT(id) FROM `product_key`  WHERE `pid`='$pid' and `status`='Live' "); 
$pkey = mysqli_fetch_array($pk);



?>

<title> <?php echo $product['title'] ?> - <?php echo $com['name'] ?></title>


<!-- Linking -->
<div class="linking">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#" style="text-transform:capitalize"> <?php echo $product['category'] ?> </a></li>
            <li class="active" style="text-transform:capitalize"> <?php  echo $product['title'] ?></li>
        </ol>
    </div>
</div>
<!-- Content -->
<div id="content">
    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
        <div class="container">
            <div class="row">
                <!-- Shop Side Bar -->
                <div class="col-md-3">
                    <div class="shop-side-bar">
                        <!-- Categories -->
                        <h6>Categories</h6>
                        <div class="checkbox checkbox-primary">
                            <ul>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=antivirus">Antivirus</a>
                                </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=internet+security">Internet
                                        Security</a> </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=total+security">Total
                                        Security </a> </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=mobile+security">Mobile
                                        Security</a> </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=other+security">Other
                                        Products</a> </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a
                                        href="./shop.php?q=accessories">Accessories</a> </li>

                            </ul>
                        </div>


                    </div>
                </div>
                <!-- Products -->
                <div class="col-md-9">
                    <div class="product-detail ">
                        <div class="product">
                            <div class="row amar_product_detail">
                                <!-- Slider Thumb -->
                                <div class="col-xs-5  amar_product">
                                    <article class="slider-item on-nav">

                                        <div id="slider" class="flexslider">
                                            <ul class="slides">
                                                <li>
                                                    <img src="admin/img/<?php echo $product['thumbnail'] ?>" alt="">
                                                </li>

                                            </ul>
                                        </div>
                                        <div id="carousel" class="flexslider">

                                        </div>
                                    </article>
                                </div>
                                <!-- Item Content -->
                                <div class="col-xs-7">

                                    <?php if(isset($_GET['add'])=="success") {?>
                                    <h3 class="green-text">Added Succes</h3>
                                    <?php } ?>

                                    <span class="tags" style="text-transform:capitalize">
                                        <?php echo $product['category'] ?> </span>
                                    <h5> <?php  echo $product['title'] ?></h5>
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i>

                                        <!-- <span class="margin-left-10">5 Review(s)</span> -->
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6"><span class="price" id="pricex"> ₹ <?php  if($product['delivery_type']!="Digital Mode"){ 
                                            echo $product['price']; } else {
                                                echo $product['price'];
                                            } ?></span></div>
                                        <div class="col-sm-6">
                                            <p>Availability:
                                                <?php  if($product['delivery_type']=="Digital Mode") {
                                                    if($pkey['0'] > 0) {?><span class="in-stock"> In stock</span>
                                                <?php } else {?>
                                                <span class="in-stock" style="color:brown"> Out stock</span>
                                                <?php } } // if digital 
                                                else {?>
                                                <span class="in-stock" style="color:green"> In stock</span>
                                                <?php }?>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- List Details -->
                                    <ul class="bullet-round-list">
                                        <li>Brand: <?php  echo $product['brand'] ?> </li>
                                        <li>Version: <?php  echo $product['version'] ?> </li>
                                        <li>Category: <?php  echo $product['category'] ?> </li>

                                        <?php
                                      
                                      if($product['delivery_type']=="Digital Mode"){
                                      
                                      if($pkey['0'] > 0) {?> <li>Validity : <?php 
$pid = $product['id']; 
$pk = mysqli_query($con,"SELECT COUNT(id) FROM `product_key`  WHERE `pid`='$pid' and `status`='Live' "); 
$pkey = mysqli_fetch_array($pk);

$pkx = mysqli_query($con,"SELECT * FROM `product_key`  WHERE `pid`='$pid' and `status`='Live' "); 
$pkeyx = mysqli_fetch_array($pkx);

echo $pkeyx['validity'];
                                        
                                        
                                          $key = $pkey['0'];  
                                        ?></li>
                                        <?php } ?>
                                        <li>Delivery : <?php  echo $product['delivery_type'] ?> </li>
                                        <?php if($pkey['0'] > 0) {?>
                                        <li>Qty :
                                            <input type="number" value="1" id="numb"
                                                onchange="if(this.value < 1) { alert('You can not add less than 1'); this.value='1' } else if(this.value > <?php  echo $key ?>){alert('Not available.'); this.value='<?php echo $key ?>'; }  setPrice(); "
                                                style="width:80px;">
                                        </li>
                                        <input type="hidden" id="price" value="<?php  echo $product['price'] ?>">


                                        </li>
                                    </ul>
                                    <!-- Colors -->
                                    <script>
                                    function setPrice() {
                                        var numb = document.getElementById("numb").value;
                                        var price = document.getElementById("price").value;
                                        var n = parseInt(numb);
                                        var p = parseInt(price);
                                        document.getElementById("pricex").innerHTML = "₹" + n * p;
                                        document.getElementById("pricey").value = n;
                                    }
                                    </script>
                                    <?php } ?>
                                    <!-- Quinty -->
                                    <?php 
        $p_c = mysqli_query($con,"SELECT * FROM `product_key` WHERE `pid`='$pid' and `status`='Live' order by id asc " ); 
        $product_key_res = mysqli_fetch_array($p_c); 
        
        if($product_key_res > 0) {

?>


                                    <form action="cart.php" method="POST">
                                        <?php     $uid = $_SESSION['cid'];
        $cp = mysqli_query($con,"SELECT * FROM `orders` WHERE `uid`='$uid' and `status`='Pending' and `pid`='$pid' "); 
        $cp_res = mysqli_fetch_array($cp);
            if($cp_res>0) {
                ?>

                                        <a href="./dashboard.php" class="btn-round"><i
                                                class="icon-basket-loaded margin-right-5"></i> Complete Order</a>
                                        <?php }else  { ?>

                                        <a href="./payment/index.php?pid=<?php echo $product['id'] ?>&qty=1"
                                            class="btn-round"><i class="icon-basket-loaded margin-right-5"></i> Order
                                            now</a>
                                        <input type="hidden" name="pid" value="<?php echo $product['id'] ?>" />
                                        <input type="hidden" name="qty" id="pricey" value="1" />
                                        <button type="submit" name="add_cart" class="btn-round"
                                            style="background:orange"> <i class="icon-basket-loaded margin-right-5"></i>
                                            Add to cart </button>



                                        <?php } ?>

                                    </form>
                                    <?php } else {?>
                                    <a href="javascript:void()" class="btn-round"
                                        style="background:brown; color:white; margin-top:50px;"> Currently out of stock
                                    </a>
                                    <?php } 
        
    
    ?>

                                    <?php } 
    //  checking digital product or physical
    else {
        ?>
                                    <form action="cart.php" method="POST">
                                        <input type="hidden" value="1" id="numb"
                                            onchange="if(this.value < 1) { alert('You can not add less than 1'); this.value='1' } else if(this.value > <?php  echo 10 ?>){alert('Not available.'); this.value='<?php echo 10 ?>'; }  setPrice(); "
                                            style="width:80px;"></li>
                                        <input type="hidden" id="price" value="<?php  echo $product['price'] ?>">

                                         <input type="hidden" name="qty" id="pricey" value="1" />



<script>
                                    function setPrice() {
                                        var numb = document.getElementById("numb").value;
                                        var price = document.getElementById("price").value;
                                        var n = parseInt(numb);
                                        var p = parseInt(price);
                                        document.getElementById("pricex").innerHTML = "₹" + n * p;
                                        document.getElementById("pricey").value = n;
                                    }
                                    </script>
                                    
                                    
                                        <?php     $uid = $_SESSION['cid'];
        $cp = mysqli_query($con,"SELECT * FROM `orders` WHERE `uid`='$uid' and `status`='Pending' and `pid`='$pid' "); 
        $cp_res = mysqli_fetch_array($cp);
            if($cp_res>0) {
                ?>



                                        <a href="./dashboard.php" class="btn-round"><i
                                                class="icon-basket-loaded margin-right-5"></i> Complete Order</a>
                                        <?php }else  { ?>

                                        <a href="./payment/index.php?pid=<?php echo $product['id'] ?>&qty=1"
                                            class="btn-round"><i class="icon-basket-loaded margin-right-5"></i> Order
                                            now</a>
                                        <input type="hidden" name="pid" value="<?php echo $product['id'] ?>" />
                                        <input type="hidden" name="qty" id="pricey" value="1" />
                                        <button type="submit" name="add_cart" class="btn-round"
                                            style="background:orange"> <i class="icon-basket-loaded margin-right-5"></i>
                                            Add to cart </button>



                                        <?php } ?>

                                    </form>

                                    <?php 
    }
?>






                                </div>
                            </div>
                        </div>
                        <!-- Details Tab Section-->

                    </div>
                    <!-- Related Products -->
                    <section class="padding-top-30 padding-bottom-0">
                        <!-- heading -->
                        <div class="heading">
                            <h2>Related Products</h2>
                            <hr>
                        </div>
                        <!-- Items Slider -->
                        <div class="item-slide-4 with-nav">


                            <?php 
$category = $product['category'];
$a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='$category' and `status`!='Deleted' order by rand() "); 
                               while($anti = mysqli_fetch_array($a)){



?>
                            <!-- Product -->
                            <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'">
                                <article>
                                    <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>"
                                        alt="" style="height:160px;width:auto">
                                    <!-- Content -->
                                    <span class="tag"
                                        style="text-transform:capitalize"><?php  echo $anti['category'] ?></span> <a
                                        href="#." class="tittle"> <?php  echo $anti['title'] ?></a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i>
                                    </p>
                                    <div class="price"> ₹ <?php  echo $anti['price'] ?> </div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                </article>
                            </div>

                            <?php } ?>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Your Recently Viewed Items -->



    <style>
    @media(max-width:600px) and (min-width:100px) {

        .product img {
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .amar_product_detail {
            width: 100% !important;
            display: inline-block !important;
        }


        .amar_product_detail .col-xs-7 {
            width: 100% !important;
            display: inline-block !important;
        }

        .amar_product {
            width: 100% !important;
            display: inline-block !important;
        }

    }
    </style>
    <script>
    setInterval(function() {
        location.reload();
    }, 15000);
    </script>

    <?php  require './footer.php'; ?>