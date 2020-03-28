<?php require_once 'header.php'; ?>
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
       $lines = $dao->getClothingItems();
       if (is_null($lines)) {
         echo "There was an error.";
       }else{
          foreach ($lines as $line) {
            echo "<div> {$line['item_name']} </div>";
          }
       }?>
  </div>
</div>
<?php require_once 'footer.php'; ?>
