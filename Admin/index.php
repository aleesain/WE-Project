<?php include 'head.php'; ?>
<style type="text/css">
	.crd{
		box-shadow: 0px 0px 24px 1px gray;
		padding: 30px; border-radius: 5px;
		transition: 0.5s;
	}
	.crd:hover{
		transform: scale(1.02);
		transition: 0.5s;
	}
</style>
<body class="theme-red">

	<?php  include 'pageloads.php'; ?>
	<?php  include 'nav.php'; ?>
	<?php  include 'sidenav.php'; ?>
	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
            <?php
           

                include 'database.php';
                $total_user ="SELECT COUNT(*) FROM user_tbl";
                $result_user = mysqli_query($conn,$total_user);
                $totalUser = mysqli_fetch_array($result_user);

                $total_vender ="SELECT COUNT(*) FROM venders_tbl";
                $result_vender = mysqli_query($conn,$total_vender);
                $totalVender = mysqli_fetch_array($result_vender);

                $total_client ="SELECT COUNT(*) FROM clients_tbl";
                $result_client = mysqli_query($conn,$total_client);
                $totalClient = mysqli_fetch_array($result_client);

                $total_pro ="SELECT COUNT(*) FROM projects_tbl";
                $result_pro = mysqli_query($conn,$total_pro);
                $totalProject = mysqli_fetch_array($result_pro);

            ?>

        

                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Users</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalUser[0] ; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_basket</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Venders</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalVender[0];?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">business_center</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Clients</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalClient[0] ; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">folder</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Projects</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalProject[0] ; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <br>
            <!-- Modules -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="card text-center shadow crd">
                    	<a href="users.php" class="font-bold col-blue-grey" style="text-decoration: none;">
	                    	<i class="material-icons" style="font-size: 99px;">person</i>
	                        <p class="icon-name font-bold font-20">Users</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="card text-center shadow crd">
                    	<a href="venders.php" class="font-bold col-blue-grey" style="text-decoration: none;">
	                    	<i class="material-icons" style="font-size: 99px;">shopping_basket</i>
	                        <p class="icon-name font-bold font-20">Venders</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="card text-center shadow crd">
                    	<a href="clients.php" class="font-bold col-blue-grey" style="text-decoration: none;">
	                    	<i class="material-icons" style="font-size: 99px;">business_center</i>
	                        <p class="icon-name font-bold font-20">Clients</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                    <div class="card text-center shadow crd">
                    	<a href="Projects.php" class="font-bold col-blue-grey" style="text-decoration: none;">
	                    	<i class="material-icons" style="font-size: 99px;">folder</i>
	                        <p class="icon-name font-bold font-20">Projects</p>
                        </a>
                    </div>
                    
                </div>
            </div>
            <!-- #END# Modules -->
            

            
        </div>
    </section>
	<?php include 'footerlab.php'; ?>
</body>
</html>