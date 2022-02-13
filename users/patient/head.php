<?php

    session_start();
    require "../../includes/db_connect.inc.php";

    $uspec = $degree = $msg = "" ;
    $uid= null;

    $message = "";

    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;


    $uid = $_SESSION["uid"] ;
    $userspec = $_SESSION["spec"] ;
    $sql = "select * from patient_info where userid='$uid' ;";
    $results = mysqli_query($conn, $sql);




    $row= mysqli_fetch_array($results);

    if(isset($_POST['chs_btn'])) {


        $uid = $_POST['id'];




        $_SESSION["doctor_id"] = $uid;
        header("Location: patient_list_doctor_3.php");









    }

?>