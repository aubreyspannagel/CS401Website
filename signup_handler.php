<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password =$_POST ['password'];
$minpasswordlength = 8;
$checkuser = $dao->userExists($email);
if(empty($firstname) || empty($lastname) || empty($email) || empty($password)){
 $_SESSION['signuperror'] = "Please fill all form fields.";
}else if(!ctype_alpha($firstname) || !ctype_alpha($lastname)){
 $_SESSION['signuperror'] = "Only alpha characters allowed in name.";
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
 $_SESSION['signuperror'] = "Invalid email.";
}else if(!empty($checkuser)){
 $_SESSION['signuperror'] = "Email exits. Try logging in.";
}else if(strlen($password) < $minpasswordlength){
 $_SESSION['signuperror'] = "Password must be at least 8 characters.";
}else{
 $_SESSION['signupmessage'] = "Thank you for signing up!";
 $dao->signup($firstname,$lastname,$email,$password);
}

unset($_POST);
header("Location: localhost://signup.php");
?>
