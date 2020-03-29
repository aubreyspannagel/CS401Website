<?php session_start();
require_once 'Dao.php';
$dao = new Dao();
$dao->getConnection();
?>
<div>handler</div>
