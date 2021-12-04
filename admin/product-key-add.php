<?php require './header.php';

if (isset($_POST['add_product_key'])) {
     
    date_default_timezone_set('Asia/Kolkata');
    $date = date("d-M-Y");
    $ddate = date("dmYhis");
    $time = date("h:i A");


    $key = $_POST['key'];
    $pid = $_POST['pid'];
    $validity = $_POST['validity'];
     
        $inst = mysqli_query(
            $con,
            "INSERT INTO `product_key` SET `pid`='$pid',`product_key`='$key',`status`='Live',`validity`='$validity' "
        );
        if ($inst) {
            
            echo "<script>location.href='./product-key.php'</script>";
        } else {
            echo "<script>alert('Server not responding ! ')</script>";
            echo "<script>location.href='./product-key-add.php'</script>";
        }
    }

?>

<title> Add Product - <?php echo $com['name']; ?> </title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">
                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> Product Key Manager
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
                                    Add Product Key
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

                    <h5> Add Product Key</h5>

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
                                    <input type="text" name="key" id="key"  autocomplete="false" class="form-control" placeholder="Product Key " required></td>
                                    </tr>
                                    
                                    <tr>
                                    
                                        <td>  <select class="form-control"  name="validity" required >
                                        <option value="">Validity</option>
                                            <option value="0.6 Y"> 0.6 Y </option>
                                            <option value="1 Y">1.0 Y </option>
                                            <option value="1.6 Y"> 1.6 Y </option>
                                            <option value="2.0 Y"> 2.0 Y </option>
                                            <option value="2.6 Y"> 2.6 Y </option>
                                            <option value="3.0 Y"> 3.0 Y  </option>
                                        </select> </td>
                                    </tr>
                                    
                                    <tr>
                                
                                    <td>   
                                
                                    <select class="form-control" name="pid">
                                        <option value="">Product</option>
                                    
<?php $p = mysqli_query($con,"SELECT * FROM `products` WHERE `status`!='Deleted' order by id asc "); 
    $i = 1; 
    while($product = mysqli_fetch_array($p)){ ?>
                                   <option value="<?php echo $product['id'] ?>"><?php echo $product['id'].' : '.$product['title'] ?></option>
<?php } ?>
</select>
                                
                                </td>
                                </tr>
                                 


                                <tr>
                                    <td colspan="2">
                                        <center>

                                            <input type="reset" value="Clear Form" class="btn btn-warning">
                                            <input type="submit" name="add_product_key" value="Add Product Key "
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




        <?php require './footer.php'; ?>
