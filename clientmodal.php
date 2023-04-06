<!DOCTYPE html>
<html>
<head>
	<title>Client Modal</title>
</head>
<body>

<!DOCTYPE html>
<html>

<?php 
    
    include 'header.php'; 

?>
<title>CWMS</title>

<body class="">
<?php include 'navbar.php'; ?>
<div class="bg-dark" style="background: url(images/7.jpg); background-size: 100% 100%; height: 300px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom: 2px solid black; background-blend-mode:overlay;">
<br><br>
    <h1 class="text-center  text-white display-3">Register Client</h1>

</div>

<!--Content Start-->
<div class="container pt-2 pb-5 bg-white">
  <br><br>
  <form method="post" action="#">
					<div class="row">
						<div class="col-sm-6">

							<label>Client Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="client_name" class="form-control" placeholder="Enter Client Name" name="client_name" required>
                                </div>
                            </div>

                            <label>Cell Number</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="cel_number" class="form-control" placeholder="Enter Cell Number" name="cel_number" required>
                                </div>
                            </div>

						</div>
						<div class="col-sm-6">

							<label>Client Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" id="client_email" class="form-control" placeholder="Enter Client Email" name="client_email" required>
                                </div>
                            </div>

                            <label>Select Project</label>
                            <div class="form-group">
                            	<select class="form-control" name="project" required>
                            		<option>Select Project</option>
                            		<option value="Area size of construction project">Area size of construction project</option>
                            		<option value="Architecture Planning">Architecture Planning</option>
                            		<option value="Elevation Design">Elevation Design</option>
                            		<option value="Interior/Exterior design">Interior/Exterior design</option>
                            		<option value="Map">Map</option>
                            		<option value="Complete construction">Complete construction</option>
                            	</select>
                            </div>

						</div>

						<div class="col-sm-12">
							<br>
							<input type="submit" name="sub" value="Register Client" class="btn btn-dark text-white btn-md">
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
