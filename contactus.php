<?php 
session_start();
require_once 'header.php'; 
?>

<div id='contact'>
 
 <div class='navigation'> 
  <a href='index.php'>Home</a> > 
  <a href='contactus.php'>Contact Us</a>
 </div>

 <div id=contact_form>

  <div id='cus'>Contact Us</div>

   <form action="contactus_handler.php" method="get">
    <label for="firstname">First Name:</label>
    <input class="forminput" type="text" name="firstname"> <br>

    <label for="lastname">Last Name:</label>
    <input class="forminput" type="text" name="lastname"> <br>

    <label for="email">Email:</label>
    <input class="forminput" type="text" name="email"> <br>

    <label for="comment">Comment:</label>
    <input id="commenttext" class="forminput" type="text" name="comment"> <br>
    <input class="submitbutton" type="submit" value="Submit">
   </form>
  </div>
 </div>
</div>
<?php require_once 'footer.php'; ?>
