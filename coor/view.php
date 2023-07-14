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

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
          
        <!-- Nested Row within Card Body -->
        <div class="row">
        
          <div class="col-lg-1 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-10">
            <div class="p-100">
            <?php
            
            ?>
              <div class="card">
              
              <div class="text-center">
              
              
                <h1 class="h4 text-gray-900 mb-4">Project Detail</h1>
                
                <p style="color:#0000ff;"></p>
              </div>
              <div class="card-body">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <?php
                    include('../connection.php');
                      $table=$con->query("SELECT * FROM  project_group  where `group_id`='$id'");
                        //$rowtable=$table->fetch_assoc();
                      ?>
                      <th>Group Name</th>
                      <th>Project Tittle</th>
                      <th>Examiner Name</th>
                      <th>Advisor Name</th>
                      <th>Document</th>

                      
                      
                     
                    </tr>
                  </thead>
            
                  <tbody>
                  <?php
                  
                   while($rowtable=$table->fetch_assoc()){
                   //$pp= $rowtable['std_id'];
                    echo '<tr class="odd gradeX" id="rec">';
                    $examiner_id= $rowtable['exminer_id'];
                    $advisor_id= $rowtable['advisor_id'];
                    $url= $rowtable['location'];
                    
                    
                    $sql2=$con->query("SELECT * from examinor where exa_id='$examiner_id'");
                    $row2=$sql2->fetch_assoc();
                    $sql5=$con->query("SELECT * from advisor where adv_id='$advisor_id'");
                    $row5=$sql5->fetch_assoc();
                     ?>
                   
                    <?php
                      echo "<td> Group".$rowtable['group_id']."</td>";
                      echo "<td>".$rowtable['tittle']."</td>";
                      ?>
                       <td>
                        <?php echo $row2['fname'];echo " ";echo $row2['mname']; echo " "; echo $row2['lname']; ?>
                        </td>
                        <td>
                        <?php echo $row5['fname'];echo " ";echo $row5['mname']; echo " "; echo $row5['lname']; ?>
                        </td>
                        <td>
                        <a  href="../student/doc/<?php echo $url; ?>" download >
                                   
                                   <i class="bx x-bell ">Downloade</i></a><p> download document here</p> 
                        </td>
                        
                 <?php  }echo '<tr class="odd gradeX" id="rec">';
                   ?>

                   
                   
                  </tbody>
                  </table>  <br>

                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <?php
                    include('../connection.php');
                      $table=$con->query("SELECT * FROM  project_group  where `group_id`='$id'");
                        //$rowtable=$table->fetch_assoc();
                      ?>
                      <th><strong>Group Leader Name</strong></th>
                      
                      
                      
                      
                     
                    </tr>
                  </thead>
            
                  <tbody>
                    <?php
                     $tab=$con->query("SELECT * FROM  project_group  where `group_id`='$id'");
                     $rowtab=$tab->fetch_assoc();
                     $led_id= $rowtab['led_id'];
                    $stu1=$con->query("SELECT * from student where stu_id='$led_id'");
                    $getstu1=$stu1->fetch_assoc();
                    ?>
                  <td>
                        <?php echo $getstu1['fname'];echo " ";echo $getstu1['mname']; echo " "; echo $getstu1['lname']; ?>
                        </td>
                
                   
                  </tbody>
                  </table>  <br>


                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                   
                      <th><strong>Group Member Name</strong></th>  
                    </tr>
                  </thead>
            
                  <tbody>
                    
                  <?php
                  $stu2=$con->query("SELECT * from student where group_no='$id'");
               
                   while($getstu2=$stu2->fetch_assoc()){
                   //$pp= $rowtable['std_id'];
                    echo '<tr class="odd gradeX" id="rec">';
                    
                     ?>
                       
                        <td># 
                        <?php echo $getstu2['fname'];echo " ";echo $row5['mname']; echo " "; echo $row5['lname']; ?>
                        </td>
                        
                        
                 <?php  }echo '<tr class="odd gradeX" id="rec">';
                   ?>   
                  </tbody>
                  </table> 


                <div class="form-group pt-2">
                    <a href="project.php" class="btn btn-block btn-info text-white" type="submit">Back</a>
                </div>
                
               
            </div>

        </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<!-- Modal For Update Course -->
                        <div
                          class="modal fade"
                          id="graduate"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                        <form action="complate.php" method="post">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Complation</h5>
                                
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                              
                              <h4>Are you sure you want to complate this student costshare!!!
                               
                   </h4>
                              if you choose yes the student will get his official trascript..

                              </div>
                              <input type="hidden" name="idd" value="<?php echo $id; ?>" />
                            
                              
                              <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-success">YES</button>
                              </div>
                            </div>
                          </div>
                        </form>
                        </div>


  <!-- Modal For Sete Mark  -->
<!-- plugins:js -->
<script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
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


</body>

</html>
