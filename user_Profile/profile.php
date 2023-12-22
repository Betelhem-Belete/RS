<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Haylu</title>

  <!-- Custom fonts for this template-->
  <link href="../admins/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../css/emp.css" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="../admins/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Haylu real state</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->

      <!-- Divider -->
      <hr class="sidebar-divider" />
      <div class="sidebar-heading">Profile Tools</div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Back to Home</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="./profile.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Edit Profile</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="./favorite.php">
          <i class="fas fa-fw fa-table"></i>
          <span> Favourite</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./myScadule.php">
          <i class="fas fa-fw fa-table"></i>
          <span>My Scadule</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          </form>
          <a href="logout.php" class="btn btn-primary">Log out</a>

          <!-- Topbar Navbar -->

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <body>
            <div class="formbold-main-wrapper">
              <!-- Author: FormBold Team -->
              <!-- Learn More: https://formbold.com -->
              <div class="formbold-form-wrapper">
                <!-- <img src="your-image-here.jpg"> -->
                <form action="" method="POST">
                  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                    rel="stylesheet">
                  <div class="container">
                    <div class="row flex-lg-nowrap">
                      <div class="col">
                        <div class="row">
                          <div class="col mb-3">
                            <div class="card">
                              <div class="card-body">
                                <div class="e-profile">
                                  <div class="row">
                                    <div class="col-12 col-sm-auto mb-3">
                                      <div class="mx-auto" style="width: 140px;">
                                        <div class="d-flex justify-content-center align-items-center rounded"
                                          style="height: 140px; background-color: rgb(233, 236, 239);">
                                          <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                                        <p class="mb-0">@johnny.s</p>
                                        <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                                        <div class="mt-2">
                                          <button class="btn btn-primary" type="button">
                                            <i class="fa fa-fw fa-camera"></i>
                                            <span>Change Photo</span>
                                          </button>
                                        </div>
                                      </div>

                                    </div>

                                  </div>
                                  <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                  </ul>
                                  <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="myForm">
                                      <div class="formbold-input-flex">
                                          <div>
                                            <label for="country" class="formbold-form-label">First Name</label>
                                            <input type="text" name="fname" id="country" placeholder="first name"
                                              class="formbold-form-input" />
                                            <p id="fameerror" class="error"></p>

                                          </div>
                                          <div>
                                            <label for="city" class="formbold-form-label">Last Name</label>
                                            <input type="text" name="lname" id="city" placeholder="last name"
                                              class="formbold-form-input" />
                                            <p id="lnameerror" class="error"></p>

                                          </div>
                                        </div>
                                        <div class="formbold-input-flex">
                                          <div>
                                            <label for="country" class="formbold-form-label">Country</label>
                                            <input type="text" name="country" id="country" placeholder="Country"
                                              class="formbold-form-input" />
                                            <p id="countryError" class="error"></p>

                                          </div>
                                          <div>
                                            <label for="city" class="formbold-form-label">City</label>
                                            <input type="text" name="city" id="city" placeholder="City"
                                              class="formbold-form-input" />
                                            <p id="cityError" class="error"></p>

                                          </div>
                                        </div>

                                        <div class="formbold-input-flex">
                                          <div>
                                            <label for="email" class="formbold-form-label">Email</label>
                                            <input type="email" name="email" id="email" placeholder="example@email.com"
                                              class="formbold-form-input" />
                                            <p id="emailError" class="error"></p>
                                          </div>
                                          <div>
                                            <label for="password" class="formbold-form-label">Password</label>
                                            <input type="password" name="password" id="password"
                                              placeholder="Enter Password" class="formbold-form-input" />
                                            <p id=""></p>
                                          </div>
                                          <div>
                                            <label for="password" class="formbold-form-label">New Password</label>
                                            <input type="password" name="newPassword" id="password"
                                              placeholder="Enter Password" class="formbold-form-input" />
                                            <p id=""></p>
                                          </div>
                                        </div>
                                        <div>
                                          <label class="formbold-form-label">Gender</label>
                                          <select class="formbold-form-input" name="gender" id="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                          </select>
                                        </div>
                                        <div class="formbold-mb-3 formbold-input-wrapp">
                                          <label for="phone1" class="formbold-form-label">Phone 1</label>
                                          <div>
                                            <input type="text" name="areacode1" id="areacode1" placeholder="Area code"
                                              class="formbold-form-input formbold-w-45" />
                                            <input type="text" name="phone1" id="phone1" placeholder="Phone number"
                                              class="formbold-form-input" />
                                          </div>
                                        </div>
                                        <div class="formbold-mb-3 formbold-input-wrapp">
                                          <label for="phone2" class="formbold-form-label">Phone 2</label>
                                          <div>
                                            <input type="text" name="areacode2" id="areacode2" placeholder="Area code"
                                              class="formbold-form-input formbold-w-45" />
                                            <input type="text" name="phone2" id="phone2" placeholder="Phone number"
                                              class="formbold-form-input" />
                                          </div>
                                        </div>
                                        <div class="formbold-mb-3">
                                          <label for="address" class="formbold-form-label">Address</label>
                                          <input type="text" name="address" id="address" placeholder="Street address"
                                            class="formbold-form-input formbold-mb-3" />
                                          <input type="text" name="address2" id="address2"
                                            placeholder="Street address line 2" class="formbold-form-input" />
                                        </div>

                                        <input class="formbold-btn" type="submit">
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
                  </div>
                </form>
              </div>
            </div>

          </body>
          <?php
          include '../config/config.php'
          ?>
          <?php
