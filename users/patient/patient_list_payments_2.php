<?php

    session_start();
    require "../../includes/db_connect.inc.php";

    $uspec = $degree = $msg = "" ;
    $uid= null;

    $message = "";

    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $genderErr = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;
    $uPassErr = $oPassErr = $cPassErr =  $opwd = $pwd = $cpwd = $npwd = $uPassToDb = "";

    $uid = $_SESSION["uid"] ;
    $errExists = false;
    $sector = "" ;

    $sector = $_SESSION["sector"];



    if(isset($_POST['nxt_btn'])) {


        if(empty($_POST['sector'])){
        $genderErr = "This Field cannot be empty!";


        // $errExists = 1;
        }else{
        $usersector = mysqli_real_escape_string($conn, $_POST['sector']);
        // $userBlood = mysqli_real_escape_string($conn, $_POST['blood_group']);

        $_SESSION["sector"] =  $usersector;

        header("Location: patient_list_payments_2.php");

        }





    }




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

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/patient_css_cng.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar flex-md-nowrap p-0 shadow fixed top" style="background-color: #99C2FF; color: white;">
      <img src="../../images/logo.png" width="76px" height="76px">
      <a class="navbar-brand col-sm-8 mr-0" href="patient_dashboard.php" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="aboutus.php" >About Us</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>

      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="../forms/logout.php" >Log out</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="support.php" >Support</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>



    </nav>

    <div class="container-fluid">

        <div class="sidenav">
          <a href="patient_dashboard.php">Dashboard</a>
          <!-- for every dropdown, start here -->
          <button class="dropdown-btn" style="width: 100%;">Profile
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="patient_profile.php">My Profile</a>
            <a href="patient_update_profile.php">Update Profile</a>
            <a href="patient_change_password.php">Change Password</a>

          </div>
          <!-- End here -->

          <button class="dropdown-btn" style="width: 100%;">Doctors
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="patient_list_doctor.php">Doctors List</a>

          </div>


          <button class="dropdown-btn" style="width: 100%;">Appointments
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="patient_list_appoitment.php">My Appointments</a>

          </div>


          <button class="dropdown-btn" style="width: 100%;">Blood Bank
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="patient_request_blood.php">Request for a Blood</a>
             <a href="patient_list_request_blood.php">Blood Requests</a>

          </div>

          <button class="dropdown-btn" style="width: 100%;">Diagnosis Centre
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="patient_list_lab.php">Lab Test List</a>
            <a href="patient_list_lab_reports.php">My Lab Reports</a>
            <a href="patient_list_request_lab.php">My Lab Requests</a>

          </div>


          <button class="dropdown-btn" style="width: 100%;">Physio Therapy
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="patient_list_physio_therapy.php">Physio Therapy List</a>
            <a href="patient_list_request_therapy.php">Physio Therapy Requests</a>

          </div>


           <button class="dropdown-btn" style="width: 100%;">Payment
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="patient_list_payments.php">My Payments</a>

          </div>



          <a href="feedback.php">Feedback</a>

          <!-- <a href="#contact">Search</a> -->
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Payments</h1>
          </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

          <div class="container">
            <div class="row row-content align-items-center">

              <div class="col-12">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>

                      <!-- <th scope="col">Patient's Name</th> -->
                      <!-- <th scope="col">Blood Group</th> -->
                      <!-- <th scope="col">Gender</th> -->
                      <!-- <th scope="col">Date of Birth</th> -->
                      <!-- <th scope="col">Time</th> -->
                      <!-- <th scope="col">Date</th> -->
                      <th scope="col">Payment Date and Time</th>
                      <th scope="col">Amount</th>
                      <!-- <th scope="col">Status</th> -->
                      <!-- <th scope="col">Actions</th> -->




                    </tr>
                  </thead>
                  <tbody>



                  <?php
                    if($sector == "Doctor"){ $sql=mysqli_query($conn,"select * from req_to_accountant where status='confirmed' or status='visited' or status='canceled by doctor'");}
                    if($sector == "Diagnosis Centre"){ $sql=mysqli_query($conn,"select * from req_to_accountant_test where status='confirmed' or status='tested' or status='canceled by doctor'");}
                    if($sector == "Physio Therapy"){ $sql=mysqli_query($conn,"select * from req_to_accountant_therapy where status='confirmed' or status='done' or status='canceled by doctor'");}

                    $cnt=1;
                    while($row=mysqli_fetch_array($sql))
                    {
                        // $uid = $row['userid'];

                        if($row['status'] == "confirmed") { $color="green";}  if($row['status'] == "available") { $color="green";} if($row['status'] == "waiting") { $color="#cccc00";} if($row['status'] == "rejected") { $color="red";}
                    ?>
                    <tr>

                      <td class="center"><?php echo $cnt;?>.</td>
                        <!-- <td class="hidden-xs"><?php echo $row['userid'];?></td> -->
                        <!-- <td><?php echo $row['userid'];?></td> -->
                        <!-- <td><?php echo $row['pname'];?> </td> -->
                        <td><?php echo $row['p_date_time'];?></td>
                        <!-- <td><?php echo $row['day'];?> </td> -->
                        <!-- <td><?php echo $row['ti'];?></td> -->
                        <td><?php if($sector == "Doctor"){echo $row['doctor_fees'];} else{echo $row['price'];} ?> </td>

                        <!-- <td style="color:<?php echo $color;?>;"><?php echo $row['status'];?> </td> -->
                        <!-- <td><?php echo $row['address'];?></td> -->
                        <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> -->
                        <!-- <td style="white-space:nowrap;"><button name="vst_btn" type="submit" class="btn btn-success" onClick="return confirm('Are you sure you want to proceed ?')">Available<button name="cncl_btn" type="submit" class="btn btn btn-danger ml-1" >Not Available<button name="dne_btn" type="submit" class="btn btn-info ml-1" >Donated<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/></td> </form> -->





                    </tr>
                    <?php
                    $cnt=$cnt+1;
						}?>



                  </tbody>
                </table>
              </div>

            </div>

          </div>
        </form>

        </main>
      </div>
    </div>


    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>


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
      this.classList.toggleClass("rotate");
      } else {
      dropdownContent.style.display = "block";
      }
      });
    }



    </script>



  </body>

</html>
