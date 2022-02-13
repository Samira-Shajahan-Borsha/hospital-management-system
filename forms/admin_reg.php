<?php 


require "../includes/db_connect.inc.php";

    $uspec = $degree = $msg = "" ;
    $uid= null;

    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = "" ;

    $uId = $uPass = "";
  $uNameErr = $uPassErr = $uPassInDB = "";

    $sql = "select max(userid) from admin_info;";
      if($results = mysqli_query($conn, $sql)){

        while($row = mysqli_fetch_row($results)){
          $tempid = $row[0];

          if($tempid == null){

            $uid = "9001" ;
          }


          else{
            $uid = $tempid + 1;
          }


        }
      }


      if(isset($_POST['reg_btn'])){


        
            
          

          if(empty($_POST['password'])){
          $userPassErr = "Please Enter Password";
          
          }else{
            $Pass = mysqli_real_escape_string($conn, $_POST['password']);
            $userid = mysqli_real_escape_string($conn, $_POST['uid']);
            $uPassToDb = password_hash($Pass, PASSWORD_DEFAULT);

            $sqlUserInsert = "insert into admin_info (userid,password)
            values ('$userid','$uPassToDb');";

        if(mysqli_query($conn, $sqlUserInsert)){

        echo '<script>alert("Registered Successfully")</script>'; 
        header("Location: ../index.php");


        }

        else{

         echo '<script>alert("Something Went Wrong")</script>'; 
        }
          }



      }









?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/login_style.css">
    <title>Login Page</title>
</head>

<body>
  <form name="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <div class="login-box">
   
        <h1>Admin Registration</h1>
        



        <div class="textbox">
            <i class="fas fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Userid" name="uid" readonly="readonly" value="<?php echo $uid;  ?>">
            <span style="color:red;"><?php echo $uNameErr;  ?></span>
        </div>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="password" name="password" >
            <span style="color:red;"><?php echo$uPassErr; ?></span>
            

        </div>

        <input class="btn" type="submit" name="reg_btn" value="Sign Up">

        <!-- <h4>Dont have an account ? <a href="registration.php">Create here</a> </h4> -->
    </div>
</form>
<script>
  var my_form = document.forms.myForm;

			my_form.onsubmit = function(){
				var f_name_val = my_form.uid.value;
				var l_name_val = my_form.password.value;
				

				if(f_name_val == "" || l_name_val == "") {
            
				    alert("Fields Must Be field Out");
				    return false;
            
				  }

				
			};
  </script>


</body>

</html>