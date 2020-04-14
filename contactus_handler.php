<?php 
session_start();
require_once 'Dao.php';
$dao = new Dao();

$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$commentlengthmax = 500;
 
if(empty($fn) || empty($ln) || empty($email) || empty($comment)){
  $_SESSION['contacterror'] = "Please fill all form fields.";
}

if(!ctype_alpha($fn) || !ctype_alpha($ln)){
  $_SESSION['contacterror'] = "Only alpha characters allowed in name.";
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
 $_SESSION['contacterror'] = "Invalid email.";
}

if(strlen($comment) > $commentlengthmax){
 $_SESSION['contacterror'] = "Comment is too long.";
}else{
 $dao->saveComment($fn,$ln,$email,$comment);
 $_SESSION['contactmessage'] = "Your submission has been recieved! We will contact you shortly.";
}

header("Location: localhost://contactus.php");
exit;
