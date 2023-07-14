<?php 
  include("../connection.php");
  $id = $_GET['Id'];
 
  $selExmne = $con->query("SELECT * FROM examinor WHERE email='$id' ")->fetch_ASSOC();

 ?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Project management | Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="layout-demo-wrapper">
                <div class="layout-demo-placeholder">
                <div class="col-xl">
                  <div class="card mb-4">
                  <legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selExmne['fname']); echo "  "; echo strtoupper   (  $selExmne['mname']);?> )</b></i></legend>
                    <div class="card-header d-flex justify-content-between align-items-center">
                      
                      
                    </div>
                    <div class="card-body">
                      <form action="updateexapro.php" method="post">
                      <div class="form-group">
        <legend>First Name</legend>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="" name="fname" class="form-control" required="" value="<?php echo $selExmne['fname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Middle Name</legend>
        
        <input type="" name="mname" class="form-control" required="" value="<?php echo $selExmne['mname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Last Name</legend>
        
        <input type="" name="lname" class="form-control" required="" value="<?php echo $selExmne['lname']; ?>" >
     </div>

     <div class="form-group">
        <legend>Gender</legend>
        <select class="form-control" name="sex">
          <option value="<?php echo $selExmne['sex']; ?>"><?php echo $selExmne['sex']; ?></option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
     </div>

     <div class="form-group">
        <legend>Address</legend>
        <input type="" name="addres" class="form-control" required="" value="<?php echo $selExmne['address']; ?>" >
     </div>

     <div class="form-group">
        <legend>Email</legend>
        <input type="email" name="email" class="form-control" required="" value="<?php echo $selExmne['email']; ?>" >
     </div>
     <div class="form-group">
        <legend>User Name</legend>
        <input type="text" name="uname" class="form-control" required="" value="<?php echo $selExmne['uname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Password</legend>
        <input type="password" name="pass" class="form-control" required="" value="<?php echo $selExmne['pass']; ?>" >
     </div>

     <div class="form-group">
        <legend>Age</legend>
        <input type="int" name="age" class="form-control" required="" value="<?php echo $selExmne['age']; ?>" >
     </div>
     <br>

     
  
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                    </div>
                  </div>
                </div>
                  
                </div>
                <div class="layout-demo-info">
                 
                  <a href="coordinator.php"class="btn btn-primary" type="button" >Go Back</a>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              
            </footer>
            <!-- / Footer -->

            
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
    </div>
    <!-- / Layout wrapper -->

    
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
