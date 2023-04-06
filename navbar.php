  <!--Navigation Bar start-->

<nav class="navbar navbar-expand-lg navbar-dark bg-warning sticky-top border-bottom border-dark">
  <div class="container">
      <a href="index.php" class=" text-dark"><!-- <h3>CMWS</h3> -->
        <img src="images/cwmslogo.png" style="">
      </a>
         <!-- Toggler/collapsibe Button -->
         <button class="navbar-toggler" data-toggle="collapse" data-target="#navigation" >
         <span class="navbar-toggler-icon"> </span>
         
         </button>
         <div class="collapse navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link text-white"><i class="fas fa-home"></i> Home </a>
                </li>
                <li class="nav-item">
                  <a href="projects.php" class="nav-link text-white"><i class="fas fa-folder-open"></i> Projects </a>
                </li>
                <li class="nav-item">
                  <a href="venders.php" class="nav-link text-white"><i class="fas fa-toolbox"></i> Venders</a>
                </li>
                    <!-- Dropdown -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-sign-in-alt"></i> Register
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="clientmodal.php">Clients</a>
                    <a class="dropdown-item" href="vendermodal.php">Venders</a>
                    <a class="dropdown-item" href="Admin/login.php">Admin login</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="contactus.php" class="nav-link text-white"><i class="fas fa-inbox"></i> Contact Us </a>
                </li>
                
            </ul>
            
        </div>

  </div>
</nav>
<!--Navigation Bar end-->