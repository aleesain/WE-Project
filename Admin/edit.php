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
                                Update User Details
                            </h2>
                            
                        <br>
                        <div class="body">
                        	<?php
                        		include 'database.php';
	                        	@$edit_id=$_GET['Edit'];
								$sql = "SELECT * FROM user_tbl WHERE userID='$edit_id'";
                     
	                        	$result = mysqli_query($conn,$sql) or die('Query Fail');
	                        
	                            while ($row = mysqli_fetch_array($result)) {
	                                
	                               $user_id = $row['userID'];
	                               $firstNameu = $row['UserFirstName'];
	                               $lastNameu = $row['UserLastName'];
	                               $fullNameu = $row['UserFullName'];
	                               $userEmailu = $row['UserEmail'];
	                               $userpassu = $row['UserPass'];
	                               
	                               }
	                               
	                		?>	

                            <form method="post" action="edit.php?edit_form=<?php echo $user_id; ?>">

                                <div class="row">

                                    <div class="col-sm-12 col-md-6">

                                        <label>First Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="first_name" class="form-control" placeholder="Enter First Name" name="first_nameu" value="<?php echo $firstNameu; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        
                                        <label>Last Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="last_name" class="form-control" placeholder="Enter Last Name" name="last_nameu" value="<?php echo $lastNameu; ?>">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-12 col-md-6">

                                        <label>Full Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="full_name" class="form-control" placeholder="Enter Full Name" name="full_nameu" value="<?php echo $fullNameu; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        
                                        <label>Email</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email" class="form-control" placeholder="Enter Email" name="emailu" value="<?php echo $userEmailu; ?>">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-12 col-md-6">

                                        <label>Password</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" id="pass" class="form-control" placeholder="Enter password" name="passu">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        
                                        <label>Status</label><br>
                                        <input type="radio" name="statusu" id="sup_admin" class="filled-in" value="1">
                                        <label for="sup_admin"> Super Admin </label>
                                        <input type="radio" name="statusu" id="user" class="filled-in" value="0">
                                        <label for="user"> User</label>

                                    </div>

                                </div>
                                
                               
                                <br><br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-11">
                                        <input type="submit" name="update" value="Update" class="btn btn-danger btn-block btn-lg">
                                    </div>
                                    <div class="col-sm-12 col-md-1">
                                        <button class="btn btn-lg">
                                            <a href="users.php" class="col-gray">Cancel</a>
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

            	if (isset($_POST['update'])) {
            		$edit_record1=$_GET['edit_form'];
            		$fnameu = $_POST['first_nameu'];
            		$lnameu = $_POST['last_nameu'];
            		$fulnameu = $_POST['full_nameu'];
            		$emailu = $_POST['emailu'];
            		$upassu = md5($_POST['passu']);
            		$statusu = $_POST['statusu'];

            		$up_query="UPDATE user_tbl SET UserFirstName = '$fnameu', UserLastName = '$lnameu', UserFullName = '$fulnameu', UserEmail = '$emailu', userRole='$statusu', UserPass='$upassu', LastModifiedDate=NOW() WHERE userID='$edit_record1'";
		
            		$result_up = mysqli_query($conn, $up_query);
            		if ($result_up) {
					  echo "
					  	<script>
					  		// swal('Good job!', 'Record Updated!', 'success');
					  		window.open('users.php','_self');
					  		
					  	</script>
					  ";
					} else {
					 echo "
					  	<script>
					  		swal('Sorry!', 'Record Not Updated!', 'Error');
					  		
					  		
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