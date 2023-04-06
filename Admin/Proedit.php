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
                                Update Project
                            </h2>
                            
                        <br>
                        <div class="body">
                            <?php
                                include 'database.php';
                                @$proedit_id=$_GET['ProEdit'];
                                $sql = "SELECT * FROM projects_tbl WHERE  projectID='$proedit_id'";
                     
                                $result = mysqli_query($conn,$sql) or die('Query Fail');
                                while ($row = mysqli_fetch_array($result)) {
                                    
                                   $eprojectID = $row['projectID'];
                                   $eproject_title = $row['project_title'];
                                   $eproject_loc = $row['project_loc'];
                                   $eproject_size = $row['project_size'];
                                   $epro_desc  = $row['pro_desc'];
                                   
                                }
                                   
                            ?>
                            <form method="post" action="Proedit.php?proedit_form=<?php echo $eprojectID; ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Project Title</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="epro_title" class="form-control" placeholder="Enter Project Title" name="epro_title" value="<?php echo $eproject_title;?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label>Project Location</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="epro_loc" class="form-control" placeholder="Enter Project Location" name="epro_loc" value="<?php echo $eproject_loc;?>">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Project Area Size</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="epro_area" class="form-control" placeholder="Enter Project Area" name="epro_area" value="<?php echo $eproject_size; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Description</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="epro_desc" class="form-control" placeholder="Enter Project Description" name="epro_desc"  value="<?php echo $epro_desc; ?>">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Image 1</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="eimg1" class="form-control">
                                            </div>
                                        </div>

                                        <label>Image 2</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="eimg2" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Image 3</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="eimg3" class="form-control">
                                            </div>
                                        </div>

                                        <label>Image 4</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="eimg4" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>   
                               
                                <br><br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-11">
                                        <input type="submit" name="update" value="Update Project" class="btn btn-danger btn-block btn-lg">
                                    </div>
                                    <div class="col-sm-12 col-md-1">
                                        <button class="btn btn-lg">
                                            <a href="projects.php" class="col-gray">Cancel</a>
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

                if (isset($_POST['update'])) {
                    $proedit_record1=$_GET['proedit_form'];
                    $pro_title = $_POST['epro_title'];
                    $pro_loc = $_POST['epro_loc'];
                    $pro_area = $_POST['epro_area'];
                    $pro_desc = $_POST['epro_desc'];

                    $img1=$_FILES['eimg1']['name'];
                    $tmp_img1=$_FILES['eimg1']['tmp_name'];

                    $img2=$_FILES['eimg2']['name'];
                    $tmp_img2=$_FILES['eimg2']['tmp_name'];

                    $img3=$_FILES['eimg3']['name'];
                    $tmp_img3=$_FILES['eimg3']['tmp_name'];

                    $img4=$_FILES['eimg4']['name'];
                    $tmp_img4=$_FILES['eimg4']['tmp_name'];

                    move_uploaded_file($tmp_img1,"pro_images/$img1");
                    move_uploaded_file($tmp_img2,"pro_images/$img2");
                    move_uploaded_file($tmp_img3,"pro_images/$img3");
                    move_uploaded_file($tmp_img4,"pro_images/$img4");

                    $up_query="UPDATE projects_tbl SET project_title='$pro_title', project_loc ='$pro_loc', project_size='$pro_area', pro_img='$img1', pro_img2='$img2',pro_img3='$img3', pro_img4='$img4',pro_desc='$pro_desc', createdDate=NOW() WHERE projectID='$proedit_record1'";

                        $result = mysqli_query($conn, $up_query);

                    if ($result) {
                      echo "
                        <script>
                            swal('Good job!', 'Project Updated!', 'success');
                            window.open('projects.php','_self');
                            
                        </script>
                      ";
                    } else {
                     echo "
                        <script>
                            swal('Sorry!', 'Project Not Updated!', 'Error');
                            
                            
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