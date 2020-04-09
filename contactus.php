<?php 
session_start();
require_once 'header.php'; 
?>

<div id='contact'>
 
 <div class='navigation'> 
  <a href='index.php'>Home</a> > 
  <a href='contactus.php'>Contact Us</a>
 </div>

 <?php 
   if(isset($_SESSION['contacterror'])){
     echo "<div>".$_SESSION['contacterror']."</div>";
     unset($_SESSION['contacterror']);
   }else if(isset($_SESSION['contactmessage'])){
     echo "<div>".$_SESSION['contactmessage']."</div>";
     unset($_SESSION['contactmessage']);
   }
 ?>

 <div id=contact_form>

  <div id='cus'>Contact Us</div>

   <form action="contactus_handler.php" method="post">
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
<?php require_once 'footer.php';
 ?>
