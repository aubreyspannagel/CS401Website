<?php
session_start();

$dbemail = 'bohn.aubrey.mhs@gmail.com';
$dbpassword = '1234';
$givenemail = $_POST['email'];
$givenpassword = $_POST['password'];

if(empty($givenemail) || empty($givenpassword)){
 header("Location: localhost://login.php");
 exit;
}

if($dbemail==$givenemail && $dbpassword==$givenpassword){
 $_SESSION['auth'] = true;
 $_SESSION['loginsuccess'] = "You are now logged in";
 require_once 'header.php';
 echo "<div id=\"success\">".$_SESSION['loginsuccess']."</div>";
 require_once 'footer.php';
}

?>
