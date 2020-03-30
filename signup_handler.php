<?php
session_start();
require_once 'Dao.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password =$_POST ['password'];

if(is_null($firstname) || is_null($lastname) || is_null($email) || is_null($password)){
 $_SESSION['message'] = "Please fill all form fields.";
 header("Location: http://localhost:8888/CS401/Website/signup.php");
 exit;
}else{
 $_SESSION['message'] = "Thank you for signing up!";
 header("Location: http://localhost:8888/CS401/Website/signup.php");
 exit;
}
unset($_POST);

?>
