<?php require './header.php';

    if(isset($_GET['del'])) {
        $del = $_GET['del']; 
        $d = mysqli_query($con,"UPDATE `contacts` SET `status`='Deleted' WHERE `id`='$del' ");
        if($d) {
            echo "<script>alert('Contact deleted ! ')</script>"; 
            echo "<script>location.href='./contact.php'</script>"; 

        }
    }

?>

<title> All Contacts - <?php echo $com['name'] ?> </title>
<div class="pcoded-main-container">

    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">

                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10"> All Contacts 
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
                                    Contacts analytics
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

                    <h5>All Contacts
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
                                        Title </th>

                                   
                                   
                                    <th style="max-width:550px;"> Description </th>

                             
                                   


                                    <th class="text-right"> Action
                                    </th>

                                </tr>

                            </thead>

                            <tbody>


<?php $p = mysqli_query($con,"SELECT * FROM `contacts` WHERE `status`!='Deleted' order by id desc "); 
    $i = 1; 
    while($contact = mysqli_fetch_array($p)){
    ?>

                                <tr>

                                    <td>

                                        <div class="chk-option">
                                            <?php echo $i ?>

                                        </div>

                                        <div class="d-inline-block align-middle">
                                        <?php echo substr($contact['title'],0,30) ?> 
                                            <br>
                                            <sub> <?php echo $contact['name'] ?>  &nbsp;   <i class="feather icon-clock"></i> 
                                            <?php echo $contact['time'] ?>  &nbsp; &nbsp; <i class="feather icon-calendar"></i>  <?php echo $contact['date'] ?>   </sub>

                                            <div class="d-inline-block">

                                               
                                                <!-- <p class="text-muted m-b-0">Graphics Designer
                                                </p> -->

                                            </div>

                                        </div>

                                    </td>

                                    
                                    <td style="max-width:350px; border-left:1px solid #333">  <?php echo substr(strip_tags($contact['description']),0,30) ?>  </td>

                                    <!--<td style="max-width:350px; border-left:1px solid #333"> <?php // echo substr(strip_tags($contact['reply']),0,30) ?>-->
                                    <!--</td>-->

                                    <td class="text-right">
                                    
                                   
                                     <a href="contact-reply.php?cid=<?php echo $contact['id'] ?>" class="btn btn-warning" title="View"><i class="feather icon-eye"></i></a>
                                    
                                         <a href="?del=<?php echo $contact['id'] ?>" class="btn btn-danger" onclick="return confirm('This product will delete ')" ><i class="feather icon-delete"></i></a>
                                      
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