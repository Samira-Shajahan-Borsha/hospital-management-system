<?php

require "includes/db_connect.inc.php";


    //$uid = $_SESSION["uid"] ;
    $sql = "select * from admin_info;";
    $results = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($results);
    // echo $results['userid'];
    if($row == null){

        

        header("Location: forms/admin_reg.php");


    }



?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index_style.css">
    <title>Home Page</title>
</head>

<body>
    <div id="bg-slide">
    <nav>

        <div class="logo-image">
            <img src="images/logo.png">
        </div>
        <label class ="logo"> Hospital Management System</label>

            <ul>
                <li> <a href="forms/aboutus.php">About us</a></li>
                <li> <a href="support.php">Support</a></li>
                <li> <a href="forms/doctor_list_1.php">Doctor's List</a></li>
                <li> <a href="forms/login.php">Sign in</a></li>
                <li> <a href="forms/registration.php">Sign up</a></li>
                
            </ul>

    </nav>

    <div class="title">
        <h1>Health Care for Everyone</h1>
    </div>

    <div class="title-bottom">
        <h3>Medical Services at your hands</h3>
    </div>

    <div class="Button">
        <a href="forms/registration.php" class="btn">Get Started</a>
    </div>

    </div>

    
    
</body>

</html>