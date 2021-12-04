<?php require './header.php';

if (isset($_POST['update'])) {
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    if ($user['password'] == $password) {
        $upd = mysqli_query(
            $con,
            "UPDATE `users` SET `name`='$name',`email`='$email',`address`='$address',`phone`='$phone' WHERE `id`='$uid' "
        );
        if ($upd) {
            echo "<script>alert('Update success ! ')</script>";
            echo "<script>location.href='./profile.php'</script>";
        } else {
            echo "<script>alert('Server not responding ! ')</script>";
            echo "<script>location.href='./profile.php'</script>";
        }
    }
}
?>
<title> Edit Profile - <?php echo $com['name']; ?> </title>
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

                    <h5> Change Profile
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
                                    <td> Name</td>
                                    <td><input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                            value="<?php echo $user[
                                                'name'
                                            ]; ?>" required></td>
                                </tr>
                                <tr>
                                    <td> Email </td>
                                    <td><input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email " value="<?php echo $user[
                                                'email'
                                            ]; ?>" required></td>
                                </tr>
                                <tr>
                                    <td> Phone </td>
                                    <td><input type="phone" name="phone" id="phone" class="form-control"
                                            placeholder="Phone " value="<?php echo $user[
                                                'phone'
                                            ]; ?>" required></td>
                                </tr>
                                <tr>
                                    <td> Address </td>
                                    <td><input type="text" name="address" class="form-control" placeholder="Address"
                                            required value="<?php echo $user[
                                                'address'
                                            ]; ?>"></td>
                                </tr>

                                
                                <tr>
                                    <td> Current Password </td>
                                    <td>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Current Password" required>
                                    </td>
                                </tr>


                                <tr>
                                    <td colspan="2">
                                        <center> <input type="submit" name="update" value="Update Profile"
                                                class="btn btn-primary"></center>
                                    </td>
                                </tr>


                            </form>
                        </table>

                    </div>

                </div>

            </div>

        </div>




        <?php require './footer.php'; ?>
