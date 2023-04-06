<!-- Top Bar -->
    <nav class="navbar bg-warning">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">ADMIN - CWMS</a>

            </div>
            
            <ul class="nav navbar-nav navbar-right" style="margin-right: 30px; margin-top: 20px;">
                        <span class="col-white" style="font-size: 20px;">
                            Welcome <?php echo $_SESSION['username']; ?>
                                
                            </span>
                        <a href="logout.php" class="nav-link">
                            
                            <i class="material-icons col-white" style="position: relative; top: 6px;">input</i>

                        </a>
                                 
                
            </ul>

        </div>
        
    </nav>
    <!-- #Top Bar -->