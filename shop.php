<?php require "./header.php"; 


if(!isset($_GET['q'])) {
  echo "<script>location.href='./'</script>";
}


?>

<title>Searching result - <?php echo $com['name'] ?></title>
<!-- Linking -->
<div class="linking">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active" style="text-transform:capitalize"> <?php echo $_GET['q'] ?></li>
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
                            <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=antivirus">Antivirus</a>  </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=internet+security">Internet Security</a>  </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=total+security">Total Security </a>  </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=mobile+security">Mobile Security</a>  </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=other+products">Other Products</a>  </li>
                                <li> <i class="fa fa-link"></i> &nbsp; <a href="./shop.php?q=accessories">Accessories</a>  </li>
                            </ul>
                        </div>
                       
                    </div>
                </div>

                <!-- Products -->
                <div class="col-md-9">
 

                    <!-- Items -->
                    <div class="col-list">
                        <!-- Product -->

<?php $q = str_replace("-"," ",$_GET['q']); 
  $a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='$q' and `status`!='Deleted' order by id desc "); 
  while($anti = mysqli_fetch_array($a)){

?>

                        <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'" style="">
                            <article>
                                <!-- Product img -->
                                <div class="media-left">
                                    <div class="item-img"> <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt="" style="height:200px;width:auto"> </div>
                                </div>
                                <!-- Content -->
                                <div class="media-body">
                                    <div class="row amar_product_detail">
                                        <!-- Content Left -->
                                        <div class="col-sm-7 amar_product"> <span class="tag" style="text-transform:capitalize"><?php  echo $anti['category'] ?> </span> <a href="#."
                                                class="tittle"> <?php  echo $anti['title'] ?></a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> </p>
                                            <ul class="bullet-round-list">
                                            <li>Brand: <?php  echo $anti['brand'] ?> </li>
                                        <li>Version: <?php  echo $anti['version'] ?> </li>
                                        <li>Category: <?php  echo $anti['category'] ?> </li>
                                        <li>Validity : <?php 
$pid = $anti['id']; 
$pk = mysqli_query($con,"SELECT * FROM `product_key`  WHERE `pid`='$pid' and `status`='Live' "); 
$pkey = mysqli_fetch_array($pk);

echo $pkey['validity'];
                                        
                                        
                                        ?></li>
                                        <li>Delivery : <?php  echo $anti['delivery_type'] ?> </li>
                                            </ul>
                                        </div>
                                        <!-- Content Right -->
                                        <div class="col-sm-5 text-center"> <a href="#." class="heart"><i
                                                    class="fa fa-heart"></i></a> <a href="#." class="heart navi"><i
                                                    class="fa fa-navicon"></i></a>
                                            <div class="position-center-center">
                                                <div class="price"> ₹ <?php  echo $anti['price'] ?></div>
                                                <p>Availability: <span class="in-stock">In stock</span></p>
                                                <a href="#." class="btn-round"><i class="icon-basket-loaded"></i> View Details </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

<?php } ?>
 
   



                        <!-- pagination -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Your Recently Viewed Items -->
   
   <style>
   .product {
       height:250px;padding:15px;
   }
    @media(max-width:600px) and (min-width:100px) {
     
      .amar_product_detail {
            width:100%!important;
            display:inline-block!important;
        }
        
        .media-left img {
            max-height:120px;
            width:auto;
            
        }
        
        .product {
            height:500px;
        }
        .amar_product_detail .col-sm-7 {
              width:100%!important;
            display:inline-block!important;
        }
        .product .col-sm-5 {
            margin-top:-60px;
        }
        .media-body {
              width:100%!important;
            display:inline-block!important;
        }
        article {
            height: 550px!important;
        }
         
    }
</style>


   <?php /*
   
    <section class="padding-bottom-60">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                <h2>Your Recently Viewed Items</h2>
                <hr>
            </div>
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav">
                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="">
                        <!-- Content -->
                        <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For
                            Playing Game</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00 </div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>
                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt=""> <span
                            class="sale-tag">-25%</span>

                        <!-- Content -->
                        <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con
                            8GB</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00 <span>$200.00</span></div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="">
                        <!-- Content -->
                        <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch
                            M26 Touch Bluetooh </a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt=""> <span
                            class="new-tag">New</span>

                        <!-- Content -->
                        <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth
                            Con Air Mouse</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                        <!-- Content -->
                        <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full
                            HD</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt=""> <span
                            class="sale-tag">-25%</span>

                        <!-- Content -->
                        <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con
                            8GB</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00 <span>$200.00</span></div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="">
                        <!-- Content -->
                        <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch
                            M26 Touch Bluetooh </a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span
                            class="new-tag">New</span>

                        <!-- Content -->
                        <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth
                            Con Air Mouse</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>
            </div>
        </div>
    </section>





    <?php */ require "./footer.php" ?>