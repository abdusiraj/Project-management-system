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
$id = $_GET['Id']; 


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

    <title>Project management|Coordinator</title>
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
                      <a class="dropdown-item" href="#">
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
          <!--  start cheker -->
          <?php
          include('../connection.php');
          $chekresult=$con->query("SELECT * from result where group_no='$id' and advisor_mark!=0 and exminer_mark!=0 and examiner_2!=0 and cor_mark!=0");
          $resu=$chekresult->num_rows;
          $chekstat=$con->query("SELECT * from project_group where group_id='$id'");
          $rowsta=$chekstat->fetch_assoc();
          $sta=$rowsta['tittle'];

          ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            
            <div class="card mb-6">
                <?php include("../connection.php");
                 
                 $sql=$con->query("SELECT * from project_group where group_id='$id'");
                 $row=$sql->fetch_assoc();
                 $idd=$row['led_id'];
                 $sql1=$con->query("SELECT * from student where stu_id='$idd'");
                 $row1=$sql1->fetch_assoc();
                 ?>
                 <h5 class="card-header">Group: <?php echo $id ?></h5>
            <div class="card-body">
            <a href="progroup.php" class="btn btn-sm btn-primary text-white">Back</a>
                  <div class="row gy-3">
                  <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Group Leadr: <?php echo $row1['fname']; echo " "; echo $row1['mname']; echo " "; echo $row1['lname'];?></h5>
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Group Members:-</label>
                        
                        <div id="defaultFormControlHelp" class="form-text">
                          <?php
                          $sql3=$con->query("SELECT * from student  where group_no='$id' and `level`='member'");
                          while($row3=$sql3->fetch_assoc()){
                          ?>
                          <p> <?php echo $row3['fname']; echo " "; echo $row3['mname']; echo " "; echo $row3['lname'];?> </p>
                          <?php } ?>
                        </div>
                        <label for="defaultFormControlInput" class="form-label">Tittle:-</label>
                        
                        <div id="defaultFormControlHelp" class="form-text">
                          <?php echo $row['tittle'] ?>
                        </div>
                        <label for="defaultFormControlInput" class="form-label">Status:-</label>
                        
                        <div id="defaultFormControlHelp" class="form-text">
                        <b><?php if($row['status'] =="accept" ): ?>
							    <span class="badge badge-sm bg-success">Accept</span>
                                <?php elseif($row['status'] == "pending"): ?>
								<span class="badge badge-sm bg-secondary">Pending</span>  
							    <?php elseif($row['status'] == "reject"): ?>
								<span class="badge badge-sm bg-danger">Reject</span>
                                <?php elseif($row['status'] == "finshed"): ?>
								<span class="badge badge-sm bg-primary">Finshed</span>
							    <?php endif;?></b>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    <!-- Default Modal -->
                    <div class="col-lg-4 col-md-6">
                      
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                          ADD Group Members
                        </button>
                        <?php if($resu >= 1){ ?>
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#complate"
                        >
                          Complate
                        </button>
                        <?php } ?>
                        <br><br>
                        <?php if($sta!=""){ ?>
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#manage"
                        >
                          Manage Tittle Status
                        </button>
                        <?php } ?>
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#mark"
                        >
                          Set mark
                        </button><br><br>
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#send"
                        >
                          Send message for Group
                        </button><br><br>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Students Name</th>
                      <th>Advisor Mark 30%</th>
                      <th>Examinor Mark 50%</th>
                      <th>Coordinator Mark 20%</th>
                      <th>Total 100%</th>
                      
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                   <?php
                   include "../connection.php";

                   $sql5=$con->query("SELECT * from student st inner join result rs on st.stu_id=rs.stu_id where rs.group_no='$id' and st.group_no='$id'");
                   while($row5=$sql5->fetch_assoc()){
                   $adv=$row5['advisor_mark'];
                   $exa=$row5['exminer_mark'];
                   $exa2=$row5['examiner_2'];
                   $exat=$exa + $exa2;
                   $cor=$row5['cor_mark'];
                
                  
                     ?>
                    <tr class="odd gradeX" id="rec">
                   

                                <td>    
                                <?php echo $row5['fname']; echo " "; echo $row5['mname']; echo " "; echo $row5['lname'];?>
                                            
                                </td>   
                                <td> <?php echo $adv;?></td>
                                <td> <?php echo $exat;?></td>
                                <td> <?php echo $cor;?></td>
                                <?php $total=  $adv + $exat + $cor; ?>
                                <td> <?php echo $total;?></td>
                   </tr>
                     
                 <?php  }
                   ?>
                   </tbody>
                   </table>

                        

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add Group Member</h5>
                               
                              </div>
                              <form action="mangrouppro.php" method="POST">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Select Group Member</label>
                                    <input
                                      type="hidden"
                                      name="id"
                                      value="<?php echo $id; ?>"
                                      />
                                    <?php 
                                    $sql2=$con->query("SELECT * from student where group_no=0 and `level`=' ' and cgpa<3.0 ");
                                    ?>
                                    <select name="member_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected></option>
                                        <?php 
                                        while($row2=$sql2->fetch_assoc()){
                                        ?>
                                        <option value="<?php echo $row2['stu_id']; ?>"><?php echo $row2['fname']; echo " "; echo $row2['mname']; echo " "; echo $row2['lname'];?></option>
                                        <?php } ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                               <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">ADD</button>
                               </div>
                             </form>
                            </div>
                          </div>
                        </div>


                        <div class="modal fade" id="complate" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Complation</h5>
                                <?php 
                                   $sq=$con->query("SELECT * from project_group where group_id='$id'");
                                   $r=$sq->fetch_assoc();
                                   $advisor=$r['advisor_id'];
                                   $exminer_id=$r['exminer_id'];
                                   
                                   ?>
                                    
                              </div>
                              <form action="manpro11.php" method="POST">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Are you sure you want to complate Group <?php echo $id; ?></label>
                                    <input
                                      type="hidden"
                                      name="id"
                                      value="<?php echo $id; ?>"
                                      />
                                      <input
                                      type="hidden"
                                      name="exminer_id"
                                      value="<?php echo $exminer_id; ?>"
                                      />
                                      <input
                                      type="hidden"
                                      name="advisor"
                                      value="<?php echo $advisor; ?>"
                                      />
                                  
                                   
                                      
                                  </div>
                                </div>
                              </div>
                               <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                  No
                                </button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                               </div>
                             </form>
                            </div>
                          </div>
                        </div>


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
                                    <input
                                      type="hidden"
                                      name="id"
                                      value="<?php echo $id; ?>"
                                      />
                                    <?php 
                                    // $sqq=$con->query("SELECT * from project_group where `advisor_id`='$adv_id' and `status`!='finsh'");
                                    // $rr=$sqq->fetch_assoc();
                                    // $group=$rr['group_id'];
                                    $sql2=$con->query("SELECT * from student st inner join result rs on st.stu_id=rs.stu_id where rs.group_no='$id' and st.group_no='$id'");
                                    ?>
                                    <select name="member_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected></option>
                                        <?php 
                                        while($row2=$sql2->fetch_assoc()){
                                        ?>
                                        <option value="<?php echo $row2['stu_id']; ?>"><?php echo $row2['fname']; echo " "; echo $row2['mname']; echo " "; echo $row2['lname'];?></option>
                                        <?php } ?>
                                    </select>
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Coordinator mark 20%</label>
                                      <div class="col-sm-4">
                                       <input type="int" name="mark" class="form-control" id="exampleInputMobile" >
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

                          <!-- Modal of Status -->
                          <div class="modal fade" id="manage" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Manage Group Tittle Status</h5>
                               
                              </div>
                              <form action="statusprocess.php" method="POST">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Select Status</label>
                                    <input
                                      type="hidden"
                                      name="id"
                                      value="<?php echo $id; ?>"
                                      />
                                    <?php 
                                    $sql2=$con->query("SELECT * from student where group_no=0 and `level`=' ' and cgpa<3.0 ");
                                    ?>
                                    <select name="status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="accept" >Accept</option>
                                        <option value="reject">Reject</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                               <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">ADD</button>
                               </div>
                             </form>
                            </div>
                          </div>
                        </div>


                        <!-- Modal of Status -->
                        <div class="modal fade" id="send" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Message for student</h5>
                               
                              </div>
                              <form action="messageco.php" method="POST">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">message</label>
                                    <input
                                      type="hidden"
                                      name="id"
                                      value="<?php echo $id; ?>"
                                      />
                                    <?php 
                                    $sql2=$con->query("SELECT * from student where group_no=0 and `level`=' ' and cgpa<3.0 ");
                                    ?>
                                    <textarea name="message" class="form-control" id="exampleFormControltextarea" >
                                        
                                        </textarea>
                                  </div>
                                </div>
                              </div>
                               <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Send</button>
                               </div>
                             </form>
                            </div>
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

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
