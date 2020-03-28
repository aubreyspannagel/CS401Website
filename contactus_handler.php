<?php
session_start();
$dao = new Dao();
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$comment = $_GET['comment'];

if(!ctype_alpha($firstname) || !ctype_alpha($lastname)){
    echo "<div id=\"error\">Error, alpha characters only in the name </div>"
}
dao->insertComment();
header("Location: localhost://CS401/Website/contactus.php");
exit;
