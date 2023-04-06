<!DOCTYPE html>
<html>

<?php 
    
    include 'header.php'; 

?>
<title>CWMS</title>

<body class="">
<?php include 'navbar.php'; ?>
<div class=" bg-dark" style="background: url(images/7.jpg); background-size: 100% 100%; height: 300px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom: 2px solid black; background-blend-mode:overlay;">
<br><br>
    <h1 class="text-center  text-white display-3">Register Venders</h1>

</div>

<!--Content Start-->
<div class="container pt-2 pb-5 bg-white">
  <br><br>
  <form method="post" action="#" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-6">

							<label>Vender Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="vender_name" class="form-control" placeholder="Enter Vender Name" name="vender_name" required>
                                </div>
                            </div>

                            <label>Vender Phone</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="vender_phone" class="form-control" placeholder="Enter Vender Phone" name="vender_phone" required>
                                </div>
                            </div>

                            <label>Image 1</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="img1" required>
                                </div>
                            </div>

                            <label>Image 2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="img2" required>
                                </div>
                            </div>

						</div>
						<div class="col-sm-6">

							<label>Vender Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" id="vender_email" class="form-control" placeholder="Enter Email" name="vender_email" required>
                                </div>
                            </div>

                            <label>Vender Project</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="vender_pro" class="form-control" placeholder="Enter Vender Project" name="vender_pro" required>
                                </div>
                            </div>

                             <label>Image 3</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="img3" required>
                                </div>
                            </div>

                            <label>Image 4</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="img4" required>
                                </div>
                            </div>

							
						</div>
						<div class="col-sm-12 col-md-12">
                            <label>Vender Description</label>
                            <textarea class="form-control" name="vender_desc" placeholder="Write About Project......" required></textarea>
                        </div>
						<div class="col-sm-12">
							<br>
							<input type="submit" name="sub" value="Register Vender" class="btn btn-dark btn-md">
							
						</div>
					</div>
				</form>

</div>

<!--Content Start-->
<br>

<?php include 'footer.php'; ?>




</body>
</html>





<?php
            	include 'database.php';

            	if (isset($_POST['sub'])) {

            		$vender_name = $_POST['vender_name'];
            		$vender_email = $_POST['vender_email'];
            		$vender_phone = $_POST['vender_phone'];
            		$vender_pro = $_POST['vender_pro'];
            		$vender_desc = $_POST['vender_desc'];

                    $img1=$_FILES['img1']['name'];
                    $tmp_img1=$_FILES['img1']['tmp_name'];

                    $img2=$_FILES['img2']['name'];
                    $tmp_img2=$_FILES['img2']['tmp_name'];

                    $img3=$_FILES['img3']['name'];
                    $tmp_img3=$_FILES['img3']['tmp_name'];

                    $img4=$_FILES['img4']['name'];
                    $tmp_img4=$_FILES['img4']['tmp_name'];

                    move_uploaded_file($tmp_img1,"Admin/vender_images/$img1");
                    move_uploaded_file($tmp_img2,"Admin/vender_images/$img2");
                    move_uploaded_file($tmp_img3,"Admin/vender_images/$img3");
                    move_uploaded_file($tmp_img4,"Admin/vender_images/$img4");

            		$ins_sql = "INSERT INTO venders_tbl(venderName,venderEmail,venderPhone,venderProject,proImg1,proImg2,proImg3,proImg4,vederDesc,createdDate) VALUES('$vender_name', '$vender_email', '$vender_phone', '$vender_pro', '$img1', '$img2', '$img3', '$img4', '$vender_desc', NOW())";

            			$result = mysqli_query($conn, $ins_sql);

            		if ($result) {
					  echo "
					  	<script>
					  		swal('Good job!', 'Vender Inserted!', 'success');
					  		
					  		
					  	</script>
					  ";
					} else {
					 echo "
					  	<script>
					  		swal('Sorry!', 'Vender Not Inserted!', 'Error');
					  		
					  		
					  	</script>

					  ";
					 
					}
            		
            	}

            ?>