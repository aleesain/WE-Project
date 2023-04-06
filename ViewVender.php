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
    <h1 class="text-center  text-white display-3">Vender Detail</h1>

</div>

<!--Content Start-->
<div class="container pt-3 pb-5 bg-white">
  <

    <!--Projects Start-->
        <?php
            
          include 'database.php';
          @$ViewVender_id=$_GET['ViewVender'];
          $sql = "SELECT * FROM venders_tbl WHERE venderID='$ViewVender_id'";
                     
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
                     $createdDate  = $row['createdDate'];
                     
            }          
                       
        ?>
<a href="index.php" class="btn btn-sm btn-info">Back To Home</a>
<hr>
     <table class="table table-bordered table-hover">
      <tr>
        <th colspan="2" class="text-center text-white bg-dark">Vender Detail</th>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Vender Name</th>
        <td><?php echo $venderName; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Vender Email</th>
        <td><?php echo $venderEmail; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Vender Mobile Number</th>
        <td><?php echo $venderPhone; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Vender Construction</th>
        <td><?php echo $venderProject; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Vender Description</th>
        <td><?php echo $vederDesc; ?> </td>
      </tr>
      <tr>
        <th class="w-25 bg-info text-white">Vender Created Date</th>
        <td><?php echo $createdDate; ?> </td>
      </tr>
    </table>
    <br>
    <div class="row">



         <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\vender_images\<?php echo $proImg1;?>" data-lightbox="mygallery">
                  <img src=".\Admin\vender_images\<?php echo $proImg1;?>" class="card-img" id="p_img" style='height: 250px;'>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\vender_images\<?php echo $proImg2;?>" data-lightbox="mygallery">
                  <img src=".\Admin\vender_images\<?php echo $proImg2;?>" class="card-img" id="p_img" style='height: 250px;'>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\vender_images\<?php echo $proImg3;?>" data-lightbox="mygallery">
                  <img src=".\Admin\vender_images\<?php echo $proImg3;?>" class="card-img" id="p_img" style='height: 250px;'>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
            <div class="card shadow-lg hover-card">
                <a href=".\Admin\vender_images\<?php echo $proImg4;?>" data-lightbox="mygallery">
                  <img src=".\Admin\vender_images\<?php echo $proImg4;?>" class="card-img" id="p_img" style='height: 250px;'>
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