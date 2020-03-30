<?php
session_start();
require_once 'Dao.php';

$dbemail = 'bohn.aubrey.mhs@gmail.com';
$dbpassword = '1234';
$givenemail = $_POST['email'];
$givenpassword = $_POST['password'];

if(is_null($givenemail) || is_null($givenpassword)){
 $_SESSION['message'] = "Fields cannot be left empty";
 header("Location: http://localhost:8888/CS401/Website/login.php");
 exit;
}

if($dbemail == $givenemail && $dbpassword == $givenpassword){
 $_SESSION['auth'] = true;
 header("Location: http://localhost:8888/CS401/Website/index.php");
 exit;
}else{
 $_SESSION['auth'] = false;
 $_SESSION['message'] = "Invalid email or password";
 header("Location: http://localhost:8888/CS401/Website/login.php");
 exit;
}

unset(_$POST);
