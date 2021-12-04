<?php require './admin_header.php';

    if(isset($_POST['update'])) {
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $con_password = $_POST['con_password'];

            if($user['password']==$old_password) {
                if($new_password == $con_password) {
                    $upd = mysqli_query($con,"UPDATE `users` SET `password`='$new_password' WHERE `id`='$uid' ");
                        if($upd) {
                            echo "<script>alert('Update success ! ')</script>";
                            echo "<script>location.href='./change-password.aspx'</script>";

                        } else {
                            echo "<script>alert('Server not responding ! ')</script>";
                            echo "<script>location.href='./change-password.aspx'</script>";
                        }
                }
            } else {
                echo "<script>alert('Wrong password ! ')</script>";
                echo "<script>location.href='./change-password.aspx'</script>";
            }
    }


?>
<title>Change Password - <?php echo $com['name'] ?></title>
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
                                <a href="index.aspx">
                                    <i class="feather icon-home">
                                    </i>
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="#">
                                    Change marchent password
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

                    <h5> Change Password 
                    </h5>

                    <div class="card-header-right">

                        <div class="btn-group card-option">

                            
                          
                        </div>

                    </div>

                </div>

                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover mb-0">
                            <form action="" method="post">
                                <tr>
                                    <td>Current password</td>
                                    <td><input type="password" name="old_password" id="old_password" class="form-control" placeholder="Current password" required ></td> 
                                </tr>
                                <tr>
                                    <td>New password</td>
                                    <td><input type="password" name="new_password" id="new_password" class="form-control" placeholder="New password" required ></td> 
                                </tr>
                                <tr>
                                    <td> Confirm password</td>
                                    <td><input type="password" name="con_password" id="con_password" class="form-control" placeholder="Confirm password" required ></td> 
                                </tr>

                                <tr>
                                    <td colspan="2">
                                      <center>  <input type="submit"  name="update" value="Update Password" class="btn btn-primary"></center>
                                    </td>
                                </tr>


                            </form>
                        </table>

                    </div>

                </div>

            </div>

        </div>




        <?php require './admin_footer.php'; ?>