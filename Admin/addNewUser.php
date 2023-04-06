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
                                Register New User
                            </h2>
                            
                        <br>
                        <div class="body">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>First Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="first_name" class="form-control" placeholder="Enter First Name" name="first_name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label>Last Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="last_name" class="form-control" placeholder="Enter Last Name" name="last_name">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Full Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="full_name" class="form-control" placeholder="Enter Full Name" name="full_name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Email</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email" class="form-control" placeholder="Enter Email" name="email">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Password</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" id="pass" class="form-control" placeholder="Enter password" name="pass">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Status</label><br>
                                        <input type="radio" name="status" id="sup_admin" class="filled-in" value="1">
                                        <label for="sup_admin"> Super Admin </label>
                                        <input type="radio" name="status" id="user" class="filled-in" value="0">
                                        <label for="user"> User</label>
                                        
                                    </div>

                                </div>   
                               
                                <br><br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-11">
                                        <input type="submit" name="sub" value="Register" class="btn btn-danger btn-block btn-lg">
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

            	if (isset($_POST['sub'])) {

            		$fname = $_POST['first_name'];
            		$lname = $_POST['last_name'];
            		$fulname = $_POST['full_name'];
            		$email = $_POST['email'];
            		$upass = md5($_POST['pass']);
            		$status = $_POST['status'];

            		$ins_sql = "INSERT INTO user_tbl(UserFirstName,UserLastName,UserFullName,UserEmail,userRole, 	UserPass,CreatedDate) VALUES('$fname', '$lname', '$fulname', '$email', '$status', '$upass', NOW())";
            			$result = mysqli_query($conn, $ins_sql);
            		if ($result) {
					  echo "
					  	<script>
					  		swal('Good job!', 'Record Inserted!', 'success');
					  		window.open('users.php','_self');
					  		
					  	</script>
					  ";
					} else {
					 echo "
					  	<script>
					  		swal('Sorry!', 'Record Not Inserted!', 'Error');
					  		
					  		
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