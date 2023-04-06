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
                                Register New Project
                            </h2>
                            
                        <br>
                        <div class="body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Project Title</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="pro_title" class="form-control" placeholder="Enter Project Title" name="pro_title">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label>Project Location</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="pro_loc" class="form-control" placeholder="Enter Project Location" name="pro_loc">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Project Area Size</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="pro_area" class="form-control" placeholder="Enter Project Area" name="pro_area">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Description</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="pro_desc" class="form-control" placeholder="Enter Project Description" name="pro_desc">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                        <label>Image 1</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="img1" class="form-control">
                                            </div>
                                        </div>

                                        <label>Image 2</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="img2" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">

                                        <label>Image 3</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="img3" class="form-control">
                                            </div>
                                        </div>

                                        <label>Image 4</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="img4" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>   
                               
                                <br><br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-11">
                                        <input type="submit" name="sub" value="Register Project" class="btn btn-danger btn-block btn-lg">
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

                if (isset($_POST['sub'])) {

                    $pro_title = $_POST['pro_title'];
                    $pro_loc = $_POST['pro_loc'];
                    $pro_area = $_POST['pro_area'];
                    $pro_desc = $_POST['pro_desc'];

                    $img1=$_FILES['img1']['name'];
                    $tmp_img1=$_FILES['img1']['tmp_name'];

                    $img2=$_FILES['img2']['name'];
                    $tmp_img2=$_FILES['img2']['tmp_name'];

                    $img3=$_FILES['img3']['name'];
                    $tmp_img3=$_FILES['img3']['tmp_name'];

                    $img4=$_FILES['img4']['name'];
                    $tmp_img4=$_FILES['img4']['tmp_name'];

                    move_uploaded_file($tmp_img1,"pro_images/$img1");
                    move_uploaded_file($tmp_img2,"pro_images/$img2");
                    move_uploaded_file($tmp_img3,"pro_images/$img3");
                    move_uploaded_file($tmp_img4,"pro_images/$img4");

                    $ins_sql = "INSERT INTO projects_tbl(project_title,project_loc,project_size,pro_img,pro_img2,pro_img3,pro_img4,  pro_desc,createdDate) VALUES('$pro_title', '$pro_loc', '$pro_area', '$img1', '$img2', '$img3', '$img4', '$pro_desc', NOW())";

                        $result = mysqli_query($conn, $ins_sql);

                    if ($result) {
                      echo "
                        <script>
                            swal('Good job!', 'Project Inserted!', 'success');
                            window.open('projects.php','_self');
                            
                        </script>
                      ";
                    } else {
                     echo "
                        <script>
                            swal('Sorry!', 'Project Not Inserted!', 'Error');
                            
                            
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