<?php 
require_once 'header.php'; 
require_once 'Dao.php';
$dao = new Dao();
?>

<div id="clothing"> 
  
  <div class="navigation"> 
    <a href="index.php"> Home </a> > 
    <a href="clothing.php"> Clothing </a>
  </div>
  
  <h1 id="clothingtitle"><strong>Clothing</strong></h1>
  
  <div id="clth">
    <ul>
      <li class="clothingmenu"><a href="clothing.php">Tops</a></li>
      <li class="clothingmenu"><a href="clothing.php">Bottoms</a></li>
      <li class="clothingmenu"><a href="clothing.php">Outerwear</a></li>
      <li class="clothingmenu"><a href="clothing.php">Dresses</a></li>
      <li class="clothingmenu"><a href="clothing.php">Shoes</a></li>
      <li class="clothingmenu"><a href="clothing.php">Accessories</a></li>
    </ul>
  </div>
  
  <div class="content"> 
   <?php 
     $items = $dao->getClothing();
     if(empty($items)){
      echo "<div> Currently out of stock.</div>";
     }else{
       foreach($items as $clothing){
         echo "<img class=\"clothingurl element\" src=\"{$clothing['image_url']}\" alt=\"{$clothing['item_name']}\">";
         echo "<div class=\"element\">{$clothing['item_name']}</div>";
         echo "<div class=\"element\">{$clothing['size']}</div>";
         echo "<div class=\"element\">{$clothing['price']}</div>";
         echo "<div class=\"element\">{$clothing['item_description']}</div>";
       }
     }?>
  </div>

</div>

<?php require_once 'footer.php'; ?>
