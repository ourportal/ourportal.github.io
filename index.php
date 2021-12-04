<?php require "./header.php";

    $v = $com['page_view'] +1; 
    $upd = mysqli_query($con,"UPDATE `company` SET `page_view`='$v' WHERE `id`='1' ");

?>
<title>Home - <?php echo $com['name'] ?></title>
<?php  require "./slider.php" ?>


<!-- tab Section -->
<section class="featur-tabs padding-top-60 padding-bottom-60">
    <div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
            <li role="presentation" class="active"><a href="#antivirus" aria-controls="antivirus" role="tab"
                    data-toggle="tab">Antivirus</a></li>


            <li role="presentation"><a href="#internet-security" aria-controls="internet-security" role="tab"
                    data-toggle="tab">Internet Security</a></li>
            <li role="presentation"><a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Total
                    Security</a></li>

            <li role="presentation"><a href="#mobile-security" aria-controls="mobile-security" role="tab" data-toggle="tab">Mobile
                    Security</a></li>
            <li role="presentation"><a href="#other-product" aria-controls="other-product" role="tab" data-toggle="tab">Other
                    Product</a></li>
            <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">
                    Accessories</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Featured -->



            <div role="tabpanel" class="tab-pane active fade in" id="antivirus">
                <!-- Items Slider -->
                <div class="item-slide-5 with-nav">
                    <?php 
                               $a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='antivirus' and `status`!='Deleted' order by id desc "); 
                               while($anti = mysqli_fetch_array($a)){
                                  ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt=""
                                style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php echo $anti['category'] ?></span>
                            <a href="#." class="tittle"> <?php echo $anti['title'] ?> </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                <!-- <span class="margin-left-10">5
                                                Review(s)</span> -->

                            </p>
                            <div class="price"> ₹ <?php echo $anti['price'] ?> </div>
                            <a href="./product.php?pid=<?php echo str_replace(" ","-",$anti['title']) ?>"
                                class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- tab repeat  -->

            <!-- Special -->
            <div role="tabpanel" class="tab-pane fade" id="internet-security">
                <!-- Items Slider -->
                <div class="item-col-5">

                    <?php $i = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='internet security' and `status`!='Deleted' order by id desc "); 
                               while($internet = mysqli_fetch_array($i)){
                                 ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $internet['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $internet['thumbnail'] ?>"
                                alt="" style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize">
                                <?php echo $internet['category'] ?></span>

                            <a href="./product.php?pid=<?php echo $internet['id'] ?>" class="tittle">
                                <?php echo $internet['title'] ?></a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                            </p>
                            <div class="price"> ₹<?php echo $internet['price'] ?> </div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <?php } ?>
                </div>
            </div>

            <!-- on sale -->
            <div role="tabpanel" class="tab-pane fade" id="on-sal">
                <!-- Items Slider -->
                <div class="item-col-5">

                    <?php $t = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='total security' and `status`!='Deleted' order by id desc "); 
                                                                while($total = mysqli_fetch_array($t)){
                                    ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $total['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $total['thumbnail'] ?>" alt=""
                                style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php echo $total['category'] ?></span>
                            <a href="#." class="tittle"> <?php echo $total['title'] ?> </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
                            <div class="price"> ₹<?php echo $total['price'] ?> </div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <?php } ?>


                </div>
            </div>



            <div role="tabpanel" class="tab-pane fade" id="mobile-security">
                <!-- Items Slider -->
                <div class="item-col-5">

                    <?php $t = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='mobile security' and `status`!='Deleted' order by id desc "); 
                                                                while($total = mysqli_fetch_array($t)){
                                    ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $total['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $total['thumbnail'] ?>" alt=""
                                style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php echo $total['category'] ?></span>
                            <a href="#." class="tittle"> <?php echo $total['title'] ?> </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
                            <div class="price"> ₹<?php echo $total['price'] ?> </div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <?php } ?>


                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="other-product">
                <!-- Items Slider -->
                <div class="item-col-5">

                    <?php $t = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='other product' and `status`!='Deleted' order by id desc "); 
                                                                while($total = mysqli_fetch_array($t)){
                                    ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $total['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $total['thumbnail'] ?>" alt=""
                                style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php echo $total['category'] ?></span>
                            <a href="#." class="tittle"> <?php echo $total['title'] ?> </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
                            <div class="price"> ₹<?php echo $total['price'] ?> </div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <?php } ?>


                </div>
            </div>


            <div role="tabpanel" class="tab-pane fade" id="accessories">
                <!-- Items Slider -->
                <div class="item-col-5">

                    <?php $t = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='accessories' and `status`!='Deleted' order by id desc "); 
                                                                while($total = mysqli_fetch_array($t)){
                                    ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $total['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $total['thumbnail'] ?>" alt=""
                                style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php echo $total['category'] ?></span>
                            <a href="#." class="tittle"> <?php echo $total['title'] ?> </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
                            <div class="price"> ₹<?php echo $total['price'] ?> </div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <?php } ?>


                </div>
            </div>





        </div>
    </div>
</section>

<!-- Top Selling Week -->
<section class="light-gry-bg padding-top-60 padding-bottom-30">
    <div class="container">

        <!-- heading -->
        <div class="heading">
            <h2>Top Selling of the Week</h2>
            <hr>
        </div>

        <!-- Items -->
        <div class="item-col-5">



            <!-- Product -->
            <div class="product col-2x">
                <div class="like-bnr">
                    <div class="position-center-center">
                        <h5>Smart Watch 2.0</h5>
                        <p>Space Gray Aluminum Case
                            with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                        <a href="#." class="btn-round">View Detail</a>
                    </div>
                </div>
            </div>


            <?php $a = mysqli_query($con,"SELECT * FROM `products` WHERE `status`!='Deleted' order by rand() limit 8 "); 
                               while($anti = mysqli_fetch_array($a)){
  ?>
            <!-- Product -->
            <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'" >
                <article> <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt="" style="height:160px;width:auto">
                
                 <!-- <span
                        class="sale-tag">-25%</span> -->

                    <!-- Content -->
                    <span class="tag" style="text-transform:capitalize"  ><?php  echo $anti['category'] ?></span> <a href="#." class="tittle"> <?php  echo $anti['title'] ?></a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i> <i class="fa fa-star"></i>
                         
                    </p>
                    <div class="price"> ₹<?php  echo $anti['price'] ?>  
                         <!-- <span>$200.00</span> -->
                      </div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
            </div>
            <?php } ?>




        </div>
    </div>
</section>

<!-- Main Tabs Sec -->
<section class="main-tabs-sec padding-top-60 padding-bottom-0">
    <div class="container">
        <ul class="nav margin-bottom-40" role="tablist">
            <li role="presentation" class="active"><a href="#tv-au" aria-controls="featur" role="tab" data-toggle="tab">
                    <i class="flaticon-computer"></i> Antivirus 
                    <!-- <span>236
                        item(s)</span> -->
                        </a></li>
            <li role="presentation"><a href="#smart" aria-controls="special" role="tab" data-toggle="tab"><i
                        class="flaticon-smartphone"></i> Internet Security  
                        
                        <!-- <span>150 item(s)</span> -->
                        
                        </a></li>
            <li role="presentation"><a href="#deks-lap" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                        class="flaticon-laptop"></i> Total Security  
                        <!-- <span>268
                        item(s)</span> -->
                        </a></li>
            <li role="presentation"><a href="#game-com" aria-controls="special" role="tab" data-toggle="tab"><i
                        class="flaticon-gamepad-1"></i> Mobile Security  
                        <!-- <span>79  item(s)</span> -->
                        </a></li>
            <li role="presentation"><a href="#watches" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                        class="flaticon-computer-1"></i> Other Products 
                         <!-- <span>105
                        item(s)</span> -->
                        </a></li>
            <li role="presentation"><a href="#access" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                        class="flaticon-keyboard"></i>Accessories
                         <!-- <span>816 item(s)</span> -->
                         </a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- TV & Audios -->
            <div role="tabpanel" class="tab-pane active fade in" id="tv-au">

                <!-- Items -->
                <div class="item-slide-5 with-bullet no-nav">







                    <?php $a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='antivirus' and `status`!='Deleted' order by id desc "); 
                               while($anti = mysqli_fetch_array($a)){
 ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'" >
                        <article><img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt="" style="height:160px;width:auto">  <span
                                class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php  echo $anti['category'] ?></span> <a href="#." class="tittle"> <?php  echo $anti['title'] ?></a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i>  </p>
                            <div class="price"> ₹<?php  echo $anti['price'] ?></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Smartphones -->
            <div role="tabpanel" class="tab-pane fade" id="smart">
                <!-- Items -->
                <div class="item-col-5">


                    <?php $a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='internet security' and `status`!='Deleted' order by id desc "); 
                               while($anti = mysqli_fetch_array($a)){
            ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt="" style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php  echo $anti['category'] ?></span> <a href="#." class="tittle"> <?php  echo $anti['title'] ?></a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                            </p>
                            <div class="price"> ₹ <?php  echo $anti['price'] ?></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <?php } ?>


                </div>
            </div>
            <!-- Desk & Laptop -->
            <div role="tabpanel" class="tab-pane fade" id="deks-lap">

                <!-- Items -->
                <div class="item-col-5">




                    <?php $a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='total security' and `status`!='Deleted' order by id desc "); 
                               while($anti = mysqli_fetch_array($a)){
  # code...
?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'" >
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt="" style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php  echo $anti['category'] ?></span> <a href="#." class="tittle"><?php  echo $anti['title'] ?></a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                            </p>
                            <div class="price"> ₹ <?php  echo $anti['price'] ?></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>


                    <?php } ?>
                </div>
            </div>
            <!-- Game Console -->
            <div role="tabpanel" class="tab-pane fade" id="game-com">

                <!-- Items -->
                <div class="item-col-5">



                    <?php $a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='mobile security' and `status`!='Deleted' order by id desc "); 
                               while($anti = mysqli_fetch_array($a)){
    ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt="" style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize" ><?php  echo $anti['category'] ?></span> <a href="#." class="tittle"> <?php  echo $anti['title'] ?></a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                            </p>
                            <div class="price"> ₹ <?php  echo $anti['price'] ?></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <!-- Watches -->
            <div role="tabpanel" class="tab-pane fade" id="watches">

                <!-- Items -->
                <div class="item-col-5">

                    <?php $a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='other product' and `status`!='Deleted' order by id desc "); 
                               while($anti = mysqli_fetch_array($a)){
   ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt="" style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php  echo $anti['category'] ?> </span> <a href="#." class="tittle"> <?php  echo $anti['title'] ?></a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>  
                            </p>
                            <div class="price"> ₹ <?php  echo $anti['price'] ?></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <?php }?>
                </div>
            </div>
            <!-- Accessories -->
            <div role="tabpanel" class="tab-pane fade" id="access">

                <!-- Items -->
                <div class="item-col-5">


                    <?php $a = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='accessories' and `status`!='Deleted' order by id desc "); 
                               while($anti = mysqli_fetch_array($a)){
            ?>
                    <!-- Product -->
                    <div class="product" onclick="location.href='./product.php?pid=<?php echo $anti['id'] ?>'">
                        <article> <img class="img-responsive" src="./admin/img/<?php echo $anti['thumbnail'] ?>" alt="" style="height:160px;width:auto">
                            <!-- Content -->
                            <span class="tag" style="text-transform:capitalize"><?php  echo $anti['category'] ?></span> <a href="#." class="tittle"> <?php  echo $anti['title'] ?></a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
                            <div class="price"> ₹ <?php  echo $anti['price'] ?></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Selling Week -->


<?php /*
<section class="padding-top-60 padding-bottom-60">
    <div class="container">

        <!-- heading -->
        <div class="heading">
            <h2>From our Blog</h2>
            <hr>
        </div>
        <div id="blog-slide" class="with-nav">


            <?php for ($i=0; $i < 3; $i++) { 
   ?>
            <!-- Blog Post -->
            <div class="blog-post">
                <article> <img class="img-responsive" src="images/blog-img-1.jpg" alt=""> <span><i
                            class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86
                        Comments</span> <a href="#." class="tittle">It’s
                        why there’s nothing else like Mac. </a>
                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae
                        efficitur mi [...] </p>
                    <a href="#.">Readmore</a>
                </article>
            </div>
            <?php }?>



        </div>
    </div>
</section>


*/ ?>

<style>
    @media(max-width:800px) and (min-width:100px) {
        .nav-pills li {
            width:100%;
        }
    }
</style>
<?php require "./footer.php" ?>