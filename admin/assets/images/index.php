<?php if(!isset($_GET)) {?>

<h3>Access denied ! </h3>

<?php } else {?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>

<body class="bg-dark">



    <?php 
if(isset($_GET['delete'])) {
    $del = $_GET['delete'];
    chdir("img");
    $d = unlink($del);
        if($d) {
            chdir("");
            echo "<script>alert('Deleted ')</script>";
            echo "<script>location.href='./'</script>";
        } else {
            chdir("../");
            echo "<script>alert('Failed ')</script>";
            echo "<script>location.href='./'</script>";
        }
}
 

if(isset($_POST['upload'])) {
$uimg=$_FILES['Myfile']['name']; //storing file name code
$ext = end(explode('.', $uimg));

date_default_timezone_set('Asia/Kolkata');

//If you want Day,Date with time AM/PM
$date = date("d-M-Y");
$ddate = date("dmYhis");

//Get Only Current Time 00:00 AM / PM 
$time = date("h:i A");
    
    
        
     $tempuimg = $_FILES['Myfile'] ['tmp_name']; //tempname set
     $img = $uimg;
   $c =  move_uploaded_file($tempuimg,"./$img");

   if($c) {
       echo "<script>alert('Upload successfull.')</script>";
      
    $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
   }
   
   
   }

?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css



">
    <br><br>




    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap" style="overflow-y:scroll; max-height:80vh">
                        <h4> Media List</h4>
                        <div class="add-product">
                            <a href="javascript:void();" onclick="document.getElementById('image').click()">Add Image
                            </a>
                        </div>

                        <form action="" method="post" enctype="multipart/form-data">

                            <center> <input type="file" name="Myfile" class="form-control" id="image"> <br>
                                <input type="submit" value="Upload" name="upload" class="btn btn-warning w-100">
                            </center>
                        </form>
                        <hr>


                        <br>
                        <div style="height: 80vh;  padding:25px" class="bg-secondary">
                            <?php 
    
      $myfiles = scandir('./',1); 
       
        for($i=0; $i<=1000; $i++) {
             $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
            
             #echo "<a href='$actual_link/../img/$myfiles[$i] ' target='_blank' style='color: white'>";
            
                    $lx = $actual_link.'./'.$myfiles[$i] ;
                    
            if(strlen($myfiles[$i])>4) {
           /*     //echo $myfiles[$i]; */ 
                 $im = $myfiles[$i];
                 $ext = end(explode('.', $im));
               
                if($ext=='php' || $ext=='PHP' || $ext=='phtml' || $ext=='PHTML' ) {
                    ?>
                            <div
                                style="display:inline-flex; width:150px; height:170px; cursor:pointer; margin:10px; border-radius:15px; padding:5px;">

                                <img src='https://newrelic.com/assets/pages/apm/php/php-elephant-logo-bd4f9d83be8c8563248fe4793f90bae7.png'
                                    title="<?php echo $im ?>" onclick="window.open('<?php echo $lx ?>')"
                                    class='imageS_my'
                                    style='width: 150px; height:150px; float:left; margin: 10px; border-radius:6px;'> ";

                                <a href='?delete=<?php echo $im ?>' onclick="return confirm('Are you sure to delete ?')"
                                    style='font-size:26px; color:white;  margin-left: -130px; margin-top:120px; bottom:50px; left:15px;'>
                                    <i class='fa fa-trash' id='delete' title='Delete Image'></i> </a>


                            </div>

                            <?php }
                
                // echo "<a href='?copy=$im' ";
                // echo "<i class='fa fa-clone' id='copy' title='Copy Image' style='font-size:36px; color:white;  margin-left: 0px; margin-top:-50px;'></i> </a>";
            
            } else {
                exit();
            }
        }
        

?>
                        </div>





                        <style>
                        .imageS_my {
                            width: 150px;
                            height: 150px;
                            float: left;
                        }

                        img {
                            width: 150px;
                            height: 150px;
                            float: left;
                        }

                        a {
                            color: white;
                        }

                        #delete {
                            color: red;
                            font-size: 36px;
                        }
                        </style>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>