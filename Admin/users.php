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

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card  shadow crd">
                    	<div class="block-header">
			            	<div class="row">
			            		<div class="col-sm-6">
			            			<h2>All - Users</h2>
			            		</div>
			            		<div class="col-sm-6 text-right">
			            			<a href="addNewUser.php">
				            		<button type="button" class="btn btn-danger waves-effect">
	                                    <i class="material-icons">person_add</i>
	                                    <span>Add New User</span>
	                                </button>
	                            </a>
			            		</div>
			            	</div>

			            	<br>
			            	<div class="row">
			            		<div class="col-sm-12">
			            			<table class="table table-striped table-hover">
				            			<tr class="bg-black text-center" align="center">
				            				<th>S-NO</th>
				            				<th>First Name</th>
				            				<th>Last Name</th>
				            				<th>Full Name</th>
				            				<th>Email</th>
				            				<th>Created</th>
				            				<th>Last Modified</th>
				            				<th>Status</th>
				            				<th>Action</th>
				            			</tr>
				<?php
                    
                        include 'database.php';
                        
                        $sql = "SELECT * FROM user_tbl";
                     
                        $result = mysqli_query($conn,$sql) or die('Query Fail');
                        $Ser_num=1;
                            while ($row = mysqli_fetch_array($result)) {
                                
                               $user_id = $row['userID'];
                               $firstName = $row['UserFirstName'];
                               $lastName = $row['UserLastName'];
                               $fullName = $row['UserFullName'];
                               $userEmail = $row['UserEmail'];
                               $userRole = $row['userRole'];
                               $CreatedDate = $row['CreatedDate'];
                               $LastModifiedDate = $row['LastModifiedDate'];
                               
                ?>
				            			<tr class="">
				            				<td><?php echo $Ser_num; $Ser_num++; ?></td>
				            				<td><?php echo $firstName; ?></td>
				            				<td><?php echo $lastName; ?></td>
				            				<td><?php echo $fullName; ?></td>
				            				<td><?php echo $userEmail; ?></td>
				            				<td><?php echo $CreatedDate; ?></td>
				            				<td><?php echo $LastModifiedDate; ?></td>
				            				<td><?php echo $userRole; ?></td>
				            				<td>
					            				<div class="demo-google-material-icon"> 
					            					<a href="edit.php?Edit=<?php echo $user_id; ?>" class="col-blue">
					            							<i class="material-icons">edit</i>
					            					</a>
					            					<a href="delete.php?Delete=<?php echo $user_id; ?>" class="col-red">
					            							<i class="material-icons">delete</i>
					            					</a>
					            				</div>
				            				</td>
				            			</tr>
				<?php
				            }
                            
                       
                ?>
			            			</table>
			            		</div>
			            	</div>

			               
			            </div>
                    </div>
                </div>
                
            </div>
            <!-- #END# Modules -->
            

            
        </div>
    </section>
	<?php include 'footerlab.php'; ?>
</body>
</html>