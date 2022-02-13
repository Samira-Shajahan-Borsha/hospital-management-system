<?php

    session_start();
    require "../includes/db_connect.inc.php";

    $uspec = $degree = $msg = "" ;
    $uid= null;

    $message = "";
    
    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;

    if(isset($_POST['nxt_btn'])) {

        if(empty($_POST['spec'])){

            $spec = "Specialties cannot be empty!";

        }

        else{

            $userspec = mysqli_real_escape_string($conn, $_POST['spec']);
            $_SESSION["spec"] = $userspec;
            header("Location: doctor_list_2.php");


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
    <link href="css/index_style.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar flex-md-nowrap p-0 shadow fixed-top" style="background-color: #99C2FF; color: white; ">
      <img src="../images/logo.png" width="76px" height="76px">
      <a class="navbar-brand col-sm-6 mr-0" href="../index.php" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>

      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="<?php echo $_SERVER['PHP_SELF']; ?>" >Doctor's List</a></li>
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

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top:90px;">
            <h1 class="h2">Choose A Specialization</h1>
          </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

          <div class="container">
            <div class="row pt-5">

              <div class="col-5">
                Specialization :
              </div>

              <div class="col-2">
                <select class="custom-select" id="inputGroupSelect01" name="spec" onchange="showspec(this.value)">
                <option selected disabled>Choose...</option>
                <option value="Allergists/Immunologist" <?php if($uspec == "Allergists/Immunologist") echo "selected" ?>>Allergists/Immunologist</option>
                <option value="Anesthesiologist"<?php if($uspec == "Anesthesiologist") echo "selected" ?>>Anesthesiologist</option>
                 <option value="Colon and Rectal Surgeon"<?php if($uspec == "Colon and Rectal Surgeon") echo "selected" ?>>Colon and Rectal Surgeon</option>
                <option value="Neurologist"<?php if($uspec == "Neurologist") echo "selected" ?>>Neurologist</option>
                 <option value="Obstetrician/gynecologist"<?php if($uspec == "Obstetrician/gynecologist") echo "selected" ?>>Obstetrician/gynecologist</option>
                <option value="Ophthalmologist"<?php if($uspec == "Ophthalmologist") echo "selected" ?>>Ophthalmologist</option>
                 <option value="Medicine"<?php if($uspec == "Medicine") echo "selected" ?>>Medicine</option>
                <option value="Dermatologist"<?php if($uspec == "Dermatologist") echo "selected" ?>>Dermatologist</option>
                 <option value="Gastroenterologist"<?php if($uspec == "Gastroenterologist") echo "selected" ?>>Gastroenterologist</option>
                <option value="Eye Specialist"<?php if($uspec == "Eye Specialist") echo "selected" ?>>Eye Specialist</option>
                 <option value="Ear-Nose-Throat(ENT) Specialist"<?php if($uspec == "Ear-Nose-Throat(ENT) Specialist") echo "selected" ?>>Ear-Nose-Throat(ENT) Specialist</option>
                <option value="Dentist"<?php if($uspec == "Dentist") echo "selected" ?>>Dentist</option>
                 <option value="Critical care Medicine Specialist"<?php if($uspec == "Critical care Medicine Specialist") echo "selected" ?>>Critical care Medicine Specialist</option>
                <option value="Cardiologist"<?php if($uspec == "Cardiologist") echo "selected" ?>>Cardiologist</option>

                </select>
              </div>
              <span style="color:red;"> <?php echo $spec ;?></span>

            </div>

            


            

           

            <div class="row pt-5 pb-5 " id="test">

              <div class="col-12 text-center align-items-center"  >
                  <!-- <button name="nxt_btn" class="btn btn-primary btn-lg" type="submit" > Next </button>  -->
            </div>
            </div>


            





          </div>
        </form>

        </main>
      </div>
    </div>


    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


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


    function showspec(str) {
                                            var xhttp;
                                            if (str == "") {
                                                document.getElementById("test").innerHTML = "";

                                            }
                                            xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function () {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById("test").innerHTML = this.responseText;
                                                }
                                            };
                                            xhttp.open("GET", "test2.php?q=" + str, true);
                                            xhttp.send();


                                        }



    </script>



  </body>

</html>
