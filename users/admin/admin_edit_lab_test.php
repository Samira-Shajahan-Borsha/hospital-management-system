
<?php

    session_start();
    require "../../includes/db_connect.inc.php";

    $uspec = $degree = $msg = "" ;
    $uid= null;
    $tname = "";

    $message = "";

    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;

  //  $tname = $_SESSION['tname'];

   $uid = $_SESSION["user_id"];



    if(isset($_POST['add_btn'])) {

      if(isset($_POST['days']) !="")
          {
              echo 'checked';
              $days = $_POST['days'];

              foreach ($days as $chk1){
                  $dd .= $chk1.",";
              }


            }







        $timed = $_POST['stime'] . "-" . $_POST['etime'] ;
    mysqli_query($conn,"UPDATE lab_test_info set test_name='" . $_POST['tname'] . "', test_type='" . $_POST['ttype'] . "' , status='" . $_POST['status'] . "' ,price='" . $_POST['fees'] . "',time='" . $timed . "'  WHERE id='$uid'");
    $message = "Record Modified Successfully";
    }

    $sql = "select * from lab_test_info where id='$uid' ;";
    $results = mysqli_query($conn, $sql);

    $row= mysqli_fetch_array($results);

    $days = $row['days'];

    // $day = explode(",", $days);





    $times = $row['time'];

    $time = explode("-", $times);









































?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hospital Management System</title>


    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/admin_edit_style.css" rel="stylesheet">


  </head>

  <body>
    <nav class="navbar flex-md-nowrap p-0 shadow fixed-top" style="background-color: #99C2FF; color: white;">
      <img src="../../images/logo.png" width="76px" height="76px">
      <a class="navbar-brand col-sm-8 mr-0" href="admin_dashboard.php" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="aboutus.php" style="text-decoration: none;">About Us</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>

      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="../forms/logout.php" style="text-decoration: none;">Log out</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="support.php" style="text-decoration: none;">Support</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>



    </nav>

    <div class="container-fluid pb-5">

        <div class="sidenav">
          <a href="admin_dashboard.php">Dashboard</a>
          <!-- for every dropdown, start here -->
          <button class="dropdown-btn" style="width: 100%;">Admin
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_profile.php">Admin Profile</a>
            <a href="admin_change_password.php">Change Password</a>
          </div>
          <!-- End here -->

          <button class="dropdown-btn" style="width: 100%;">Doctors
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_list_doctor.php">Doctors List</a>
            <a href="admin_appointments_doctor.php">Doctors Appointments</a>
            <a href="admin_request_doctor.php">Doctors Requests</a>
            <a href="admin_add_doctor.php">Add a Doctor</a>
          </div>

          <button class="dropdown-btn" style="width: 100%;">Patients
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_list_patient.php">Patient List</a>
            <!-- <a href="admin_appointments_patient.php">Patients Appointments</a> -->
            <!-- <a href="admin_request_patient.php">Patient Requests</a> -->
            <a href="admin_add_patient.php">Add a Patient</a>
          </div>
          <button class="dropdown-btn" style="width: 100%;">Nurses
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_list_nurse.php">Nurse List</a>
            <a href="admin_appointments_nurse.php">Nurse Appointments</a>
            <!-- <a href="admin_request_nurse.php">Nurse Requests</a> -->
            <a href="admin_add_nurse.php">Add a Nurse</a>
          </div>

          <button class="dropdown-btn" style="width: 100%;">Diagnosis Centre
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_list_lab.php">Lab Test List</a>
            <!-- <a href="admin_request_lab.php">Lab Reports</a> -->
            <a href="admin_list_technicians.php">Lab Techinicians</a>
            <a href="admin_add_labTech.php">Add a Lab technician</a>
          </div>
          <button class="dropdown-btn" style="width: 100%;">Accountant
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_list_accountant.php">Accountant List</a>
            <a href="admin_log_payment.php">Payment log</a>
            <a href="admin_add_accountant.php">Add an Accountant</a>
          </div>

          <button class="dropdown-btn" style="width: 100%;">Blood Bank
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_list_bloodbank_staff.php">Blood Bank Staff List</a>
            <a href="admin_log_Blood.php">Blood Log</a>
            <a href="admin_add_bloodbank_staff.php">Add a Blood Bank Staff</a>
          </div>

          <button class="dropdown-btn" style="width: 100%;">Management
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_list_management_staff.php">Management Staff List</a>
            <a href="admin_add_management_staff.php">Add a Management Staff</a>
          </div>

          <button class="dropdown-btn" style="width: 100%;">Physio Therapy
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="admin_list_therapy.php">Therapy List</a>
            <a href="admin_list_physiotherapist.php">Physiotherapist List</a>
            <a href="admin_add_physiotherapist.php">Add a Physiotherapist</a>
          </div>

          <a href="feedback.php">Feedback</a>

          <!-- <a href="#contact">Search</a> -->
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 ">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit a Test</h1>
          </div>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="container">

















            <div class="row pt-3">

              <div class="col-5">
                Test Name :
              </div>

              <div class="">
                <input type="text" name="tname" value="<?php echo $row['test_name']; ?>" placeholder="Test Name"> <span style="color:red;"> <?php echo $userFnameErr; ?> </span>
              </div>

            </div>
            </div>


            <div class="row pt-3">

              <div class="col-5">
                Price :
              </div>

              <div class="">
                <input type="number" name="fees" value="<?php echo $row['price']; ?>" placeholder="Consulting Fees"> <span style="color:red;"> <?php echo $userFeesErr; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Test Type :
              </div>

              <div class="col-2">
                <select class="custom-select" id="inputGroupSelect01" name="ttype">
                <option selected disabled>Choose...</option>
                <option selected value="<?php echo htmlentities($row['test_type']);?>"><?php echo htmlentities($row['test_type']);?></option>
                <option value="Imaging"> Imaging</option>
                <option value="Pathology"> Pathology </option>



                </select>


              </div>

            </div>

            <div class="row pt-3">

              <div class="col-5">
                Status :
              </div>

              <div class="col-2">
                <select class="custom-select" id="inputGroupSelect01" name="status">
                 <option selected value="<?php echo htmlentities($row['status']);?>"><?php echo htmlentities($row['status']);?></option>
                <option value="Available"> Available</option>
                <option value="Currently Unavailable"> Currently Unavailable </option>
                <option value="Coming Soon"> Coming Soon </option>


                </select>
              </div>

            </div>




            <div class="row pt-3">

              <div class="col-5">
                Visiting Time :
              </div>

              <div class="col-2" style="white-space:nowrap;">
                Starting Time <input type="text" name="stime" onfocus="(this.type='time')" onblur="(this.type='text')" value="<?php echo $time[0]; ?>">  Ending Time<input type="text" name="etime" onfocus="(this.type='time')" onblur="(this.type='text')" value="<?php echo $time[1]; ?>">  <span style="color:red;"> <?php echo $userTimeErr; ?> </span>


              </div>

            </div>

            <div class="row pt-5 ">

              <div class="col-12 text-center align-items-center"  >
                  <button name="add_btn" class="btn btn-primary btn-lg" type="submit" >Edit Test</button>  <span style ="color:red;"><?php echo $message; ?></span>
            </div>
            </div>





            </div>
            </form>



        </main>
      </div>
    </div>


    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


    <script>

    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");

    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      } else {
      dropdownContent.style.display = "block";
      }
      });
    }


    </script>



  </body>

</html>
