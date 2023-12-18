<?php require "header.php"; ?>

<!-- Page Wrapper -->
<div id="wrapper">
<style>
    .error{
        color: red;
        font-size: 14px;
        margin-top: 6px;
    }
</style>
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
                <span>Employee Tables</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="addEmp.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Add Employee</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="addCategory.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Manage Catagoray</span></a>
        
        </li>
        <li class="nav-item">

            <a class="nav-link" href="addProperty.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Manage Property</span></a>
        </li>
        <li class="nav-item">

            <a class="nav-link" href="scadule.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Assign Scadule</span></a>
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
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
                        <h2> Employee Adding Section</h2>
                <hr style="border: solid 1px rgb(137, 137, 228);">
                            <!-- <img src="your-image-here.jpg"> -->
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="myForm">
                                <div class="formbold-input-flex">
                                    <div>
                                        <label for="firstname" class="formbold-form-label">First Name</label>
                                        <input type="text" name="firstname" id="firstname" placeholder="First Name"
                                            class="formbold-form-input" />
                                            <p id="firstnameError" class="error"></p>

                                    </div>

                                    <div>
                                        <label for="lastname" class="formbold-form-label">Last Name</label>
                                        <input type="text" name="lastname" id="lastname" placeholder="Last Name"
                                            class="formbold-form-input" />
                                            <p id="lastnameError" class="error"></p>

                                    </div>
                                    <div>
                                        <label for="middlename" class="formbold-form-label">Middle Name</label>
                                        <input type="text" name="middlename" id="middlename" placeholder="Middle Name"
                                            class="formbold-form-input" />
                                            <p id="middlenameError" class="error"></p>

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
                                        <label for="qualification" class="formbold-form-label">Qualification</label>
                                        <input type="text" name="qualification" id="qualification"
                                            placeholder="Qualification" class="formbold-form-input" />
                                            <p id="qualificationError" class="error"></p>

                                    </div>
                                    <div>
                                        <label for="salary" class="formbold-form-label">Salary</label>
                                        <input type="text" name="salary" id="salary" placeholder="Salary"
                                            class="formbold-form-input" />
                                            <p id="salaryError" class="error"></p>
                                    </div>
                                    <div>
                                        <label for="position" class="formbold-form-label">Position</label>
                                        <input type="text" name="position" id="position" placeholder="Position"
                                            class="formbold-form-input" />
                                            <p id="positionError" class="error"></p>
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
                                <div class="formbold-mb-3 formbold-input-wrapp">
                                    <label for="emergencyContact" class="formbold-form-label">Emergency Contact</label>
                                    <div>
                                        <input type="text" name="emergencyareacode" id="emergencyContact1"
                                            placeholder="Area code" class="formbold-form-input formbold-w-45" />
                                        <input type="text" name="emergencyphone" id="emergencyContact"
                                            placeholder="Phone number" class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="formbold-mb-3">
                                    <label for="status" class="formbold-form-label">Status</label>
                                    <input type="text" name="status" id="status" placeholder="Employee Status"
                                        class="formbold-form-input" />
                                </div>
                                <div class="formbold-mb-3">
                                    <label for="age" class="formbold-form-label">Age</label>
                                    <input type="date" name="age" id="age" placeholder="Employee Age"
                                        class="formbold-form-input" />
                                </div>
                                <div class="formbold-mb-3">
                                    <label for="address" class="formbold-form-label">Address</label>
                                    <input type="text" name="address" id="address" placeholder="Street address"
                                        class="formbold-form-input formbold-mb-3" />
                                    <input type="text" name="address2" id="address2" placeholder="Street address line 2"
                                        class="formbold-form-input" />
                                </div>
                                <div class="formbold-form-file-flex">
                                    <label for="uploadEmployeePic" class="formbold-form-label">Upload Picture</label>
                                    <input type="file" name="uploadEmployeePic" id="uploadEmployeePic"
                                        class="formbold-form-file" />
                                </div>
                                <input class="formbold-btn" type="submit">
                            </form>
                        </div>
                    </div>  <!-- Include your footer or additional scripts here -->
                </body>
                <?php
                include '../config/config.php';
                ?>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $firstname = $_POST['firstname'];

                    // try {
                    //     // host
                    //     define('HOSTNAME', 'localhost');

                    //     // DBNAME
                    //     define('DBNAME', 'haylu');

                    //     // user
                    //     define('USER', 'root');

                    //     // pass
                    //     define('PASS', '');

                    //     $conn = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . ";", USER, PASS);
                    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    //     // Check if the connection is successful
                    //     if ($conn) {
                    //         echo 'Database connected successfully  ';
                    //     } else {
                    //         echo 'Database connection failed';
                    //     }
                    // } catch (PDOException $e) {
                    //     die("Database connection failed: " . $e->getMessage());
                    // }



                    // Function to validate input using regular expressions
                    function validateInput($input, $pattern)
                    {
                        return preg_match($pattern, $input);
                    }
                    try {
                        // Check if the "employees" table exists
                        $checkTable = $conn->query("SHOW TABLES LIKE 'employees'");
                        $tableExists = $checkTable->rowCount() > 0;

                        // If the "employees" table does not exist, create it
                        if (!$tableExists) {
                            $createTableQuery = "CREATE TABLE employees (
                id INT AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(255),
                lastname VARCHAR(255),
                middlename VARCHAR(255),
                country VARCHAR(255),
                city VARCHAR(255),
                qualification VARCHAR(255),
                salary DECIMAL(10, 2),
                position VARCHAR(255),
                email VARCHAR(255),
                password VARCHAR(255),
                gender VARCHAR(10),
                areacode1 VARCHAR(3),
                phone1 VARCHAR(20),
                areacode2 VARCHAR(3),
                phone2 VARCHAR(20),
                emergencyareacode VARCHAR(3),
                emergencyphone VARCHAR(20),
                status VARCHAR(20),
                age DATE,
                address VARCHAR(255),
                address2 VARCHAR(255)
            )";
                            $conn->exec($createTableQuery);
                        }


                        // Define regular expressions for validation
                        $namePattern = '/^[a-zA-Z\-\' ]+$/'; // Only letters, hyphens, apostrophes, and spaces allowed
                        $emailPattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                        $passwordPattern = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'; // Minimum eight characters, at least one letter and one number
                        $phonePattern = '/^\d{3}$/'; // Three-digit phone area code (customize as needed)
                        $statusPattern = '/^(active|inactive)$/i'; // "active" or "inactive" case-insensitive
                
                        // Validate and sanitize input values
                        $firstname = isset($_POST['firstname']) ? htmlspecialchars(trim($_POST['firstname'])) : '';
                        $lastname = isset($_POST['lastname']) ? htmlspecialchars(trim($_POST['lastname'])) : '';
                        $middlename = isset($_POST['middlename']) ? htmlspecialchars(trim($_POST['middlename'])) : '';
                        $country = isset($_POST['country']) ? htmlspecialchars(trim($_POST['country'])) : '';
                        $city = isset($_POST['city']) ? htmlspecialchars(trim($_POST['city'])) : '';
                        $qualification = isset($_POST['qualification']) ? htmlspecialchars(trim($_POST['qualification'])) : '';
                        $salary = isset($_POST['salary']) ? htmlspecialchars(trim($_POST['salary'])) : '';
                        $position = isset($_POST['position']) ? htmlspecialchars(trim($_POST['position'])) : '';
                        $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
                        $password = isset($_POST['password']) ? htmlspecialchars(trim($_POST['password'])) : '';
                        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
                        $areacode1 = isset($_POST['areacode1']) ? htmlspecialchars(trim($_POST['areacode1'])) : '';
                        $phone1 = isset($_POST['phone1']) ? htmlspecialchars(trim($_POST['phone1'])) : '';
                        $areacode2 = isset($_POST['areacode2']) ? htmlspecialchars(trim($_POST['areacode2'])) : '';
                        $phone2 = isset($_POST['phone2']) ? htmlspecialchars(trim($_POST['phone2'])) : '';
                        $emergencyareacode = isset($_POST['emergencyareacode']) ? htmlspecialchars(trim($_POST['emergencyareacode'])) : '';
                        $emergencyphone = isset($_POST['emergencyphone']) ? htmlspecialchars(trim($_POST['emergencyphone'])) : '';
                        $status = isset($_POST['status']) ? htmlspecialchars(trim($_POST['status'])) : '';
                        $age = isset($_POST['age']) ? htmlspecialchars(trim($_POST['age'])) : '';
                        $address = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';
                        $address2 = isset($_POST['address2']) ? htmlspecialchars(trim($_POST['address2'])) : '';

                        // Perform validation
                        // if (!validateInput($firstname, $namePattern)) {
                        //     // echo "<script>document.getElementById('firstnameError').textContent = 'Invalid first name format';</script>";
                        // }
                        
                        // if (!validateInput($lastname, $namePattern)) {
                        //     // echo "<script>document.getElementById('lastnameError').textContent = 'Invalid last name format';</script>";
                        //     die("Invalid last name format");
                        // }
                        
                        // if (!validateInput($middlename, $namePattern)) {
                        //     // echo "<script>document.getElementById('middlenameError').textContent = 'Invalid middle name format';</script>";
                        //     die("Invalid middle name format");
                        // }
                        
                        // if (!validateInput($country, $namePattern)) {
                        //     // echo "<script>document.getElementById('countryError').textContent = 'Invalid country format';</script>";
                        //     die("Invalid country format");
                        // }
                        
                        // if (!validateInput($city, $namePattern)) {
                        //     // echo "<script>document.getElementById('cityError').textContent = 'Invalid city format';</script>";
                        //     die("Invalid city format");
                        // }
                        
                        // if (!validateInput($qualification, $namePattern)) {
                        //     // echo "<script>document.getElementById('qualificationError').textContent = 'Invalid qualification format';</script>";
                        //     die("Invalid qualification format");
                        // }
                        
                        // if (!is_numeric($salary) || $salary < 0) {
                        //     // echo "<script>document.getElementById('salaryError').textContent = 'Invalid salary format';</script>";
                        //     die("Invalid salary format");
                        // }
                        
                        // if (!validateInput($position, $namePattern)) {
                        //     // echo "<script>document.getElementById('positionError').textContent = 'Invalid position format';</script>";
                        //     die("Invalid position format");
                        // }
                        
                        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        //     // echo "<script>document.getElementById('emailError').textContent = 'Invalid email format';</script>";
                        //     die("Invalid email format");
                        // }
                        // if (!validateInput($password, $passwordPattern)) {
                        //     die("Invalid password format");
                        // }

                        // if (!validateInput($areacode1, $phonePattern) || !validateInput($phone1, '/^\d{7,}$/')) {
                        //     die("Invalid phone 1 format");
                        // }

                        // if (!validateInput($areacode2, $phonePattern) || !validateInput($phone2, '/^\d{7,}$/')) {
                        //     die("Invalid phone 2 format");
                        // }

                        // if (!validateInput($emergencyareacode, $phonePattern) || !validateInput($emergencyphone, '/^\d{7,}$/')) {
                        //     die("Invalid emergency phone format");
                        // }

                        // if (!validateInput($status, $statusPattern)) {
                        //     // echo "<script>document.getElementById('emailError').textContent = 'Invalid status format';</script>";

                        //     die("Invalid status format");
                        // }


                        // Add more validation checks as needed
                
                        // Insert data into the database
                        $stmt = $conn->prepare("INSERT INTO employees (firstname, lastname, middlename, country, city, qualification, salary, position, email, password, gender, areacode1, phone1, areacode2, phone2, emergencyareacode, emergencyphone, status, age, address, address2) VALUES (:firstname, :lastname, :middlename, :country, :city, :qualification, :salary, :position, :email, :password, :gender, :areacode1, :phone1, :areacode2, :phone2, :emergencyareacode, :emergencyphone, :status, :age, :address, :address2)");

                        $stmt->bindParam(':firstname', $firstname);
                        $stmt->bindParam(':lastname', $lastname);
                        $stmt->bindParam(':middlename', $middlename);
                        $stmt->bindParam(':country', $country);
                        $stmt->bindParam(':city', $city);
                        $stmt->bindParam(':qualification', $qualification);
                        $stmt->bindParam(':salary', $salary);
                        $stmt->bindParam(':position', $position);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':password', $password); // Note: Passwords should be hashed in a real application
                        $stmt->bindParam(':gender', $gender);
                        $stmt->bindParam(':areacode1', $areacode1);
                        $stmt->bindParam(':phone1', $phone1);
                        $stmt->bindParam(':areacode2', $areacode2);
                        $stmt->bindParam(':phone2', $phone2);
                        $stmt->bindParam(':emergencyareacode', $emergencyareacode);
                        $stmt->bindParam(':emergencyphone', $emergencyphone);
                        $stmt->bindParam(':status', $status);
                        $stmt->bindParam(':age', $age);
                        $stmt->bindParam(':address', $address);
                        $stmt->bindParam(':address2', $address2);

                        // Execute the statement
                        $stmt->execute();

                        echo "Employee added successfully!";
                        echo "<script>alert('Employee added successfully');</script>";
                    } catch (PDOException $e) {
                        echo "Error Code: " . $e->getCode() . "<br>";
                        echo "Error Message: " . $e->getMessage() . "<br>";
                        echo "File: " . $e->getFile() . "<br>";
                        echo "Line: " . $e->getLine() . "<br>";

                        // Optionally, log the error to a file or perform additional error handling
                
                        // Terminate the script execution
                        die("An error occurred. Please try again later.");
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