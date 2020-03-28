<?php
session_start();
require_once Dao.php;
$dao = new Dao();
$email = $_POST['email'];
$password = $_POST['password'];

$user = dao->doesCustomerExist($email, $password);

if($user = false){
  header("Location: localhost://CS401/Website/login.php");
  exit;
}else{
  header("location: localhost://CS401/Website/index.php");
  exit;
}
?>
