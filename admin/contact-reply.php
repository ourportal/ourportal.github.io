<?php require './header.php';

$cid = $_GET['cid'];

$a = mysqli_query(
    $con,
    "SELECT * FROM `contacts` WHERE `id`='$cid' and `status`!='Deleted' order by id desc "
);
$contact = mysqli_fetch_array($a);
if ($contact < 1) {
    echo "<script>location.href='./contact.php'</script>";
}


	

?>

<title>Reply - <?php echo $com['name']; ?></title>


<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Contacts </h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"> <?php echo $contact[
                                'title'
                            ]; ?> </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ grid ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5> <?php echo $contact['title']; ?> </h5>
                    </div>
                    <div class="card-body">

					<p> <?php echo strip_tags(
                            $contact['description']
                        ); ?> </p>

						<br><br>
                        <table class="table_ok">
                            <tr>
                                <td> Sender name </td>
                                <td> <?php echo $contact['name'] ?> </td>
                            </tr>
                            <tr>
                                <td> Sender email </td>
                                <td> <a href="mailto:<?php echo $contact['sender'] ?>"><?php echo $contact['sender'] ?>  </a></td>
                            </tr>
                            <tr>
                                <td> Sender phone </td>
                                <td> <a href="tel:<?php echo $contact['phone'] ?>"><?php echo $contact['phone'] ?>  </a></td>
                            </tr>
                            <tr>
                                <td> Date </td>
                                <td> <?php echo $contact['date'] ?> </td>
                            </tr>
                            <tr>
                                <td> Time </td>
                                <td> <?php echo $contact['time'] ?> </td>
                            </tr>
                        </table>

                       



                        <br>
<!-- 
                        <h4>Leave a reply </h4>
                        <hr>
                        <form action="" method="post">
                            <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"
                                placeholder="Ener your reply here .."></textarea> <br>
                            <input type="submit" value="Reply" class="btn btn-primary w-100">
                        </form> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
	.table_ok {
		padding:5px;
		right:10px;
		 

	}
	.table_ok tr td {
		padding: 7px;
		border:1px solid #333
	}
</style>
<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<!-- prism Js -->
<script src="assets/js/plugins/prism.js"></script>


</body>

</html>