<?php require "header.php"; ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Haylu real state</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Managment Tools
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Employee Tables</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addEmp.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Employee</span></a
          >
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="addCategory.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Catagoray</span></a
          >
        
        </li>
        <li class="nav-item">

          <a class="nav-link" href="addProperty.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Property</span></a
          >
        </li>
        <li class="nav-item">

          <a class="nav-link" href="scadule.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Assign Scadule</span></a
          >
        </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                </body> <h2> Property Adding Section</h2>
                <hr style="border: solid 1px rgb(137, 137, 228);">
                    <body>
                        <div class="formbold-main-wrapper">
                            <!-- Author: FormBold Team -->
                            <!-- Learn More: https://formbold.com -->
                            <div class="formbold-form-wrapper">
                               <!-- <img src="your-image-here.jpg"> -->
                              <form action="https://formbold.com/s/FORM_ID" method="POST">
                                <div class="formbold-input-flex">
                                  <div>
                                    <label for="firstname" class="formbold-form-label"> First Name </label>
                                    <input
                                      type="text"
                                      name="firstname"
                                      id="firstname"
                                      placeholder=" first name"
                                      class="formbold-form-input"
                                    />
                                  </div>
                          
                                  <div>
                                    <label for="lastname" class="formbold-form-label"> Last Name </label>
                                    <input
                                      type="text"
                                      name="lastname"
                                      id="lastname"
                                      placeholder=" last name"
                                      class="formbold-form-input"
                                    />
                                  </div>
                                </div>
                          
                                <div class="formbold-input-flex">
                                  <div>
                                      <label for="email" class="formbold-form-label"> Email </label>
                                      <input
                                      type="email"
                                      name="email"
                                      id="email"
                                      placeholder="example@email.com"
                                      class="formbold-form-input"
                                      />
                                  </div>
                          
                                  <div>
                                      <label class="formbold-form-label">Gender</label>
                          
                                      <select class="formbold-form-input" name="occupation" id="occupation">
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                      </select>
                                  </div>
                                </div>
                          
                                <div class="formbold-mb-3 formbold-input-wrapp">
                                  <label for="phone" class="formbold-form-label"> Phone </label>
                          
                                  <div>
                                    <input
                                      type="text"
                                      name="areacode"
                                      id="areacode"
                                      placeholder="Area code"
                                      class="formbold-form-input formbold-w-45"
                                    />
                          
                                    <input
                                      type="text"
                                      name="phone"
                                      id="phone"
                                      placeholder="Phone number"
                                      class="formbold-form-input"
                                    />
                                  </div>
                                </div>
                          
                                <div class="formbold-mb-3">
                                  <label for="age" class="formbold-form-label"> Employee Position: </label>
                                  <input
                                    type="text"
                                    name="age"
                                    id="age"
                                    class="formbold-form-input"
                                  />
                                </div>
                          
                                <div class="formbold-mb-3">
                                  <label for="dob" class="formbold-form-label"> Starting day </label>
                                  <input type="date" name="dob" id="dob" class="formbold-form-input" />
                                </div>
                          
                                <div class="formbold-mb-3">
                                  <label for="address" class="formbold-form-label"> Address </label>
                          
                                  <input
                                    type="text"
                                    name="address"
                                    id="address"
                                    placeholder="Street address"
                                    class="formbold-form-input formbold-mb-3"
                                  />
                                  <input
                                    type="text"
                                    name="address2"
                                    id="address2"
                                    placeholder="Street address line 2"
                                    class="formbold-form-input"
                                  />
                                </div>
                          
                                <div class="formbold-form-file-flex">
                                  <label for="upload" class="formbold-form-label">
                                    Upload Picture
                                  </label>
                                  <input
                                    type="file"
                                    name="upload"
                                    id="upload"
                                    class="formbold-form-file"
                                  />
                                </div>
                          
                                <button class="formbold-btn">Add Item</button>
                              </form>
                            </div>
                          </div>
                        
                    </body> 
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>