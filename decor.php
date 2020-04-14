<?php 
require_once 'header.php'; 
require_once 'Dao.php';
$dao = new Dao();
?>
<div id="decor">
  <div class="navigation"> 
    <a href="index.php"> Home </a> > 
    <a href="decor.php"> Decor </a>
  </div>
  <h1 id="decortitle"><strong>Decor</strong></h1>
  <div id="dcr">
    <ul>
      <li class="decormenu"><a href="decor.php">Living Room</a></li>
      <li class="decormenu"><a href="decor.php">Kitchen</a></li>
      <li class="decormenu"><a href="decor.php">Bedroom</a></li>
      <li class="decormenu"><a href="decor.php">Office</a></li> 
     </ul>
  </div>
  <div class="content">
   <?php 
     $items = $dao->getDecor();
     if(empty($items)){
       echo "<div> Currently out of stock.</div>";
     }else{
       foreach($items as $decor){
         echo "<img class=\"decorurl element\" src=\"{$decor['image_url']}\" alt=\"{$decor['decor_name']}\">";
         echo "<div class=\"element\">{$clothing['decor_name']}</div>";
         echo "<div class=\"element\">{$clothing['dimensions']}</div>";
         echo "<div class=\"element\">{$clothing['price']}</div>";
         echo "<div class=\"element\">{$clothing['item_description']}</div>";
       }
     }?>
  </div>
</div>
<?php require_once 'footer.php'; ?>
