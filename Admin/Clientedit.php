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
	                        	@$Cedit_id=$_GET['ClientEdit'];
								$sql = "SELECT * FROM clients_tbl WHERE  clientID='$Cedit_id'";
                     
	                        	$result = mysqli_query($conn,$sql) or die('Query Fail');
	                        
	                            while ($row = mysqli_fetch_array($result)) {
	                                
	                               $clientID = $row['clientID'];
                                   $EClientName = $row['ClientName'];
                                   $EClientEmail = $row['ClientEmail'];
                                   $EclientPhone = $row['clientPhone'];
                                  
                                  
	                               
	                               }
	                               
	                		?>	

                            <form method="post" action="Clientedit.php?cedit_form=<?php echo $clientID; ?>">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Client Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="client_name" class="form-control" placeholder="Enter Client Name" name="eclient_name" value="<?php echo $EClientName; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label>Client Email</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" id="eclient_email" class="form-control" placeholder="Enter Client Email" name="eclient_email" value="<?php echo $EClientEmail; ?>">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Cell Number</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="ecel_number" class="form-control" placeholder="Enter Cell Number" name="ecel_number" value="<?php echo $EclientPhone; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Select Project</label><br>
                                        <input type="radio" name="eproject" id="area_size" class="filled-in" value="Area size of construction project">
                                        <label for="area_size"> Area size of construction project </label>

                                        <input type="radio" name="eproject" id="architecture_planning" class="filled-in" value="Architecture Planning">
                                        <label for="architecture_planning"> Architecture Planning </label>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <input type="radio" name="eproject" id="elevation_design" class="filled-in" value="Elevation Design">
                                        <label for="elevation_design"> Elevation Design  </label>

                                        <input type="radio" name="eproject" id="in_ex_design" class="filled-in" value="Interior/Exterior design">
                                        <label for="in_ex_design"> Interior/Exterior design </label>

                                        

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <input type="radio" name="eproject" id="Map" class="filled-in" value="Map">
                                        <label for="Map"> Map </label>

                                        <input type="radio" name="eproject" id="complete_construction" class="filled-in" value="Complete construction">
                                        <label for="complete_construction"> Complete construction </label>
                                        
                                    </div>

                                </div>   
                               
                                <br><br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-11">
                                        <input type="submit" name="update" value="Update Client" class="btn btn-danger btn-block btn-lg">
                                    </div>
                                    <div class="col-sm-12 col-md-1">
                                        <button class="btn btn-lg">
                                            <a href="clients.php" class="col-gray">Cancel</a>
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
            		$cedit_record1=$_GET['cedit_form'];
            		$eclient_name = $_POST['eclient_name'];
            		$eclient_email = $_POST['eclient_email'];
                    $ecel_number = $_POST['ecel_number'];
                    $eproject = $_POST['eproject'];
            		

            		$up_query="UPDATE clients_tbl SET ClientName='$eclient_name', ClientEmail ='$eclient_email', clientPhone='$ecel_number', Project_choose='$eproject', LastModifiedDate=NOW() WHERE clientID='$cedit_record1'";
		
            		$result_up = mysqli_query($conn, $up_query);
            		if ($result_up) {
					  echo "
					  	<script>
					  		// swal('Good job!', 'Client Updated!', 'success');
					  		window.open('clients.php','_self');
					  		
					  	</script>
					  ";
					} else {
					 echo "
					  	<script>
					  		swal('Sorry!', 'Client Not Updated!', 'Error');
					  		
					  		
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