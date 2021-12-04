<?php require './header.php';

if (isset($_POST['add_product'])) {
     
    date_default_timezone_set('Asia/Kolkata');
    $date = date("d-M-Y");
    $ddate = date("dmYhis");
    $time = date("h:i A");


    $title = $_POST['title'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $version = $_POST['version'];
    $category = $_POST['category']; 
    $delivery_type = $_POST['delivery_type'];


    $uimg=$_FILES['thumbnail']['name']; //storing file name code
    //$ext = end(explode('.',$uimg));         
    $tempuimg = $_FILES['thumbnail'] ['tmp_name']; //tempname set
    $img = $ddate.'.png';
    move_uploaded_file($tempuimg,"img/$img");
    
    
    $set=$_FILES['setup']['name']; //storing file name code
    $ext = end(explode('.',$set));         
    $tempset = $_FILES['setup'] ['tmp_name']; //tempname set
    $setup = $ddate.'.'.$ext;
    move_uploaded_file($tempset,"setup/$setup");


    
        $inst = mysqli_query(
            $con,
            "INSERT INTO `products` SET `title`='$title',`price`='$price',`brand`='$brand', `version`='$version',`category`='$category', `delivery_type`='$delivery_type',`thumbnail`='$img',`date`='$date',`time`='$time',`setup`='$setup' "
        );
        if ($inst) {
            
            echo "<script>location.href='./products.php'</script>";
        } else {
            echo "<script>alert('Server not responding ! ')</script>";
            echo "<script>location.href='./profile.php'</script>";
        }
    }

?>

<?php if(!isset($_GET['edit'])) {?>


<title> Add Product - <?php echo $com['name']; ?> </title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">
                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> Product Manager
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
                                    Add Product
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- [ breadcrumb ] end -->



        <div class="col-xl-12 col-md-12">

            <div class="card table-card">

                <div class="card-header">

                    <h5> Add Product </h5>

                    <div class="card-header-right">

                        <div class="btn-group card-option">



                        </div>

                    </div>

                </div>

                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover mb-0">
                            <form action="" method="post" enctype="multipart/form-data">
                                <tr>
                                    <td>   
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Product Title " required></td>
                                    </tr><tr>
                                    <td>   
                                    <input type="number" name="price" id="price" class="form-control" placeholder="Product Price " required></td>
                                </tr>
                                <tr>
                                    <td> 
                                     <input type="text" name="brand" id="brand" class="form-control"
                                            placeholder="Brand "  required></td>

                                            </tr><tr>

                                    <td> 
                                     <input type="text" name="version" id="version" class="form-control"
                                            placeholder="Version "  required></td>
                                </tr>
                                <tr>
                                    
                                    <td> 
                                        <select name="category" id="category" class="form-control">
                                            <option value="">Category</option>
                                            <option value="antivirus">Antivirus</option>
                                            <option value="internet security">Internet Security</option>
                                            <option value="Total Security">Total Security</option>
                                            <option value="Mobile Security">Mobile Security</option>
                                            <option value="Other Product">Other Product</option>
                                            <option value="Accessories">Accessories</option>
                                        </select>
                                    </td>
                                    </tr> 


                                <tr>
                                    
                                    <td>
                                        <input type="file" name="thumbnail" class="form-control-file" required>
                                        
                                    </td>
</tr>                       <tr>
                                    <td>
                                    <select name="delivery_type" id="delivery_type" class="form-control">
                                            <option value="">Delivery Type</option>
                                            <option value="Digital Mode">Digital Mode</option>
                                            <option value="Physical Mode">Physical Mode</option>
                                        </select>

                                    </td>
                                </tr>
                                
                                
                                <!--<tr>-->
                                <!--    <td>-->
                                <!--    <select name="pc_num" id="" class="form-control">-->
                                <!--            <option value=""> Supported Pc</option>-->
                                <!--            <option value="1">1 Pc</option>-->
                                <!--            <option value="2">2 Pc</option>-->
                                <!--            <option value="3">3 Pc</option>-->
                                <!--            <option value="4">4 Pc</option>-->
                                <!--            <option value="5">5 Pc</option>-->
                                <!--            <option value="6">6 Pc</option>-->
                                <!--        </select>-->

                                <!--    </td>-->
                                <!--</tr>-->
                                
                                
                                
                                <tr>
                                    <td>
                                  <p>Select setup file</p>
                                    <input type="file" accept="/*" class="form-control" name="setup" />

                                    </td>
                                </tr>


                                <tr>
                                    <td colspan="2">
                                        <center>

                                            <input type="reset" value="Clear Form" class="btn btn-warning">
                                            <input type="submit" name="add_product" value="Add Product "
                                                class="btn btn-primary">
                                        </center>
                                    </td>
                                </tr>


                            </form>
                        </table>

                    </div>

                </div>

            </div>

        </div>
        
        
<?php } else { ?>
<title> Edit Product - <?php echo $com['name']; ?> </title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"> Product Manager
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
                                    Edit Product
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5> Add Product </h5>
                    <div class="card-header-right">

                        <div class="btn-group card-option">



                        </div>

                    </div>

                </div>

                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover mb-0">
                            <form action="" method="post" enctype="multipart/form-data">
                                <tr>
                                    <td>   
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Product Title " required></td>
                                    </tr><tr>
                                    <td>   
                                    <input type="number" name="price" id="price" class="form-control" placeholder="Product Price " required></td>
                                </tr>
                                <tr>
                                    <td> 
                                     <input type="text" name="brand" id="brand" class="form-control"
                                            placeholder="Brand "  required></td>

                                            </tr><tr>

                                    <td> 
                                     <input type="text" name="version" id="version" class="form-control"
                                            placeholder="Version "  required></td>
                                </tr>
                                <tr>
                                    
                                    <td> 
                                        <select name="category" id="category" class="form-control">
                                            <option value="">Category</option>
                                            <option value="antivirus">Antivirus</option>
                                            <option value="internet security">Internet Security</option>
                                            <option value="Total Security">Total Security</option>
                                            <option value="Mobile Security">Mobile Security</option>
                                            <option value="Other Product">Other Product</option>
                                            <option value="Accessories">Accessories</option>
                                        </select>
                                    </td>
                                    </tr> 


                                <tr>
                                    
                                    <td>
                                        <input type="file" name="thumbnail" class="form-control-file" required>
                                        
                                    </td>
</tr>                       <tr>
                                    <td>
                                    <select name="delivery_type" id="delivery_type" class="form-control">
                                            <option value="">Delivery Type</option>
                                            <option value="Digital Mode">Digital Mode</option>
                                            <option value="Physical Mode">Physical Mode</option>
                                        </select>

                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                  <p>Select setup file</p>
                                    <input type="file" accept="/*" class="form-control" name="setup" />

                                    </td>
                                </tr>


                                <tr>
                                    <td colspan="2">
                                        <center>

                                            <input type="reset" value="Clear Form" class="btn btn-warning">
                                            <input type="submit" name="add_product" value="Add Product "
                                                class="btn btn-primary">
                                        </center>
                                    </td>
                                </tr>


                            </form>
                        </table>

                    </div>

                </div>

            </div>

        </div>


<?php } ?>









        <?php require './footer.php'; ?>
