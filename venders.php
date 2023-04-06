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
<div class=" bg-dark" style="background: url(images/6.jpg); background-size: 100% 100%; height: 300px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom: 2px solid black; background-blend-mode:overlay;">
<br><br>
    <h1 class="text-center  text-white display-3">All Venders</h1>

</div>

<!--Content Start-->
<div class="container pt-5 pb-5 bg-white">
 
    <!--Projects Start-->
    <div class="row">

        <?php
            
          include 'database.php';
          
          $sql = "SELECT * FROM venders_tbl";
                     
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
                    <p class="card-text"><?php echo $venderPhone; ?> 
                      <span class="float-right text-warning"><?php echo $venderProject; ?></span>
                    </p>
              
                      <a href="ViewVender.php?ViewVender=<?php echo $venderID; ?>" class="btn btn-sm btn-dark">View Vender Detail</a>
                  
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