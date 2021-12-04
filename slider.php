        <!-- Slid Sec -->
        <section class="slid-sec">
            <div class="container">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Main Slider  -->
                        <div class="col-md-12 no-padding">

                            <!-- Main Slider Start -->
                            <div class="tp-banner-container">
                                <div class="tp-banner">
                                    <ul>

                 <?php  $s = mysqli_query($con,"SELECT * FROM `sliders` WHERE `status`='Live' order by id desc ");
                                        while($slider = mysqli_fetch_array($s)){
                                            ?>
                                        <!-- SLIDE  -->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                            data-saveperformance="off" class="slider_image_custom" >
                                            <!-- MAIN IMAGE -->
                                            <img src="./admin/img/<?php echo $slider['thumbnail'] ?>" alt="slider"
                                                data-bgposition="center bottom" data-bgfit="cover"
                                                data-bgrepeat="no-repeat" style="height:100%; width: auto" >

                                                <?php if(strlen($slider['heading'])>0){ ?>
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="60"
                                                data-y="center" data-voffset="-110" data-speed="800" data-start="800"
                                                data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                                                data-elementdelay="0.03" data-endelementdelay="0.4" data-endspeed="300"
                                                style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">
                                                <?php echo $slider['heading'] ?> </div>

<?php } 
 if(strlen($slider['heading'])>0){?> 
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="60"
                                                data-y="center" data-voffset="-60" data-speed="800" data-start="1000"
                                                data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                                                data-elementdelay="0.03" data-endelementdelay="0.1" data-endspeed="300"
                                                style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">
                                                <?php echo $slider['heading2'] ?>  </div>
<?php } 

if(strlen($slider['price'])>0){ ?>
                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="60"
                                                data-y="center" data-voffset="10" data-speed="800" data-start="1200"
                                                data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                                                data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
                                                style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">
                                                Starting at </div>
 
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="210"
                                                data-y="center" data-voffset="5" data-speed="800" data-start="1300"
                                                data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                                                data-elementdelay="0.03" data-endelementdelay="0.4" data-endspeed="300"
                                                style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">
                                                  <?php echo $slider['price'] ?>  </div>
<?php } 

    if(strlen($slider['button_text'])>0){?>
                                            <!-- LAYER NR. 4 -->
                                            <div class="tp-caption lfb tp-resizeme scroll" data-x="left"
                                                data-hoffset="60" data-y="center" data-voffset="80" data-speed="800"
                                                data-start="1300" data-easing="Power3.easeInOut" data-elementdelay="0.1"
                                                data-endelementdelay="0.1" data-endspeed="300" data-scrolloffset="0"
                                                style="z-index: 8;"><a href=" <?php echo $slider['button_url'] ?> " class="btn-round big">  <?php echo $slider['button_text'] ?> </a>
                                            </div>

<?php } ?>
                                        </li>

                                        <?php } ?>


                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Main Slider  -->


<style>
.slider_image_custom img {
    height:100%;
    width:auto;
    overflow:hidden;
}

</style>

                        <?php /*
                        <div class="col-md-3 no-padding">

                            <!-- New line required  -->
                            <div class="product">
                                <div class="like-bnr">
                                    <div class="position-center-center">
                                        <h5>New line required</h5>
                                        <h4>Smartphone s7</h4>
                                        <span class="price">$259.99</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Weekly Slaes  -->
                            <div class="week-sale-bnr">
                                <h4>Weekly <span>Sale!</span></h4>
                                <p>Saving up to 50% off all online
                                    store items this week.</p>
                                <a href="#." class="btn-round">Shop now</a>
                            </div>
                        </div>
                        */?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content -->
        <div id="content">

            <!-- Shipping Info -->
            <section class="shipping-info">
                <div class="container">
                    <ul>

                        <!-- Free Shipping -->
                        <li>
                            <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
                            <div class="media-body">
                                <h5>Free Shipping</h5>
                                <span>On order over $99</span>
                            </div>
                        </li>
                        <!-- Money Return -->
                        <li>
                            <div class="media-left"> <i class="flaticon-arrows"></i> </div>
                            <div class="media-body">
                                <h5>Money Return</h5>
                                <span>30 Days money return</span>
                            </div>
                        </li>
                        <!-- Support 24/7 -->
                        <li>
                            <div class="media-left"> <i class="flaticon-operator"></i> </div>
                            <div class="media-body">
                                <h5>Support 24/7</h5>
                                <span>Hotline: (+100) 123 456 7890</span>
                            </div>
                        </li>
                        <!-- Safe Payment -->
                        <li>
                            <div class="media-left"> <i class="flaticon-business"></i> </div>
                            <div class="media-body">
                                <h5>Safe Payment</h5>
                                <span>Protect online payment</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>