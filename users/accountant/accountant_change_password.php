<?php

    session_start();
    require "../../includes/db_connect.inc.php";
         $uspec = $degree = $msg = "" ;
    $uid= null;

    $message = "";

    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;
    $uPassErr = $oPassErr = $cPassErr =  $opwd = $pwd = $cpwd = $npwd = $uPassToDb = "";

    $uid = $_SESSION["uid"] ;
    $sql = "select * from accountant_info where userid='$uid' ;";
    $results = mysqli_query($conn, $sql);




    $row= mysqli_fetch_array($results);

    if(isset($_POST['cng_btn'])) {

    if(empty($_POST['opwd']) and empty($_POST['npwd']) and empty($_POST['cpwd'])){
      $oPassErr = "Password cannot be empty!";
      $uPassErr = "Password cannot be empty!";
      $cPassErr = "Password cannot be empty!";

    }

    else{
      $opwd = mysqli_real_escape_string($conn,$_POST['opwd']);
      $npwd = mysqli_real_escape_string($conn,$_POST['npwd']);
      $cpwd = mysqli_real_escape_string($conn,$_POST['cpwd']);

      $sql = "select password from accountant_info where userid = '$uid';";

      $results = mysqli_query($conn, $sql);

      $row= mysqli_fetch_array($results);


      $uPassInDB = $row['password'];

        if(password_verify($opwd, $uPassInDB)){

          if($npwd != $cpwd){
          $cPassErr = "Passwords doesn't match!";

          }

        else{

            $PassToDb = password_hash($npwd, PASSWORD_DEFAULT);

            mysqli_query($conn,"UPDATE accountant_info set password='" . $PassToDb . "'  WHERE userid='$uid'");
            $message = "Password Changed Successfully";


        }

    }

    else{
          $oPassErr = "Wrong password!";



        }

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
    <link href="css/admin_dashboard_style.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar flex-md-nowrap p-0 shadow" style="background-color: #99C2FF; color: white; ">
      <img src="../../images/logo.png" width="76px" height="76px">
      <a class="navbar-brand col-sm-8 mr-0" href="accountant_dashboard.php" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
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
          <a href="accountant_dashboard.php">Dashboard</a>
          <!-- for every dropdown, start here -->
          <button class="dropdown-btn" style="width: 100%;">Profile
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="accountant_profile.php">My Profile</a>
            <a href="accountant_update_profile.php">Update Profile</a>
            <a href="accountant_change_password.php">Change Password</a>

          </div>
          <!-- End here -->



            <button class="dropdown-btn" style="width: 100%;">Doctors
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="accountant_list_doctor_requests.php">Doctor Appointment Requests</a>

          </div>





          <button class="dropdown-btn" style="width: 100%;">Diagnosis Centre
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">

            <a href="accountant_list_request_lab.php">Lab Test Requests</a>

          </div>


          <button class="dropdown-btn" style="width: 100%;">Physio Therapy
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">

            <a href="accountant_list_request_therapy.php">Physio Therapy Requests</a>

          </div>






          <a href="feedback.php">Feedback</a>

          <!-- <a href="#contact">Search</a> -->
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

          <div class="container">
             <div class="row pt-5">

              <div class="col-5">
                Old Password :
              </div>

              <div class="">
                <input type="password" name="opwd" value=""  placeholder="Old Password">  <span style="color:red;"> <?php echo $oPassErr; ?> </span>
              </div>

            </div>




            <div class="row pt-3">

              <div class="col-5">
                New Password :
              </div>

              <div class="">
                <input type="password" name="npwd" value="" placeholder="New Password"> <span style="color:red;"> <?php echo $uPassErr; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Confirm New Password :
              </div>

              <div class="">
                <input type="password" name="cpwd" value="" placeholder="Confirm New Password"> <span style="color:red;"> <?php echo $cPassErr; ?> </span>
              </div>

            </div>







            <div class="row pt-5 ">

              <div class="col-12 text-center align-items-center"  >
                  <button name="cng_btn" class="btn btn-primary btn-lg" type="submit" onClick="return confirm('Are you sure you want to change your password ?')">Change Password </button>
            </div>
            </div>


            <div class="row pt-5 ">

              <div class="col-12 text-center align-items-center"  >
                  <span style="color:red;"> <?php echo $message; ?> </span>
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
