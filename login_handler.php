<?php
session_start();
require_once Dao.php;
$dao = new Dao();
$email = $_POST['email'];
$password = $_POST['password'];
header("location: http://CS401/Website/index.php");exit;
}?>
