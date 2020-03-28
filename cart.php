<?php require_once 'header.php';
session_start();?>
<div id="ct">
 <h1 id="carttitle">My Cart</h1>
 <hr>
 <table id="carttable">
  <tr>
    <th class="cart">Product</th>
    <th class="cart">Price</th>
    <th class="cart">Quantity</th>
    <th class="cart">Subtotal</th>
  </tr>
 </table>
 <table id="totaltable">
  <tr>
   <th class="ttheader"><strong>Subtotal</strong>:</th>
  </tr>
  <tr>
   <th class="ttheader"><strong>Est. Sales Tax:</strong></th>
  </tr>
  <tr>
   <th class="ttheader"><strong>Est. Shipping:</strong></th>
  </tr>
  <tr>
   <th id="total" class="ttheader"><strong>Estimated Total:</strong></th>
  </tr>
 </table>
 <input id="submitorder" type="submit">
</div>
<?php require_once 'footer.php'; ?>
