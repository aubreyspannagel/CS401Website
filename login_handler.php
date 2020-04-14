<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();

$givenemail = $_POST['email'];
$givenpassword = $_POST['password'];
$dbemail = $dao->userExists($givenemail);
$dbpassword = $dao->checkPassword($givenemail, $givenpassword);

if(empty($givenemail) || empty($givenpassword)){
 $_SESSION['auth'] = false;
 $_SESSION['loginerror'] = "Please fill all form fields.";
 header("Location: localhost://login.php");
 exit;
}else if(empty($dbemail)){
   $_SESSION['auth'] = false;
   $_SESSION['loginerror'] = "Looks like you're new! Please sign up.";
   header("Location: localhost://login.php");
   exit;  
}else if(empty($dbpassword)){
   $_SESSION['auth'] = false;
   $_SESSION['loginerror'] = "Incorrect password.";
   header("Location: localhost://login.php");
   exit;  
}else{
  $_SESSION['auth'] = true;
  $_SESSION['loginsuccess'] = "You are now logged in";
  header("Location: localhost://login.php");
  exit;  
}
