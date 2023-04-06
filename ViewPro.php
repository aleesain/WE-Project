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
    <h1 class="text-center  text-white display-3">Project Detail</h1>

</div>

<!--Content Start-->
<div class="container pt-3 pb-5 bg-white">
  <br><br>

    <!--Projects Start-->
        <?php
            
          include 'database.php';
          @$ViewPro_id=$_GET['ViewPro'];
          $sql = "SELECT * FROM projects_tbl WHERE  projectID='$ViewPro_id'";
          
          $result = mysqli_query($conn,$sql) or die('Query Fail');

          
              while ($row = mysqli_fetch_array($result)) {
                  
                 
                 $project_title = $row['project_title'];
                 $project_loc = $row['project_loc'];
                 $project_size = $row['project_size'];
                 $pro_img = $row['pro_img'];
                 $pro_img2 = $row['pro_img2'];
                 $pro_img3 = $row['pro_img3'];
                 $pro_img4 = $row['pro_img4'];
                 $pro_desc  = $row['pro_desc'];
                 $CreatedDate  = $row['CreatedDate'];
                     
            }          
                       
        ?>
<a href="index.php" class="btn btn-sm btn-info">Back To Home</a>
<hr>
     <table class="table table-bordered table-hover">
      <tr>
        <th colspan="2" class="text-center text-white bg-dark">Project Detail</th>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Construction Title</th>
        <td><?php echo $project_title; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Construction Location</th>
        <td><?php echo $project_loc; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">pilot Area Size</th>
        <td><?php echo $project_size; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Construction Description</th>
        <td><?php echo $pro_desc; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Construction Satrt Date</th>
        <td><?php echo $CreatedDate; ?> </td>
      </tr>
    </table>
    <br>
    <div class="row">



         <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\pro_images\<?php echo $pro_img;?>" data-lightbox="mygallery">
                  <img src=".\Admin\pro_images\<?php echo $pro_img;?>" class="card-img" id="p_img" style='height: 250px;'>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\pro_images\<?php echo $pro_img2;?>" data-lightbox="mygallery">
                  <img src=".\Admin\pro_images\<?php echo $pro_img2;?>" class="card-img" id="p_img" style='height: 250px;'>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\pro_images\<?php echo $pro_img3;?>" data-lightbox="mygallery">
                  <img src=".\Admin\pro_images\<?php echo $pro_img3;?>" class="card-img" id="p_img" style='height: 250px;'>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\pro_images\<?php echo $pro_img4;?>" data-lightbox="mygallery">
                  <img src=".\Admin\pro_images\<?php echo $pro_img4;?>" class="card-img" id="p_img" style='height: 250px;'>
                </a>
            </div>
        </div>


       
 
    </div>
    <br>
   
 <!--Projects end-->

</div>

<!--Content Start-->
<br>

<?php include 'footer.php'; ?>




</body>
</html>