<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$exa_user=$_SESSION['uname'];
$exa_id=$_SESSION['exa_id'];
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
                            <span class="fw-semibold d-block"><?php echo $exa_user; ?></span>
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
                <span class="text-muted fw-light">Examinor Page / </span> Connections
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
                    
                    <li class="nav-item">
                      <a class="nav-link active" href="activity.php"
                        ><i class="bx  me-1"></i> Students Mark</a
                      >
                    </li>
                    
                  </ul>
                  <div class="row">
                    <div class="col-md-6 col-12 mb-md-0 mb-4">
                      <div class="card">
                        <h5 class="card-header">Project Document</h5>
                        <div class="card-body">
                          <p</p>
                          <!-- Connections -->
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Assignment Answer</th>
                      <th>Group Name</th>
                      
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                   <?php
                   include "../connection.php";
                  
                   $sql = "SELECT * FROM `project_group` where exminer_id='$exa_id' and `status`!='finshed'";
                   $run=$con->query($sql);
                   while($row=$run->fetch_assoc()){
                    $id = $row['group_id'];
                    // $stdid= $row['std_id'];
                    // $stdidd=$con->query("SELECT * FROM `student` where std_id ='$stdid'");
                    // $student=$stdidd->fetch_assoc();
                    // $fname=$student['fname'];
                    // $mname=$student['mname'];
                    echo '<tr class="odd gradeX" id="rec">';
                     ?>
                    
                    <?php
                      //echo  "<td>".$idd.$row['co_id']."</td>";
                       $url=$row['location'];
                      
                      ?>

                                <td>    
                                <p>  <b>Tittle: </b> <?php echo $row['tittle']; ?> </p>
                                  <a  href="../student/doc/<?php echo $url; ?>" download >
                                   
                                                    <i class="bx x-bell ">Downloade</i></a><p> download document here</p> 
                                                       
                                            
                                </td>   
                                <td>Group: <?php echo $id;?></td>
                      
                     
                 <?php  }
                   ?>
                   </tr>
                  </tbody>
                </table>
                         
                        
                          
                        
                          <!-- /Connections -->
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="card">
                        <h5 class="card-header">Student Mark!!</h5>
                        <div class="card-body">
                        
                        
                         <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#mark"
                        >
                          Set Student Mark
                        </button><br>

                        <div class="modal fade" id="mark" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">SET MARK</h5>
                               
                              </div>
                              <form action="addmarkpro.php" method="POST">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Select Group Member</label>
                                    
                                    <?php 
                                    $sqq=$con->query("SELECT * from project_group where `exminer_id`='$exa_id' and `status`!='finshed'");
                                    $rr=$sqq->fetch_assoc();
                                    $group=$rr['group_id'];
                                    $sql2=$con->query("SELECT * from student st inner join result rs on st.stu_id=rs.stu_id where rs.group_no='$group'");
                                    ?>
                                    <select name="member_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected></option>
                                        <?php 
                                        while($row2=$sql2->fetch_assoc()){
                                        ?>
                                        <option value="<?php echo $row2['stu_id']; ?>"><?php echo $row2['fname']; echo " "; echo $row2['mname']; echo " "; echo $row2['lname'];?></option>
                                        <?php } ?>
                                    </select>
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Documentation 30%</label>
                                      <div class="col-sm-4">
                                       <input type="int" name="mark" class="form-control" id="exampleInputMobile" placeholder="Username">
                                      </div>
                                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Presentation 20%</label>
                                      <div class="col-sm-4">
                                       <input type="int" name="mark2" class="form-control" id="exampleInputMobile" placeholder="Username">
                                      </div>
                                  </div>
                                </div>
                              </div>
                               <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                               </div>
                             </form>
                            </div>
                          </div>
                        </div>
                          <br>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Students Name</th>
                      <th>Documentation mark 30%</th>
                      <th>Presentation mark 20%</th>
                      <th>Total 50%</th>
                      
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                   <?php
                   include "../connection.php";
                  
   
                   $qq=$con->query("SELECT * from project_group where `exminer_id`='$exa_id' and `status`!='finsh'");
                   $tt=$qq->fetch_assoc();
                   $groupi=$tt['group_id'];
                   $sql2=$con->query("SELECT * from student st inner join result rs on st.stu_id=rs.stu_id where rs.group_no='$id'");
                   while($row=$sql2->fetch_assoc()){
                 
                    // $stdid= $row['std_id'];
                    // $stdidd=$con->query("SELECT * FROM `student` where std_id ='$stdid'");
                    // $student=$stdidd->fetch_assoc();
                    // $fname=$student['fname'];
                    // $mname=$student['mname'];
                    echo '<tr class="odd gradeX" id="rec">';
                     ?>
                    
                   

                                <td>    
                                <?php echo $row['fname']; echo " "; echo $row['mname']; echo " "; echo $row['lname'];?>
                                            
                                </td>   
                                <td> <?php echo $row['exminer_mark'];?></td>
                                <td> <?php echo $row['examiner_2'];?></td>
                                <?php 
                                $total=$row['exminer_mark'] + $row['examiner_2'];
                                ?>
                                <td> <?php echo $total;?></td>
                     
                 <?php  }
                   ?>
                   </tr>
                  </tbody>
                </table>
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
