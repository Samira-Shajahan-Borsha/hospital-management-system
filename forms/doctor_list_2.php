<?php

    session_start();
    require "../includes/db_connect.inc.php";

    $uspec = $degree = $msg = "" ;
    $uid= null;

    $message = "";
    
    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;
    $userspec = $_SESSION["spec"] ;
    
   

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
    <link href="css/index_style.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar flex-md-nowrap p-0 shadow fixed-top" style="background-color: #99C2FF; color: white; ">
      <img src="../images/logo.png" width="76px" height="76px">
      <a class="navbar-brand col-sm-6 mr-0" href="../index.html" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="aboutus.php" >About Us</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>

      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="doctor_list_1.php" >Doctor's List</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="../support.php" >Support</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>
       <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="login.php" >Sign in</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="registration.php" >Sign up</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>



    </nav>

    <div class="container-fluid">

        

        <main role="main" class="col-md-9  col-lg-10 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap  pt-3 pb-2 mb-3 border-bottom" style="margin-top:90px;">
            <h1 class="h2">Doctors List</h1>
          </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

          <div class="container">
            <div class="row row-content ">

              <div class="col-12">
                
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      
                      <th scope="col">Fullname</th>
                      <!-- <th scope="col">Blood Group</th> -->
                      <!-- <th scope="col">Gender</th> -->
                      <!-- <th scope="col">Date of Birth</th> -->
                      <th scope="col">Email</th>
                      <!-- <th scope="col">Phone</th> -->
                      <th scope="col">Consulting Fees</th>
                      <th scope="col">Specialization</th>
                      <th scope="col">Visiting Days</th>
                      <th scope="col">Visiting Time</th>
                      <!-- <th scope="col">Address</th> -->
                      <th scope="col">Degree</th>
                      <!-- <th scope="col">Choose</th> -->
                      
                    </tr>
                  </thead>
                  <tbody>

                  

                  <?php
                    $sql=mysqli_query($conn,"select * from doctor_info where specialization='$userspec'");
                    $cnt=1;
                    while($row=mysqli_fetch_array($sql))
                    {
                        $uid = $row['userid'];
                    ?>
                    <tr>
                      
                      <td class="center"><?php echo $cnt;?>.</td>
                        <!-- <td class="hidden-xs"><?php echo $row['userid'];?></td> -->
                        <!-- <td><?php echo $row['userid'];?></td> -->
                        <td><?php echo $row['fullname'];?> </td>
                        <!-- <td><?php echo $row['blood_group'];?></td> -->
                        <!-- <td><?php echo $row['gender'];?> </td> -->
                        <!-- <td><?php echo $row['dob'];?></td> -->
                        <td><?php echo $row['email'];?> </td>
                        <!-- <td><?php echo $row['phone'];?></td> -->
                        <td><?php echo $row['fees'];?> </td>
                        <td><?php echo $row['specialization'];?> </td>
                        <td><?php echo $row['days'];?></td>
                        <td><?php echo $row['time'];?> </td>
                        <!-- <td><?php echo $row['address'];?></td> -->
                        <td><?php echo $row['degree'];?> </td>

                    
                        
                      
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
