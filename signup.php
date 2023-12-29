<?php require "config/config.php"; ?>
<?php
  // require('../config/config.php');
  if(isset($_POST['submit'])){
    if(empty($_POST['US_FNAME']) OR empty($_POST['US_LNAME']) OR empty($_POST['US_EMAIL']) OR empty($_POST['US_PASSWORD']) OR empty($_POST['confirm_password'])){
      echo "<script>alert('some inputs are empty'); </script>";
    }else{
      $US_FNAME = $_POST['US_FNAME'];
      $US_LNAME = $_POST['US_LNAME'];
      $US_EMAIL = $_POST['US_EMAIL'];
      $US_PASSWORD = ($_POST['US_PASSWORD']);
      $confirm_password = ($_POST['confirm_password']);
      // checking if the password is atleast 8 characters long
      if(strlen($US_PASSWORD) < 8){
        echo "<script>alert('password must be atleast 8 characters!');</script>";
      }
      else if(preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $US_EMAIL)){
        echo "<script>alert('Please insert valid email!');</script>";
      }
      else if(strcmp($US_PASSWORD, $confirm_password) !== 0) {
        echo "<script>alert('password and confirm password are not equal!');</script>";
      }
      else{
        // $checkTable = $conn->query("SHOW TABLES LIKE 'USERS'");
        //  $tableExists = $checkTable->rowCount() > 0;

        // // If the "employees" table does not exist, create it
        // if (!$tableExists) {
        //     $createTableQuery = "CREATE TABLE USERS (
        //         US_ID CHAR(10) NOT NULL PRIMARY KEY,
        //         US_FNAME VARCHAR(25) NOT NULL,
        //         US_LNAME VARCHAR(25) NOT NULL,
        //         US_AGE INT,
        //         US_SEX VARCHAR(6),
        //         US_CELLPHONE1 CHAR(17),
        //         US_CELLPHONE2 CHAR(17),
        //         US_COUNTRY VARCHAR(25),
        //         US_CITY VARCHAR(25),
        //         US_SUBCITY VARCHAR(25),
        //         US_HOUSENUMBER CHAR(10),
        //         US_EMAIL VARCHAR(50),
        //         US_PASSWORD VARCHAR(50),
        //         CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        //       )";
        //     $conn->execute($createTableQuery);
        //   }
        //prepare our stament and insert it into database table
          $insert = $conn->prepare("INSERT INTO users(US_FNAME, US_LNAME, US_EMAIL, US_PASSWORD) VALUES (:US_FNAME, :US_LNAME, :US_EMAIL, :US_PASSWORD)");// prepare allow us 
          $insert->execute([ //excuting parameters using associative array
            'US_FNAME' => $US_FNAME,
            'US_LNAME'=>$US_LNAME,
            'US_EMAIL' => $US_EMAIL,
            'US_PASSWORD' => password_hash($US_PASSWORD, PASSWORD_DEFAULT),
            // 'mypassword' => $mypassword,
          ]);
          header("location: login.php");
      }
    } 
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>User - Register</title>

    <!-- Custom fonts for this template-->
    <link
      href="/admins/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="admins/css/sb-admin-2.min.css" rel="stylesheet"/>
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block">
                                <img src="images/realestatelogin.jpg" alt="" style='width:500px; height: 490px;'>
            </div>
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form action="" method="POST" class="user">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input
                        type="text"
                        name="US_FNAME"
                        class="form-control form-control-user"
                        id="exampleFirstName"
                        placeholder="First Name"
                      />
                    </div>
                    <div class="col-sm-6">
                      <input
                        type="text"
                        name="US_LNAME"
                        class="form-control form-control-user"
                        id="exampleLastName"
                        placeholder="Last Name"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      name="US_EMAIL"
                      class="form-control form-control-user"
                      id="exampleInputEmail"
                      placeholder="Email Address"
                    />
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input
                        type="password"
                        name="US_PASSWORD"
                        class="form-control form-control-user"
                        id="exampleInputPassword"
                        placeholder="Password"
                      />
                    </div>
                    <div class="col-sm-6">
                      <input
                        type="password"
                        name="confirm_password"
                        class="form-control form-control-user"
                        id="confirmPassword"
                        placeholder="Confirm Password"
                      />
                    </div>
                  </div>
                  <a href="login.php">
                    <input
                      type="submit"
                      name="submit"
                      class="btn btn-primary btn-user btn-block"
                      value="Register Account"
                    />
                  </a>
                  <hr />
                  <!-- <button type='submit' class="btn btn-google btn-user btn-block"
                    onclick="window.location = ''"><i class="fab fa-google fa-fw"></i> Register with Google</button> -->
                  <!-- <a
                    href="index.php"
                    class="btn btn-google btn-user btn-block"
                    onclick="window.location = ''"
                  >
                    <i class="fab fa-google fa-fw"></i> Register with Google
                  </a> -->
                  <!-- <a
                    href="index.html"
                    class="btn btn-facebook btn-user btn-block"
                  >
                    <i class="fab fa-facebook-f fa-fw"></i> Register with
                    Facebook
                  </a> -->
                </form>
                <!-- <hr /> -->
                <div class="text-center">
                  <a class="small" href="forgot-password.php"
                    >Forgot Password?</a>
                </div>
                <div class="text-center">
                  Already have an account?
                  <a class="small" href="login.php">Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
