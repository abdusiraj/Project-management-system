<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$adm_user=$_SESSION['uname'];
$cor_id=$_SESSION['cor_id'];
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

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Coordinator Page</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->


            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            
            <li class="menu-item">
              <a href="progroup.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div >Project Group</div>
              </a>
            </li>
            <li class="menu-item active">
              <a href="exminer.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div >Project Examiner</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="advisor.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div >Project Advisor</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="project.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div >Project List</div>
              </a>
            </li>
          

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

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
                            <span class="fw-semibold d-block"><?php echo $cor_id; ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="profile.php">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                    <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalTop">
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
              <div class="row">
              <div class="row gy-3">
                  <div class="col-md-8">
                  <div class="card mb-4">
                    <h5 class="card-header">Exminers' List: </h5>
                    <div class="card-body">
                    <table class="table">
                    <thead>
                      <tr>
                        <th>Exminer Name</th>
                        <th>Tittle</th>
                        <th>Group Name</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php    include "../connection.php";
                   
                   
                   //$sql="select * from `user` where u_type = `coordinator`";
                   $sql = "SELECT * FROM `project_group` where exminer_id!=0 ";
                   $run=$con->query($sql);
                   while($row=$run->fetch_assoc()){
                    $group_id = $row['group_id'];
                    $tittle= $row['tittle'];
                    $status= $row['status'];
                    $examiner_id= $row['exminer_id'];
                    
                    $sql2=$con->query("SELECT * from examinor where exa_id='$examiner_id'");
                    $row2=$sql2->fetch_assoc();
                    ?>
                      
             
                      <tr>
                        <td>
                        <?php echo $row2['fname'];echo " ";echo $row2['mname']; echo " "; echo $row2['lname']; ?>
                        </td>
                        <td><?php echo $tittle; ?></td>
                        
                        <td> GROUP: <?php echo $group_id; ?> </td>
                            
                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                    </div>
                  </div>
                </div>
               

                <div class="col gy-2">
                  <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Assign Exminer: </h5>
                    <div class="card-body">
                      <div>
                      <form action="assignexaminer.php" method="POST">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Select Exminer</label>
                                    <input
                                      type="hidden"
                                      name="id"
                                      value=""
                                      />
                                    <?php 
                                    include('../connection.php');
                                    $sql3=$con->query("SELECT * from project_group where exminer_id=0 and `status`='accept'");
                                    $sql4=$con->query("SELECT * from examinor where `status`='free'");
                                    ?>
                                    <select name="exa_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected></option>
                                        <?php 
                                        while($row4=$sql4->fetch_assoc()){
                                        ?>
                                        <option value="<?php echo $row4['exa_id']; ?>"><?php echo $row4['fname']; echo " "; echo $row4['mname']; echo " "; echo $row4['lname'];?></option>
                                        <?php } ?>
                                    </select> <br>
                                    <label for="nameBasic" class="form-label">Select Group</label>
                                    <select name="group_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected></option>
                                        <?php 
                                        while($row3=$sql3->fetch_assoc()){
                                        ?>
                                        <option value="<?php echo $row3['group_id']; ?>">GROUP: <?php echo $row3['group_id']; ?></option>
                                        <?php } ?>
                                    </select><br>
                                    <label for="nameBasic" class="form-label">Presentation Date</label>
                                    <input type="date" name="date" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"/>  
                                    <br>
                                    <label for="nameBasic" class="form-label">Presentation Time</label>
                                    <input type="time" name="time" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"/>  
                                  </div>
                                </div>
                              </div>
                               <div class="modal-footer">
                                
                                <button type="submit" class="btn btn-primary">Assign</button>
                               </div>
                             </form>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
                    
               
                  
                </div>
              </div>
              
            </div>
            <!-- / Content -->
            

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <div class="modal modal-top fade" id="modalTop" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalTopTitle">LOGOUT</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Are you sure you want to logout!!</label>
                                    
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <a href="../index.php" class="btn btn-primary">YES</a>
                              </div>
                            </form>
                          </div>
                        </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
