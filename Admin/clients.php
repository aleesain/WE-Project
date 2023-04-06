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
			            			<h2>All - Clients</h2>
			            		</div>
			            		<div class="col-sm-6 text-right">
			            			<a href="addNewClient.php">
				            		<button type="button" class="btn btn-danger waves-effect">
	                                    <i class="material-icons">business_center</i>
	                                    <span>Add New Client</span>
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
				            				<th>Client Name</th>
				            				<th>Client Email</th>
				            				<th>Cell Number</th>
				            				<th class="text-center">Project</th>
				            				<th>Created</th>
				            				<th>Action</th>
				            			</tr>
				<?php
                    
                        include 'database.php';
                        
                        $sql = "SELECT * FROM clients_tbl";
                     
                        $result = mysqli_query($conn,$sql) or die('Query Fail');
                        $Ser_num=1;
                            while ($row = mysqli_fetch_array($result)) {
                                
                               $clientID = $row['clientID'];
                               $ClientName = $row['ClientName'];
                               $ClientEmail = $row['ClientEmail'];
                               $clientPhone = $row['clientPhone'];
                               $Project_choose = $row['Project_choose'];
                               $CreatedDate = $row['createdDate'];
                               
                ?>
				            			<tr class="">
				            				<td><?php echo $Ser_num; $Ser_num++; ?></td>
				            				<td><?php echo $ClientName; ?></td>
				            				<td><?php echo $ClientEmail; ?></td>
				            				<td><?php echo $clientPhone; ?></td>
				            				<td><?php echo $Project_choose; ?></td>
				            				<td><?php echo $CreatedDate; ?></td>
				            				<td>
					            				<div class="demo-google-material-icon"> 
					            					<a href="Clientedit.php?ClientEdit=<?php echo $clientID; ?>" class="col-blue">
					            							<i class="material-icons">edit</i>
					            					</a>
					            					<a href="Clientdelete.php?ClientDelete=<?php echo $clientID; ?>" class="col-red">
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