<?php

    session_start();
    require "../../includes/db_connect.inc.php";
 $uspec = $degree = $msg = "" ;
    $uid= null;

    $message = "";

    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;


    $uid = $_SESSION["uid"] ;
    $sql = "select * from nurse_info where userid='$uid' ;";
    $results = mysqli_query($conn, $sql);




    $row= mysqli_fetch_array($results);

    if(isset($_POST['edit_btn'])) {
        // $id = $_POST['id'];


        mysqli_query($conn,"UPDATE nurse_info set fullname='" . $_POST['fname'] . "', blood_group='" . $_POST['blood_group'] . "', gender='" . $_POST['gender'] . "' ,email='" . $_POST['email'] . "',phone='" . $_POST['phone'] . "',dob='" . $_POST['dob'] . "',address='" . $_POST['address'] . "'  WHERE userid='$uid'");
    $message = "Record Modified Successfully";
    header("Refresh:2");




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
      <a class="navbar-brand col-sm-8 mr-0" href="nurse_dashboard.php" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
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
          <a href="nurse_dashboard.php">Dashboard</a>
          <!-- for every dropdown, start here -->
          <button class="dropdown-btn" style="width: 100%;">Profile
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="nurse_profile.php">My Profile</a>
            <a href="nurse_update_profile.php">Update Profile</a>
            <a href="nurse_change_password.php">Change Password</a>

          </div>
          <!-- End here -->



            <button class="dropdown-btn" style="width: 100%;">Schedule
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="nurse_list_schedule.php">My Schedule</a>

          </div>















          <a href="feedback.php">Feedback</a>

          <!-- <a href="#contact">Search</a> -->
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Schedule</h1>
          </div>
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="container">
            <div class="row row-content align-items-center">

              <div class="col-12">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>

                      <!-- <th scope="col">Test Name</th> -->
                      <!-- <th scope="col">Payment Method</th> -->
                      <!-- <th scope="col">Sender Number</th> -->
                      <!-- <th scope="col">Trx ID</th> -->
                      <!-- <th scope="col">Price</th> -->
                      <!-- <th scope="col">Blood Group</th> -->
                      <!-- <th scope="col">Gender</th> -->
                      <!-- <th scope="col">Date of Birth</th> -->
                     <th scope="col">Duty Date</th>
                      <th scope="col">Duty Time</th>
                      <th scope="col">Ward No.</th>





                    </tr>
                  </thead>
                  <tbody>



                  <?php
                    $sql=mysqli_query($conn,"select * from appointments_nurse where nid='$uid'");
                    $cnt=1;
                    while($row=mysqli_fetch_array($sql))
                    {
                      // if($row['status'] == "confirmed") { $color="green";}  if($row['status'] == "tested") { $color="green";} if($row['status'] == "waiting") { $color="#cccc00";} if($row['status'] == "rejected") { $color="red";}
                        // $uid = $row['userid'];
                    ?>
                    <tr>

                      <td class="center"><?php echo $cnt;?>.</td>
                        <!-- <td class="hidden-xs"><?php echo $row['userid'];?></td> -->
                        <!-- <td><?php echo $row['userid'];?></td> -->
                        <!-- <td><?php echo $row['tname'];?> </td> -->
                        <!-- <td><?php echo $row['payment_method'];?> </td> -->
                        <!-- <td><?php echo $row['sender_number'];?> </td> -->
                        <!-- <td><?php echo $row['trx_id'];?> </td> -->
                        <!-- <td><?php echo $row['price'];?> </td> -->
                        <td><?php echo $row['d_date'];?></td>
                        <td><?php echo $row['d_time'];?> </td>
                        <td><?php echo $row['ward'];?></td>






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
