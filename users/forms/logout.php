<?php

session_start();

session_unset();
setcookie("uid","",time()-10,"/","",0);
session_destroy();

header("Location: ../../forms/login.php");

?>
