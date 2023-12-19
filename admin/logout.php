<?php

session_start();

unset($_SESSION['username']); // delete the usernmae key

//session_destroy(); function will delete every session key we have created

header('Location:login.php'); 

?>