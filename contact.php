<?php require "./header.php"; 

date_default_timezone_set('Asia/Kolkata');
$date = date("d-M-Y");
$ddate = date("dmYhis");
$time = date("h:i A");


    if(isset($_POST['comment'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $description = str_replace("<"," ",str_replace("'"," ",$_POST['message']));
        $title = str_replace("<"," ",str_replace("'"," ",$_POST['title']));

            $ins = mysqli_query($con,"INSERT INTO `contacts` SET `name`='$name', `description`='$description',`sender`='$email',`date`='$date',`time`='$time',`phone`='$phone',`title`='$title' "); 
                if($ins) {
                    echo "<script>alert('Thanks for contact with us. ')</script>";
                }
    }

?>
<title>Contact Us - <?php echo $com['name'] ?></title>
<!-- Content -->
<div id="content">

    <!-- Linking -->
    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>

    <!-- Contact -->
    <section class="contact-sec padding-top-40 padding-bottom-80">
        <div class="container">

            <!-- MAP -->
            <section class="map-block margin-bottom-40" style="height:350px;">
            <iframe src="https://www.google.com/maps?q=<?php echo str_replace(" ","+",$com['address']) ?>&output=embed" frameborder="0" style="height: 100%; width:100%; padding-left:15px; padding-right: 15px;"></iframe> 
               
            </section>

            <!-- Conatct -->
            <div class="contact">
                <div class="contact-form">
                    <!-- FORM  -->
                    <form role="form" id="contact_form" class="contact-form" method="post" >
                        <div class="row">
                            <div class="col-md-8">

                                <!-- Payment information -->
                                <div class="heading">
                                    <h2>Dou You have a Question for Us ?</h2>
                                </div>
   
                                <ul class="row">
                                    <li class="col-sm-6">
                                        <label> Name
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name">
                                        </label>
                                    </li>
                                    <li class="col-sm-6">
                                        <label> Email
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email">
                                        </label>
                                    </li>
                                    
                                    
                                    <li class="col-sm-6">
                                        <label> Phone no.
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                placeholder="Mobile no.">
                                        </label>
                                    </li>
                                    <li class="col-sm-6">
                                        <label> Subject
                                            <input type="text" class="form-control" name="title" id="title"
                                                placeholder="Subject">
                                        </label>
                                    </li>
                                    
                                    
                                    
                                    <li class="col-sm-12">
                                        <label>Message
                                            <textarea class="form-control" name="message" id="message" rows="5"
                                                placeholder="Message"></textarea>
                                        </label>
                                    </li>
                                    <li class="col-sm-12 no-margin">
                                        <input type="submit" value="Submit" name="comment" class="btn-round"   >  
                                    </li>
                                </ul>
                            </div>
</form>
                            <!-- Conatct Infomation -->
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <h5> <?php echo $com['name'] ?></h5>
                                    <!-- <p>The most powerful PSD for Digital & Electronic!</p> -->
                                    <hr>
                                    <h6> Address:</h6>
                                    <p> <?php echo $com['address'] ?> </p>
                                    <h6>Phone:</h6>
                                    <p><?php echo $com['phone'] ?></p>
                                      <h6>Email:</h6>
                                    <p> <?php echo $com['email'] ?></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>





    <?php require "./footer.php" ?>