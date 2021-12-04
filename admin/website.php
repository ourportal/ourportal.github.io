<?php require './header.php';

if (isset($_POST['add_product'])) {
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-M-Y');
    $ddate = date('dmYhis');
    $time = date('h:i A');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $instagram = $_POST['instagram'];
    $api = $_POST['api'];
    $secret = $_POST['secret'];
    
    $uimg = $_FILES['thumbnail']['name']; //storing file name code
    //$ext = end(explode('.',$uimg));
    $tempuimg = $_FILES['thumbnail']['tmp_name']; //tempname set
    $img = $ddate . '.png';
    move_uploaded_file($tempuimg, "img/$img");

    if(strlen($uimg)>0) {
        // if image exists 
        $upd = mysqli_query($con,"UPDATE `company` SET `name`='$name',`logo`='$img',`phone`='$phone',`email`='$email',`address`='$address',`facebook`='$facebook',`linkedin`='$linkedin',`instagram`='$instagram',`api`='$api',`secret`='$secret'  "); 
            if($upd) {
                echo "<script>alert('Update Success')</script>";
                echo "<script>location.href='./website.php'</script>";
            }
    } else {
        $upd = mysqli_query($con,"UPDATE `company` SET `name`='$name',`phone`='$phone',`email`='$email',`address`='$address',`facebook`='$facebook',`linkedin`='$linkedin',`instagram`='$instagram',`api`='$api',`secret`='$secret'  "); 
        if($upd) {
            echo "<script>alert('Update Success')</script>";
            echo "<script>location.href='./website.php'</script>";
        }
    }
}

?>

<title> Website Profile - <?php echo $com['name']; ?> </title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">
                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> Password Manager
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
                                    Website Manager
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

                    <h5> Update Website </h5>

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
                                        <p>Company Name</p>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Company Name " value="<?php echo $com['name'] ?>" required>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <p>Company Phone</p>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Company Phone " value="<?php echo $com['phone'] ?>" required>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <p>Company Email</p>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Company Email " value="<?php echo $com['email'] ?>" required>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <p>Company Address </p>
                                        <input type="text" name="address" id="address" class="form-control"
                                            placeholder="Company Address " value="<?php echo $com['address'] ?>" required>
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <p>Company Facebook Page </p>
                                        <input type="text" name="facebook" id="facebook" class="form-control"
                                            placeholder="Company Facebook Page " value="<?php echo $com['facebook'] ?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Company Linkedin Profile </p>
                                        <input type="text" name="linkedin" id="linkedin" class="form-control"
                                            placeholder="Company Linkedin Profile " value="<?php echo $com['linkedin'] ?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Company Instagram Profile </p>
                                        <input type="text" name="instagram" id="instagram" class="form-control"
                                            placeholder="Company Instagram Profile " value="<?php echo $com['instagram'] ?>" required>
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <p> Razorpay Payment API </p>
                                        <input type="text" name="api" id="api" class="form-control"
                                            placeholder="Razorpay Payment API" value="<?php echo $com['api'] ?>">
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <p> Razorpay Payment Secret </p>
                                        <input type="text" name="secret" id="secret" class="form-control"
                                            placeholder="Razorpay Payment Secret" value="<?php echo $com['secret'] ?>">
                                    </td>
                                </tr>




                                <tr> 
                                    <td>
                                        <p>Company Logo</p>
                                        <input type="file" name="thumbnail" class="form-control-file">

                                    </td>
                                </tr>



                                <tr>
                                    <td colspan="2">
                                        <center>

                                           
                                            <input type="submit" name="add_product" value="Update Profile "
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