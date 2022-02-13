<?php

    session_start();
    require "../../includes/db_connect.inc.php";


    $uid = $_SESSION["uid"] ;
    $sql = "select * from doctor_info where userid='$uid' ;";
    $results = mysqli_query($conn, $sql);




    $row= mysqli_fetch_array($results);

    if(isset($_POST['edit_btn'])) {


        header("Location: doctor_update_profile.php");



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
    <link href="css/admin_edit_style.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar flex-md-nowrap p-0 shadow fixed-top" style="background-color: #99C2FF; color: white; ">
      <img src="../../images/logo.png" width="76px" height="76px">
      <a class="navbar-brand col-sm-8 mr-0" href="doctor_dashboard.php" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
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
          <a href="doctor_dashboard.php">Dashboard</a>
          <!-- for every dropdown, start here -->
          <button class="dropdown-btn" style="width: 100%;">Profile
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="doctor_profile.php">My Profile</a>
            <a href="doctor_update_profile.php">Update Profile</a>
            <a href="doctor_change_password.php">Change Password</a>

          </div>
          <!-- End here -->



            <button class="dropdown-btn" style="width: 100%;">Appointments
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="doctor_list_appointments.php">My Appointments</a>

          </div>





          <button class="dropdown-btn" style="width: 100%;">Patients
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">

            <a href="doctor_list_patients.php">My Patients</a>

          </div>


          <button class="dropdown-btn" style="width: 100%;">Requests
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">

            <a href="doctor_list_requests.php">My Requests</a>

          </div>






          <a href="feedback.php">Feedback</a>

          <!-- <a href="#contact">Search</a> -->
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My Profile</h1>
          </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

          <div class="container">
            <div class="row pt-5">

              <div class="col-5">
                Userid :
              </div>

              <div class="">
                <span> <?php echo $row['userid']; ?> </span>
              </div>

            </div>




            <div class="row pt-3">

              <div class="col-5">
                Fullname :
              </div>

              <div class="">
                <span> <?php echo $row['fullname']; ?> </span>
              </div>

            </div>



            <div class="row pt-3">

              <div class="col-5">
                Email :
              </div>

              <div class="">
                <span> <?php echo $row['email']; ?> </span>
              </div>

            </div>



            <div class="row pt-3">

              <div class="col-5">
                Phone :
              </div>

              <div class="">
                <span> <?php echo $row['phone']; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Address :
              </div>

              <div class="">
               <span> <?php echo $row['address']; ?> </span>
              </div>

            </div>






            <div class="row pt-3">

              <div class="col-5">
                Date of Birth :
              </div>

              <div class="">
                <span> <?php echo $row['dob']; ?> </span>
              </div>

            </div>
            <div class="row pt-3">

              <div class="col-5">
                Gender :
              </div>

              <div class="">
                <span> <?php echo $row['gender']; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Blood Group :
              </div>

              <div class="">
                <span> <?php echo $row['blood_group']; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Visiting Days :
              </div>

              <div class="">
                <span> <?php echo $row['days']; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Visiting Time :
              </div>

              <div class="">
                <span> <?php echo $row['time']; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Address :
              </div>

              <div class="">
                <span> <?php echo $row['address']; ?> </span>
              </div>

            </div>

             <div class="row pt-3">

              <div class="col-5">
                Consulting Fees :
              </div>

              <div class="">
                <span> <?php echo $row['fees']; ?> </span>
              </div>

            </div>
            <div class="row pt-3">

              <div class="col-5">
                Specialization :
              </div>

              <div class="">
                <span> <?php echo $row['specialization']; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Degrees :
              </div>

              <div class="">
                <span> <?php echo $row['degree']; ?> </span>
              </div>

            </div>








            <div class="row pt-5 pb-5 ">

              <div class="col-12 text-center align-items-center"  >
                  <button name="edit_btn" class="btn btn-primary btn-lg" type="submit" >Edit Profile</button>
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
