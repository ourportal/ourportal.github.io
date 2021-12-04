<?php require './header.php';

    if(isset($_GET['delete'])) {
        $del = $_GET['delete']; 
        $d = mysqli_query($con,"UPDATE `sliders` SET `status`='Deleted' WHERE `id`='$del' ");
        if($d) {
            echo "<script>alert('Slide deleted ! ')</script>"; 
            echo "<script>location.href='./slider.php'</script>"; 

        }
    }

?>

<title> All Sliders - <?php echo $com['name'] ?> </title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">

                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> All Sliders 
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
                                    Sliders analytics
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

                    <h5>All Sliders
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

                    <div class="table-responsive">

                        <table class="table table-hover mb-0">

                            <thead>

                                <tr>
 
                                    <th>

                                        <div class="chk-option">
                                                SL
                                        </div>
                                        Thumbnail </th>

                                    <th> Title  </th>
                                    <th> Heading 2 </th>

                                    <th> Price </th>


                                    <th> Button Text </th>
                                    <th> Action </th>

                                </tr>

                            </thead>

                            <tbody>


<?php $p = mysqli_query($con,"SELECT * FROM `sliders` WHERE `status`!='Deleted' order by id desc "); 
    $i = 1; 
    while($product = mysqli_fetch_array($p)){
    ?>

                                <tr>

                                    <td>

                                        <div class="chk-option">
                                            <?php echo $i ?>

                                        </div>

                                        <div class="d-inline-block align-middle">

                                             <img src="img/<?php echo $product['thumbnail'] ?>" alt="<?php echo substr($product['title'],0,2) ?>"
                                                class="wid-120 align-top m-r-15">  

                                            <div class="d-inline-block">

                                               
                                                <!-- <p class="text-muted m-b-0">Graphics Designer
                                                </p> -->

                                            </div>

                                        </div>

                                    </td>

                                    <td>  <h6> <?php echo substr($product['heading'],0,50) ?> </h6> </td>
                                    <td>  <h6> <?php echo substr($product['heading2'],0,50) ?> </h6> </td>
                                    <td>  <h6> <?php echo substr($product['price'],0,50) ?> </h6> </td>
                                    <td>  <h6> <?php echo substr($product['button_text'],0,50) ?> </h6> </td>
                                     
                                    <td>
                                        <a href="?delete=<?php echo $product['id'] ?>"   onclick="return confirm('This slide will delete ')" class="btn btn-primary"> <i class="feather icon-delete"></i> </a>
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