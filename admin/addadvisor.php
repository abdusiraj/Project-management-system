<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
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
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add Advisor</h5>
                      
                    </div>
                    <div class="card-body">
                      <form action="addadvisorpro.php" method="post" onsubmit='return formValidation()'>
                      <div class="form-group row">
                      <label for="exampleInputUsername2"  class="col-sm-3 col-form-label">First Name</label>
                      <div class="col-sm-9">
                        <input type="letter" name="fname" class="form-control" id="firstname"   placeholder="First Name">
                        <p class="text-danger" id="p1"></p>
                        
                      </div>
                    </div><br>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Middele Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="mname"  class="form-control" id="mname" placeholder="Middele Nam">
                        <p class="text-danger" id="p2"></p>
                      </div>
                    </div><br>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Last Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
                        <p class="text-danger" id="p3"></p>
                      </div>
                    </div><br>
                    
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Age</label>
                      <div class="col-sm-9">
                        <input type="number" name="age" class="form-control" id="exampleInputMobile" placeholder="Age" onclick="">
                      </div>
                    </div><br>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sex</label>
                      <div class="col-sm-9">
                        <select name="sex" class="form-control form-control-sm">
                            <option> </option>
                            <option>Male</option>
                            <option>Famele</option>
                        </select>
                      </div>
                    </div><br>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="exampleInputMobile" placeholder="email">
                      </div>
                    </div><br>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" id="exampleInputMobile" placeholder="Address">
                      </div>
                    </div><br>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" name="uname" class="form-control" id="exampleInputMobile" placeholder="Username">
                      </div>
                    </div><br>
                    
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Password</label>
                      <div class="col-sm-8">
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Submite</button>
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

    <script>
 function formValidation() {
var firstname = document.getElementById('firstname');
var mname = document.getElementById('mname');
var lname = document.getElementById('lname');
if (inputAlphabet(firstname, "Please Alphabet Only")) {
if (inputAlphabet1(mname, "Please Alphabet Only")) {
if (inputAlphabet2(lname, "Please Alphabet Only")) {
return true;
}
}
}
return false;
}
function inputAlphabet(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
} else {
document.getElementById('p1').innerText = alertMsg; // This segment displays the validation rule for name.
//alert(alertMsg);
inputtext.focus();
return false;
}
}

function inputAlphabet1(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
} else {
document.getElementById('p2').innerText = alertMsg; // This segment displays the validation rule for name.
//alert(alertMsg);
inputtext.focus();
return false;
}
}

function inputAlphabet2(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
} else {
document.getElementById('p3').innerText = alertMsg; // This segment displays the validation rule for name.
//alert(alertMsg);
inputtext.focus();
return false;
}
}
</script>
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
