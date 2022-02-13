<?php 
session_start();
    require "../../includes/db_connect.inc.php";
    // require "test.php";

    $uspec = $degree = $msg = "" ;
    $uid= null;
    $did= null;

    $message = "";

    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $der = $ter =   $userGender = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;
    $userday = $usertime = $userdate = $dter = "" ;

    $uid = $_SESSION["uid"] ;
    $did = $_SESSION["doctor_id"] ;
    $sql = "select * from doctor_info where userid='$did' ;";
    $results = mysqli_query($conn, $sql);




    $row= mysqli_fetch_array($results);

    if(isset($_POST['nxt_btn'])) {

        if(empty($_POST['day']) and empty($_POST['time']) and empty($_POST['date'])){

            $der = "Day cannot be empty!";
            $ter = "Time cannot be empty!";
            $dter = "Date cannot be empty!";

        }

        else{

            $userspec = mysqli_real_escape_string($conn, $_POST['spec']);
            $userday = mysqli_real_escape_string($conn, $_POST['day']);
            $usertime = mysqli_real_escape_string($conn, $_POST['time']);
            $userdate = mysqli_real_escape_string($conn, $_POST['date']);
            $_SESSION["spec"] = $userspec;
            $_SESSION["day"] = $userday;
            $_SESSION["time"] = $usertime;
            $_SESSION["date"] = $userdate;
            header("Location: patient_list_doctor_5.php");


        }







    }


    if(isset($_POST['bck_btn'])) {

        header("Location: patient_list_doctor_3.php");



    }

    ?>