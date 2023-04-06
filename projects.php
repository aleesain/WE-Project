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
<div class=" bg-dark" style="background: url(images/9.jpg); background-size: 100% 100%; height: 300px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom: 2px solid black; background-blend-mode:overlay;">
<br><br>
    <h1 class="text-center  text-white display-3">All Projects</h1>

</div>

<!--Content Start-->
<div class="container pt-5 pb-5 bg-white">
  
    <!--Projects Start-->
    <div class="row">

        <?php
            
          include 'database.php';
          
          $sql = "SELECT * FROM projects_tbl";
       
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
                    <p class="card-text"><?php echo $project_loc; ?> 
                      <span class="float-right text-warning"><?php echo $project_size; ?></span>
                    </p>
                  
                      <a href="ViewPro.php?ViewPro=<?php echo $projectID; ?>" class="btn btn-sm btn-dark">View Project Detail</a>
                   
                </div>
            </div>
        </div>

        <?php
            }
        ?>
 
    </div>
 <!--Projects end-->

</div>

<!--Content Start-->
<br>

<?php include 'footer.php'; ?>




</body>
</html>