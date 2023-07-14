<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$adv_user=$_SESSION['uname'];
$adv_id=$_SESSION['adv_id'];
?>
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

    <title>Project management|Advisor</title>
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
              
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $adv_user; ?></span>
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
                      <a class="dropdown-item" href="../index.php">
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
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Advisor Page /</span> Notifications
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                  <li class="nav-item">
                      <a class="nav-link " href="index.php"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="notification.php"
                        ><i class="bx bx-bell me-1"></i> Notifications</a
                      >
                    </li>
                    <?php if($level="leader"){ ?>
                    <li class="nav-item">
                      <a class="nav-link " href="activity.php"
                        ><i class="bx  me-1"></i> Students Mark</a
                      >
                    </li>
                    <?php } ?>
                  </ul>
                  <div class="row">
                  <div class="col-md-6 col-12 mb-md-0 mb-4">
                      <div class="card">
                        <h5 class="card-header">Notification From Coordinator</h5>
                        <div class="card-body">
                          
                          <!-- Connections -->
                         
                         <?php 
                         include('../connection.php');
                         $sql1=$con->query("SELECT * from project_group where advisor_id='$adv_id' and `status`!='finshed'");
                         $row1=$sql1->fetch_assoc();
                         $group_id=$row1['group_id'];
                         ?>
                          <p>You're Assigned For<b> Group <?php echo $row1['group_id']; ?></b> With Project Tittle: <b><?php echo $row1['tittle']; ?></b></p>
                          
                        
                          <!-- /Connections -->
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="card">
                        <h5 class="card-header">Message for Student</h5>
                        <div class="card-body">
                          <p</p>
                          <!-- Connections -->
                   


</div>
<form action="message.php" method="post">
<div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
  
  <div class="input-group mb-0">
    <input type="hidden" name="to" value="<?php echo $group_id; ?>"/>
    <input type="text" name="message" class="form-control" placeholder="Type message"
      aria-label="Recipient's username" aria-describedby="button-addon2" />
    <button class="btn btn-warning" type="submit" id="button-addon2" style="padding-top: .55rem;">
      Send
    </button>
  </div>
                    
</div>
</form>                    
    
<div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <div class="row gy-3">
                  <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Message for Students: </h5>
                    <div class="card-body">
                    <div class="table-responsive">
                     <?php
                     $sqqll=$con->query("SELECT * from `message` where `message_of`='advisor' and `to`='$group_id'");
                     
                     ?>
                    </div>
                    <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                        <th>Message</th>
                        <th>To</th>
                        <th>date</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              <?php while($mess1=$sqqll->fetch_assoc()){ ?>
                              <tr>
                                <td><?php echo $mess1['message']; ?></td>
                                <td>Group <?php echo $mess1['to']; ?></td>
                                <td><?php echo $mess1['date']; ?></td>
                              </tr>
                              <?php } ?>

                            </body>
                            </table>
                    </div>
                  </div>
                </div>
               
                    
               
                  
                </div>
              </div>
              
            </div><br>

<div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <div class="row gy-3">
                  <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Message from Students: </h5>
                    <div class="card-body">
                    <div class="table-responsive">
                     <?php
                     $sqqll=$con->query("SELECT * from `message` where `message_of`='student' and `to`='advisor' and `from`='$group_id'");
                     
                     ?>
                    </div>
                    <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                        <th>Message</th>
                        
                        <th>date</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              <?php while($mess1=$sqqll->fetch_assoc()){ ?>
                              <tr>
                                <td><?php echo $mess1['message']; ?></td>
                               
                                <td><?php echo $mess1['date']; ?></td>
                              </tr>
                              <?php } ?>

                            </body>
                            </table>
                    </div>
                  </div>
                </div>
               
                    
               
                  
                </div>
              </div>
              
            </div><br>
                        
                          <!-- /Connections -->
                        </div>
                      </div>
                    </div>
                    </div>


                </div>
              </div>
            </div>

            
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
