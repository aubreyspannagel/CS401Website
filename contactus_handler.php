<?php
session_start();
$dao = new Dao();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$comment = $_POST['comment'];

if(!ctype_alpha($firstname) || !ctype_alpha($lastname)){
    echo "<div id=\"error\">Error, alpha characters only in the name </div>"
}
dao->insertComment();
header("Location: localhost://CS401/Website/contactus.php");
exit;
