<?php 
session_start();
require_once 'header.php'; ?>
<div id='contact'>
  <div class='navigation'> 
    <a href='index.php'>Home</a> > 
    <a href='contactus.php'>Contact Us</a>
  </div>
  <div id=contact_form>
  <div id='cus'>Contact Us</div>
  <form action="contactus_handler.php" method="GET">
   First Name: <input class="forminput" type="text" name="firstname"><br>
   Last Name: <input class="forminput"type="text" name="lastname"><br>
   Email: <input class="forminput"type="text" name="email"><br>
   Comment: <input id="commenttext"class="forminput"type="textarea" name="comment"><br>
   <input class="submitbutton"type="submit">
   </form>
   </div>
</div>
<?php require_once 'footer.php'; ?>
