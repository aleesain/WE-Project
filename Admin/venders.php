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
			            			<h2>All - Venders</h2>
			            		</div>
			            		<div class="col-sm-6 text-right">
				            		<a href="addNewVender.php">
					            		<button type="button" class="btn btn-danger waves-effect">
		                                    <i class="material-icons">shopping_basket</i>
		                                    <span>Add New Vender</span>
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
				            				<th>Vender Name</th>
				            				<th>Vender Email</th>
				            				<th>Cell Number</th>
				            				<th class="text-center">Vender Project</th>
				            				<th>Project Images</th>
				            				<th>Description</th>
				            				<th>Action</th>
				            			</tr>
				<?php
                    
                        include 'database.php';
                        
                        $sql = "SELECT * FROM venders_tbl ORDER BY venderID DESC";
                     
                        $result = mysqli_query($conn,$sql) or die('Query Fail');
                        $Ser_num=1;
                            while ($row = mysqli_fetch_array($result)) {
                                
                               $venderID = $row['venderID'];
                               $venderName = $row['venderName'];
                               $venderEmail = $row['venderEmail'];
                               $venderPhone = $row['venderPhone'];
                               $venderProject = $row['venderProject'];
                               $proImg1 = $row['proImg1'];
                               $proImg2 = $row['proImg2'];
                               $proImg3 = $row['proImg3'];
                               $proImg4 = $row['proImg4'];
                               $vederDesc  = $row['vederDesc'];
                              
                               
                ?>
				            			<tr class="">
				            				<td><?php echo $Ser_num; $Ser_num++; ?></td>
				            				<td><?php echo $venderName; ?></td>
				            				<td><?php echo $venderEmail; ?></td>
				            				<td><?php echo $venderPhone; ?></td>
				            				<td><?php echo $venderProject; ?></td>
				            				<td>
				            					
				            					<img src="vender_images\<?php echo $proImg1;?>" width="20px" height="20px" class="img-fluid rounded-circle">
				            					<img src="vender_images\<?php echo $proImg2;?>" width="20px" height="20px" class="img-fluid rounded-circle">
				            					<img src="vender_images\<?php echo $proImg3;?>" width="20px" height="20px" class="img-fluid rounded-circle">
				            					<img src="vender_images\<?php echo $proImg4;?>" width="20px" height="20px" class="img-fluid rounded-circle">
				            					

				            				</td>
				            				<td><?php echo $vederDesc; ?></td>
				            				<td>
					            				<div class="demo-google-material-icon"> 
					            					<!-- <a href="Venderedit.php?VenderEdit=<?php //echo $venderID; ?>" class="col-blue">
					            							<i class="material-icons">edit</i>
					            					</a> -->
					            					<a href="Venderdelete.php?VenderDelete=<?php echo $venderID; ?>" class="col-red">
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