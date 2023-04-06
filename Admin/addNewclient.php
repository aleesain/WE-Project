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
                                Register New Client
                            </h2>
                            
                        <br>
                        <div class="body">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Client Name</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="client_name" class="form-control" placeholder="Enter Client Name" name="client_name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label>Client Email</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" id="client_email" class="form-control" placeholder="Enter Client Email" name="client_email">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Cell Number</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="cel_number" class="form-control" placeholder="Enter Cell Number" name="cel_number">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Select Project</label><br>
                                        <input type="radio" name="project" id="area_size" class="filled-in" value="Area size of construction project">
                                        <label for="area_size"> Area size of construction project </label>

                                        <input type="radio" name="project" id="architecture_planning" class="filled-in" value="Architecture Planning">
                                        <label for="architecture_planning"> Architecture Planning </label>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <input type="radio" name="project" id="elevation_design" class="filled-in" value="Elevation Design">
                                        <label for="elevation_design"> Elevation Design  </label>

                                        <input type="radio" name="project" id="in_ex_design" class="filled-in" value="Interior/Exterior design">
                                        <label for="in_ex_design"> Interior/Exterior design </label>

                                        

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <input type="radio" name="project" id="Map" class="filled-in" value="Map">
                                        <label for="Map"> Map </label>

                                        <input type="radio" name="project" id="complete_construction" class="filled-in" value="Complete construction">
                                        <label for="complete_construction"> Complete construction </label>
                                        
                                    </div>

                                </div>   
                               
                                <br><br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-11">
                                        <input type="submit" name="sub" value="Register Client" class="btn btn-danger btn-block btn-lg">
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

            	if (isset($_POST['sub'])) {

            		$Cname = $_POST['client_name'];
                    $Cemail = $_POST['client_email'];
                    $CNum = $_POST['cel_number'];
                    $cproject = $_POST['project'];
            		

            		$ins_sql = "INSERT INTO clients_tbl(ClientName, ClientEmail, clientPhone, Project_choose, createdDate) VALUES('$Cname', '$Cemail', '$CNum', '$cproject', NOW())";
            			$result = mysqli_query($conn, $ins_sql);
            		if ($result) {
					  echo "
					  	<script>
					  		swal('Good job!', 'Client Inserted!', 'success');
					  		window.open('clients.php','_self');
					  		
					  	</script>
					  ";
					} else {
					 echo "
					  	<script>
					  		swal('Sorry!', 'Client Not Inserted!', 'Error');
					  		
					  		
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