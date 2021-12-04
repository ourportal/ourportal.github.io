<?php require './header.php';

if (isset($_POST['add_slider'])) {
     
    date_default_timezone_set('Asia/Kolkata');
    $date = date("d-M-Y");
    $ddate = date("dmYhis");
    $time = date("h:i A");


    $heading = $_POST['heading'];
    $heading2 = $_POST['heading2'];
    $price = $_POST['price'];
    $button_text = $_POST['button_text'];
    $button_url = $_POST['button_url'];
     
    $uimg=$_FILES['thumbnail']['name']; //storing file name code
    //$ext = end(explode('.',$uimg));         
    $tempuimg = $_FILES['thumbnail'] ['tmp_name']; //tempname set
    $img = $ddate.'.png';
    move_uploaded_file($tempuimg,"img/$img");

     
        $inst = mysqli_query(
            $con,
            "INSERT INTO `sliders` SET 
                `heading`='$heading',
                `heading2`='$heading2',
                `price`='$price',
                `button_text`='$button_text',
                `button_url`='$button_url',
                `thumbnail`='$img',
                `status`='Live' "
        );
        if ($inst) {
            
            echo "<script>location.href='./slider.php'</script>";
        } else {
            echo "<script>alert('Server not responding ! ')</script>";
            echo "<script>location.href='./slider-add.php'</script>";
        }
    }

?>

<title> Add Slider - <?php echo $com['name']; ?> </title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">
                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> Sliders Manager
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
                                    Add Slider Image
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

                    <h5> Add Slider Image</h5>

                    <div class="card-header-right">

                        <div class="btn-group card-option">



                        </div>

                    </div>

                </div>

                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover mb-0">
                            <form action="" method="post" enctype="multipart/form-data">
                                    <tr> <td>   
                                    <input type="text" name="heading" id="heading"  class="form-control" placeholder="Slider Heading 1 " ></td>
                                    </tr><tr>


                                    <tr> <td>   
                                    <input type="text" name="heading2" id="heading2"  class="form-control" placeholder="Slider Heading 2 "></td>
                                    </tr><tr>


                                    <tr> <td>   
                                    <input type="text" name="price" id="price"  class="form-control" placeholder="Staring Price"></td>
                                    </tr><tr>


                                    <tr> <td>   
                                    <input type="text" name="button_text" id="button_text"  class="form-control" placeholder="Button Text"></td>
                                    </tr><tr>


                                    <tr> <td>   
                                    <input type="text" name="button_url" id="button_url"  class="form-control" placeholder="Button url"></td>
                                    </tr><tr>
                                
                                    <td>   
                                
                                    <input type="file" name="thumbnail" id="thumbnail" class="form-control-file" required>
                                </td>
                                </tr>
                                 


                                <tr>
                                    <td colspan="2">
                                        <center>

                                            <input type="reset" value="Clear Form" class="btn btn-warning">
                                            <input type="submit" name="add_slider" value="Add Slider "
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
