<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();
$dao->getConnection();

$dbemail = 'bohn.aubrey.mhs@gmail.com';
$dbpassword = '1234';
$givenemail = $_POST['email'];
$givenpassword = $_POST['password'];

if(empty($givenemail) || empty($givenpassword)){
 $_SESSION['loginerror'] = "Please fill all form fields.";
 header("Location: localhost://login.php");
 exit;
}

if($dbemail==$givenemail && $dbpassword==$givenpassword){
 $_SESSION['auth'] = true;
 $_SESSION['loginsuccess'] = "You are now logged in";
 require_once 'header.php';
 echo "<div id=\"success\">".$_SESSION['loginsuccess']."</div>";
 require_once 'footer.php';
}else{
 $_SESSION['loginerror'] = "Invalid email or password.";
 header("Location: localhost://login.php");
 exit;
}