// Assuming you have a valid database connection
// You may need to adjust database connection details and table name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input values
    $fname = isset($_POST['fname']) ? htmlspecialchars(trim($_POST['fname'])) : '';
    $lname = isset($_POST['lname']) ? htmlspecialchars(trim($_POST['lname'])) : '';
    $country = isset($_POST['country']) ? htmlspecialchars(trim($_POST['country'])) : '';
    $city = isset($_POST['city']) ? htmlspecialchars(trim($_POST['city'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : ''; // Hash the password
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $areacode1 = isset($_POST['areacode1']) ? htmlspecialchars(trim($_POST['areacode1'])) : '';
    $phone1 = isset($_POST['phone1']) ? htmlspecialchars(trim($_POST['phone1'])) : '';
    $areacode2 = isset($_POST['areacode2']) ? htmlspecialchars(trim($_POST['areacode2'])) : '';
    $phone2 = isset($_POST['phone2']) ? htmlspecialchars(trim($_POST['phone2'])) : '';
    $address = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';
    $address2 = isset($_POST['address2']) ? htmlspecialchars(trim($_POST['address2'])) : '';

    // Additional validation if needed

    // Insert data into the database
    try {
        $stmt = $conn->prepare("UPDATE users SET fname = :fname, lname = :lname, country = :country, city = :city, email = :email, password = :password, gender = :gender, areacode1 = :areacode1, phone1 = :phone1, areacode2 = :areacode2, phone2 = :phone2, address = :address, address2 = :address2 WHERE id = :id");

        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':areacode1', $areacode1);
        $stmt->bindParam(':phone1', $phone1);
        $stmt->bindParam(':areacode2', $areacode2);
        $stmt->bindParam(':phone2', $phone2);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':address2', $address2);

        $stmt->execute();

        echo "User added successfully!";
    } catch (PDOException $e) {
        echo "Error Code: " . $e->getCode() . "<br>";
        echo "Error Message: " . $e->getMessage() . "<br>";
        echo "File: " . $e->getFile() . "<br>";
        echo "Line: " . $e->getLine() . "<br>";

        // Optionally, log the error to a file or perform additional error handling

        // Terminate the script execution
        die("An error occurred while inserting data. Please try again later.");
    } finally {
        // Close the database connection
        $conn = null;
    }
}
?>

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
  <script src="../admins/vendor/jquery/jquery.min.js"></script>
  <script src="../admins/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../admins/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../admins/js/sb-admin-2.min.js"></script>

</body>

</html>