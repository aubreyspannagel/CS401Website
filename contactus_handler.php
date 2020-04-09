<?php 
session_start();

$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$email = $_POST['email'];
$comment = $_POST['comment'];
 
  if(empty($fn) || empty($ln) || empty($email) || empty($comment)){
    $_SESSION['contacterror'] = "Please fill all form fields.";
  }else{
    $_SESSION['contactmessage'] = "Your submission has been recieved! We will contact you shortly.";
  }

header("Location: localhost://contactus.php");
exit;
