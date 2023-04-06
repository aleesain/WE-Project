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
			            			<h2>All - Projects</h2>
			            		</div>
			            		<div class="col-sm-6 text-right">
				            		<a href="addNewPro.php">
					            		<button type="button" class="btn btn-danger waves-effect">
		                                    <i class="material-icons">folder</i>
		                                    <span>Add New Project</span>
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
				            				<th>Project Title</th>
				            				<th>Location</th>
				            				<th>Area Size</th>
				            				<th>Images</th>
				            				<th>Description</th>
				            				<th>Created</th>
				            				<th>Action</th>
				            			</tr>
				<?php
                    
                        include 'database.php';
                        
                        $sql = "SELECT * FROM projects_tbl ORDER BY projectID DESC";
                     
                        $result = mysqli_query($conn,$sql) or die('Query Fail');
                        $Ser_num=1;
                            while ($row = mysqli_fetch_array($result)) {
                                
                               $projectID = $row['projectID'];
                               $project_title = $row['project_title'];
                               $project_loc = $row['project_loc'];
                               $project_size = $row['project_size'];
                               $pro_img = $row['pro_img'];
                               $pro_img2 = $row['pro_img2'];
                               $pro_img3 = $row['pro_img3'];
                               $pro_img4 = $row['pro_img4'];
                               $pro_desc  = $row['pro_desc'];
                               $CreatedDate  = $row['CreatedDate'];
                              
                               
                ?>
				            			<tr class="">
				            				<td><?php echo $Ser_num; $Ser_num++; ?></td>
				            				<td><?php echo $project_title; ?></td>
				            				<td><?php echo $project_loc; ?></td>
				            				<td><?php echo $project_size; ?></td>
				            				<td>
				            					
				            					<img src="pro_images/<?php echo $pro_img;?>" width="20px" height="20px" class="img-fluid rounded-circle">
				            					<img src="pro_images/<?php echo $pro_img2;?>" width="20px" height="20px" class="img-fluid rounded-circle">
				            					<img src="pro_images/<?php echo $pro_img3;?>" width="20px" height="20px" class="img-fluid rounded-circle">
				            					<img src="pro_images/<?php echo $pro_img4;?>" width="20px" height="20px" class="img-fluid rounded-circle">
				            					

				            				</td>
				            				<td><?php echo $pro_desc; ?></td>
				            				<td><?php echo $CreatedDate; ?></td>
				            				<td>
					            				<div class="demo-google-material-icon"> 
					            					<a href="Proedit.php?ProEdit=<?php echo $projectID; ?>" class="col-blue">
					            							<i class="material-icons">edit</i>
					            					</a>
					            					<a href="Prodelete.php?ProDelete=<?php echo $projectID; ?>" class="col-red">
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