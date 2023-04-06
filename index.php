<!DOCTYPE html>
<html>

<?php 
    
    include 'header.php'; 

?>
<title>CWMS</title>
<style>

.hover-card{
  transition: 0.5s;
 
}
.hover-card:hover{
  transition: 0.5s;
  transform: scale(1.05);
}

</style>
<body class="">
<?php include 'navbar.php'; ?>
<?php include 'imgslider.php'; ?>





<!--Content Start-->
<div class="container pt-5 pb-5 bg-white">
  
    <h1 class="text-center font-weight-bold">Our Projects</h1>
    <br><br>
    <!--Projects Start-->
    <div class="row">

        <?php
            
          include 'database.php';
          
          $sql = "SELECT * FROM projects_tbl order by rand() LIMIT 0,8";
       
          $result = mysqli_query($conn,$sql) or die('Query Fail');
          
              while ($row = mysqli_fetch_array($result)) {
                  
                 $projectID = $row['projectID'];
                 $project_title = $row['project_title'];
                 $project_loc = $row['project_loc'];
                 $project_size = $row['project_size'];
                 $pro_img = $row['pro_img'];
                     
                      
                       
        ?>

         <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\pro_images\<?php echo $pro_img;?>" data-lightbox="mygallery">
                  <img src=".\Admin\pro_images\<?php echo $pro_img;?>" class="card-img" id="p_img" style='height: 150px;'>
                </a>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $project_title; ?></h4>
                    <p class="card-text">Location: <?php echo $project_loc; ?> </p>
                    <p class="text-warning">Constructed Area: <?php echo $project_size; ?></p>
                    
                      <a href="ViewPro.php?ViewPro=<?php echo $projectID; ?>" class="btn btn-sm btn-dark">View Project Detail</a>
                
                </div>
            </div>
        </div>

        <?php
            }
        ?>
 
    </div>
 <!--Projects end-->
<br><br>
 <h1 class="text-center font-weight-bold">Venders Projects</h1>
<br><br>
    <!--Venders Start-->

        <div class="row">

        <?php
            
          include 'database.php';
          
          $sql = "SELECT * FROM venders_tbl order by rand() LIMIT 0,8";
                     
            $result = mysqli_query($conn,$sql) or die('Query Fail');
            
                while ($row = mysqli_fetch_array($result)) {
                    
                   $venderID = $row['venderID'];
                   $venderName = $row['venderName'];
                   $venderPhone = $row['venderPhone'];
                   $venderProject = $row['venderProject'];
                   $proImg1 = $row['proImg1'];
                   
                     
                      
                       
        ?>

         <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\vender_images\<?php echo $proImg1;?>" data-lightbox="mygallery">
                  <img src=".\Admin\vender_images\<?php echo $proImg1;?>" class="card-img" id="p_img" style='height: 150px;'>
                </a>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $venderName; ?></h4>
                    <p class="card-text"><?php echo $venderPhone; ?> </p>
                      <p>
                        <span class=" text-warning"><?php echo $venderProject; ?></span>
                      </p>
                      <a href="ViewVender.php?ViewVender=<?php echo $venderID; ?>" class="btn btn-sm btn-dark">View Vender Detail</a>
                  
                </div>
            </div>
        </div>

        <?php
            }
        ?>


</div>

    <!--Venders end-->


</div>

<!--Content Start-->
<br>

<?php include 'footer.php'; ?>




</body>
</html>