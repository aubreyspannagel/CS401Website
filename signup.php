<?php require_once 'header.php';
session_start();?>
<div id="signup">
  <div class="navigation"> 
    <a href="index.php"> Home </a> > 
    <a href="signup.php"> Sign Up </a>
  </div>
  <div id="snup">Sign Up</div>
  <form method="get" action="signup_handler.php">
    First Name: <input class="forminput"type="text" name="firstname"><br>
    Last Name: <input class="forminput"type="text" name="lastname"><br>
    Email: <input class="forminput"type="text" name="email"><br>
    Password: <input class="forminput"type="password" name="password"><br>
    <input class="submitbutton"type="submit">
    </form>
</div>
<?php require_once 'footer.php'; ?>
