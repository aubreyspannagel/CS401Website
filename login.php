<?php require_once 'header.php';
session_start();
?>

<div id="login">
  <div class="navigation"> 
    <a href="index.php"> Home </a> > 
    <a href="login.php"> Login </a>
  </div>
  <div id="lgn">Login</div>

  <?php
   if(isset($_SESSION['message'])){
     echo "<div id=\"error\">{$_SESSION}['message']</div>";
     unset($_SESSION['message']);
   }?>
  <form action="login_handler.php" method="POST">
   Email: <input class="forminput"type="text" name="email"><br>
   Password: <input class="forminput"type="password" name="password"><br>
   <input class="submitbutton"type="submit"name="submit">
   </form>
</div>
<?php require_once 'footer.php'; ?>
