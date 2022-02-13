<?php

    session_start();
    require "../../includes/db_connect.inc.php";


    $uid = $_SESSION["uid"] ;
    $sql = "select * from lab_staff_info where userid='$uid' ;";
    $results = mysqli_query($conn, $sql);




    $row= mysqli_fetch_array($results);


    if(isset($_POST['edit_btn'])) {
        $id = $_POST['id'];


        // mysqli_query($conn,"UPDATE req_to_accountant set status='canceled by doctor'  WHERE id='$id'");
    // $message = "Record Modified Successfully";
    header("Location: lab_update_profile.php");



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
    <link href="css/admin_dashboard_style.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar flex-md-nowrap p-0 shadow" style="background-color: #99C2FF; color: white; ">
      <img src="../../images/logo.png" width="76px" height="76px">
      <a class="navbar-brand col-sm-8 mr-0" href="lab_dashboard.php" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
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
          <a href="lab_dashboard.php">Dashboard</a>
          <!-- for every dropdown, start here -->
          <button class="dropdown-btn" style="width: 100%;">Profile
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="lab_profile.php">My Profile</a>
            <a href="lab_update_profile.php">Update Profile</a>
            <a href="lab_change_password.php">Change Password</a>

          </div>
          <!-- End here -->



            <button class="dropdown-btn" style="width: 100%;">Tests
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="lab_list_appointments.php">Test Schedule</a>

          </div>





          <button class="dropdown-btn" style="width: 100%;">Patients
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">

            <a href="lab_list_patients.php">Patients</a>

          </div>









          <a href="../../feedback.php">Feedback</a>

          <!-- <a href="#contact">Search</a> -->
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">About Us</h1>
          </div>

          <div class="container">
           <p style="text-align:justify;">Our hospital management system organizes the stable functioning of daily tasks and interactions. This is a special tool to support the smooth operating of the software components that are vital for the clinic administration. This hospital records management software keeps a track of all the operations, stores the users’ data, performs its analysis and generates the reports. The medical institution is given the opportunity to collect its information in one place. It includes the patient and doctors’ records as well as the data concerning financial affairs, supply management, etc. Furthermore, it is only processed, classified and accessible for authorized users. The hospital database management system provides users with data security due to all regulations. Implementation of different functions empowers smooth and clear functionality.
The hospital records management software tracks the number of available doctors and their working hours. This allows to have the accurate schedule of each employee, manage your facility abilities and the supply chain in order to meet all the needs of the patients. It helps to arrange the appointments for both the staff and patients’ convenience.
Any clinic should store medical histories, test results, prescribed treatments, etc. The good hospital database management system will do it for you. All the details are securely stored for the access of the doctor and can be provided to the patients by their requests. They can receive the test results or medical reports by email or the user account. When the written form is required, printing will take only a few minutes for the clinic staff.
Another function is connected with managing finances. The hospital accounting software estimates the patients’ payments. It might remind the bank account where you can check performed operations and the billing status of each customer.
Moreover, the hospital record management system is capable of generating regular reports of the tracked data including healthcare, staff efficiency, finances, inventory, and facility utilization, etc. This greatly helps the clinic authorities in making reasonable policy decisions. Therefore, any of these functions are designed to make the clinic management system easy to use, comprehensive, powerful and reliable. </p>
          </div>

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
