<?php session_start();
require_once 'Dao.php';
require_once 'header.php';

 $dao = new Dao();
 $dao->getConnection();
?>

<div id='contact'>

 <div class='navigation'>
  <a href='index.php'>Home</a> >
  <a href='contactus.php'>Contact Us</a>
 </div>

 <h2>Your submission has been recieved! We will contact you shortly.</h2>

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

<?php require_once 'footer.php'; ?>
