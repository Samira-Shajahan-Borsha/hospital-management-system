<?php

    session_start();
    require "../../includes/db_connect.inc.php";

        $uspec = $degree = $msg = "" ;
    $uid= null;

    $message = "";

    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;


    $uid = $_SESSION["uid"] ;
    $sql = "select * from accountant_info where userid='$uid' ;";
    $results = mysqli_query($conn, $sql);




    $row= mysqli_fetch_array($results);

    if(isset($_POST['add_btn'])) {










    mysqli_query($conn,"UPDATE accountant_info set fullname='" . $_POST['fname'] . "', blood_group='" . $_POST['blood_group'] . "', gender='" . $_POST['gender'] . "' ,email='" . $_POST['email'] . "',phone='" . $_POST['phone'] . "',dob='" . $_POST['dob'] . "',address='" . $_POST['address'] . "'  WHERE userid='$uid'");
    $message = "Record Modified Successfully";
    header("Refresh:3");
    }

    if(isset($_POST['edit_btn'])) {


        header("Location: accountant_update_profile.php");



    }


    if(isset($_POST['del_btn'])) {


        if(mysqli_query($conn,"delete from accountant_info where userid = '$uid'")){

                    echo '<script>alert("User Deleted")</script>';

                    header("Location: ../../forms/login.php");

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
                Userid :
              </div>

              <div class="">
                <input type="number" name="userid" value="<?php echo $uid; ?>" readonly="readonly" placeholder="userid">  <span style="color:red;"> <?php echo $userIdErr; ?> </span>
              </div>

            </div>




            <div class="row pt-3">

              <div class="col-5">
                Fullname :
              </div>

              <div class="">
                <input type="text" name="fname" value="<?php echo $row['fullname']; ?>" > <span style="color:red;"> <?php echo $userFnameErr; ?> </span>
              </div>

            </div>



            <div class="row pt-3">

              <div class="col-5">
                Email :
              </div>

              <div class="">
                <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="email"> <span style="color:red;"> <?php echo $userEmailErr; ?> </span>
              </div>

            </div>



            <div class="row pt-3">

              <div class="col-5">
                Phone :
              </div>

              <div class="">
                <input type="number" name="phone" value="<?php echo $row['phone']; ?>" placeholder="phone"> <span style="color:red;"> <?php echo $userPhoneErr; ?> </span>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Address :
              </div>

              <div class="">
                <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="Address"> <span style="color:red;"> <?php echo $userAddErr; ?> </span>
              </div>

            </div>






            <div class="row pt-3">

              <div class="col-5">
                Date of Birth :
              </div>

              <div class="">
                <input type="text" placeholder="Date of Birth" value="<?php echo $row['dob']; ?>" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" > <span style="color:red;"> <?php echo $userDobErr; ?> </span>
              </div>

            </div>
            <div class="row pt-3">

              <div class="col-5">
                Gender :
              </div>

              <div class="col-2">
                <select class="custom-select" id="inputGroupSelect01" name="gender">

                <option selected value="<?php echo htmlentities($row['gender']);?>"><?php echo htmlentities($row['gender']);?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>

                </select>
              </div>

            </div>


            <div class="row pt-3">

              <div class="col-5">
                Blood Group :
              </div>

              <div class="col-2">
                <select class="custom-select" id="inputGroupSelect01" name="blood_group">
                <option selected value="<?php echo htmlentities($row['blood_group']);?>"><?php echo htmlentities($row['blood_group']);?></option>
                <option value="A+"> A+</option>
                <option value="A-"> A-</option>
                <option value="B+"> B+</option>
                <option value="B-"> B-</option>
                <option value="AB+"> AB+</option>
                <option value="AB-"> AB-</option>
                <option value="O+"> O+</option>
                <option value="O-"> O-</option>

                </select>
              </div>

            </div>








            <div class="row pt-5 pb-5 ">

              <div class="col-12 text-center align-items-center"  >
                  <button name="add_btn" class="btn btn-primary btn-lg" type="submit" >Update </button> <span style="color:red;"> <?php echo $message; ?> </span>  <button name="del_btn" class="btn btn-primary btn-lg ml-5" type="submit" onClick="return confirm('Are you sure you want to delete your profile ?')">Delete Profile</button>
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
