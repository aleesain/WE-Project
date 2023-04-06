<?php include 'head.php'; ?>
<style type="text/css">
	.crd{
		box-shadow: 0px 0px 24px 1px gray;
		padding: 30px; border-radius: 5px;
		
	}
</style>
<body class="theme-red">

	<?php  include 'pageloads.php'; ?>
	<?php  include 'nav.php'; ?>
	<?php  include 'sidenav.php'; ?>
	<section class="content">
        <div class="container-fluid">
           

            <!-- Modules -->
            <div class="row clearfix">

                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card crd">
                        
                            <h2>
                                Register New Vender
                            </h2>
                            
                        <br>
                        <div class="body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Vender Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="vender_name" class="form-control" placeholder="Enter Vender Name" name="vender_name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label>Vender Email</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" id="vender_email" class="form-control" placeholder="Enter Email" name="vender_email">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Vender Phone</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="vender_phone" class="form-control" placeholder="Enter Vender Phone" name="vender_phone">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Vender Project</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="vender_pro" class="form-control" placeholder="Enter Vender Project" name="vender_pro">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Image 1</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="img1" class="form-control">
                                            </div>
                                        </div>

                                        <label>Image 2</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="img2" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Image 3</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="img3" class="form-control">
                                            </div>
                                        </div>

                                        <label>Image 4</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="img4" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <label>Vender Description</label>
                                        <textarea class="form-control" name="vender_desc" placeholder="Write About Project......"></textarea>
                                    </div>
                                </div>   
                               
                                <br><br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-11">
                                        <input type="submit" name="sub" value="Register Vender" class="btn btn-danger btn-block btn-lg">
                                    </div>
                                    <div class="col-sm-12 col-md-1">
                                        <button class="btn btn-lg">
                                            <a href="venders.php" class="col-gray">Cancel</a>
                                        </button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            <!-- #END# Modules -->
            
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

                    move_uploaded_file($tmp_img1,"vender_images/$img1");
                    move_uploaded_file($tmp_img2,"vender_images/$img2");
                    move_uploaded_file($tmp_img3,"vender_images/$img3");
                    move_uploaded_file($tmp_img4,"vender_images/$img4");

            		$ins_sql = "INSERT INTO venders_tbl(venderName,venderEmail,venderPhone,venderProject,proImg1,proImg2,proImg3,proImg4,vederDesc,createdDate) VALUES('$vender_name', '$vender_email', '$vender_phone', '$vender_pro', '$img1', '$img2', '$img3', '$img4', '$vender_desc', NOW())";

            			$result = mysqli_query($conn, $ins_sql);

            		if ($result) {
					  echo "
					  	<script>
					  		swal('Good job!', 'Vender Inserted!', 'success');
					  		window.open('venders.php','_self');
					  		
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

            
        </div>
    </section>
	<?php include 'footerlab.php'; ?>
</body>
</html>