<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$adm_user=$_SESSION['uname'];
$stu_id=$_SESSION['stu_id'];
$level=$_SESSION['level'];
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

    <title>Project management|Admin</title>
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
                            <span class="fw-semibold d-block"><?php echo $adm_user; ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
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
                <span class="text-muted fw-light">Student Page / </span> Connections
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                  <li class="nav-item">
                      <a class="nav-link " href="index.php"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="notification.php"
                        ><i class="bx bx-bell me-1"></i> Notifications</a
                      >
                    </li>
                    <?php if($level="leader"){ ?>
                    <li class="nav-item">
                      <a class="nav-link active" href="activity.php"
                        ><i class="bx  me-1"></i> Activity</a
                      >
                    </li>
                    <?php } 
                    include('../connection.php');
                    $sqll=$con->query("SELECT * from project_group where led_id='$stu_id'");
                    $roww=$sqll->fetch_assoc();
                    $tittle= $roww['tittle'];
                    $status= $roww['status'];
                    ?>
                  </ul>

                  <div class="row">
                    <div class="col-md-6 col-12 mb-md-0 mb-4">
                      <div class="card">
                        <?php if($status=="pending" && $tittle != " "):?>
                        <h5 class="card-header">SUBMITE YOUR TITTLE HERE!!</h5>
                        <div class="card-body">
                          <p></p>
                          <!-- Connections -->
                          <form class="forms-sample" action="tittle.php" method="post" >
                      <div class="form-group">
                        <label for="exampleInputUsername1">Tittle</label>
                        <input type="text" name="tittle" class="form-control" id="exampleInputUsername1" placeholder="Insert tittle......" />
                      </div><BR>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      
                    </form>
                    <h5 class="card-header"> YOUR TEMPORARY TITTLE IS:- <?php echo $tittle;echo "  "; ?> and it's not accepted yet</h5>
                    </div>
                    <?php 
                    elseif($status=="pending" && $tittle!=" "):?>
                    <div class="card-body">
                          <!-- /Connections -->
                          
                          
                        </div>
                        <?php  elseif( $status=="reject" && $tittle!=" "):
                        ?>
                        <h5 class="card-header text-danger"> YOUR TITTLE IS REJECTED PLEASE RESUBMIT!!</h5>
                        <div class="card-body">
                          <p></p>
                          <!-- Connections -->
                          <form class="forms-sample" action="tittle.php" method="post" >
                      <div class="form-group">
                        <label for="exampleInputUsername1">Tittle</label>
                        <input type="text" name="tittle" class="form-control" id="exampleInputUsername1" placeholder="Insert tittle......" />
                      </div><BR>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      
                    </form>
                    </div>
                        <?php 
                        elseif($status=="accept" && $tittle!=" " ): ?>
                        <h5 class="card-header"> YOUR TITTLE IS:- <?php echo $tittle; ?></h5>
                        <?php  ?>
                        <?php endif; ?>
                      </div>
                      
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="card">
                        <h5 class="card-header">UPLOADE YOU DOCUMENT HERE!!</h5>
                        <div class="card-body">
                         <?php
                          include('../connection.php');
                          $sql=$con->query("SELECT * from student st inner join project_group pg on st.stu_id = pg.led_id  where st.stu_id='$stu_id' and pg.led_id='$stu_id'");
                          $row=$sql->fetch_assoc();
                          $status=$row['status'];

                          if($status!="accept"){
                         ?>
                         <p>YOR PROJECT TITTLE IS NOT ACCEPTED YET.</p>
                         <?php } 
                         else {?>

<form action="uploade.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-14"></div>
						<div class="col-md-14">
                            
            <input
                              type="hidden"
                              value="<?php echo $stu_id; ?>"
                              name="id"
                              
                            />
                                            
							<div class="form-group">
								<label>File:</label>
								<input type="file" name="video" class="form-control-file"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>

                       
                        
					<div class="modal-footer">
                        


                    <button name="upload" class="btn btn-info"><span class="glyphicon glyphicon-save"></span> Upload</button>
					</div>
				</div>
			</form><?php } ?>
                         
                          
                          <!-- /Social Accounts -->
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
