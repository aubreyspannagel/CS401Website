<html>
   <head>
      <title> Aubrey's Thrift Finds </title>
      <link rel="shortcut icon" href="https://aubreysthriftfinds.s3-us-west-1.amazonaws.com/favicon.png"/>
   </head>
   <link rel="stylesheet" type="text/css" href="stylesheat.css">
   <body>
   <div id="mainDiv">
     <div id="logo">  
      <img src="https://aubreysthriftfinds.s3-us-west-1.amazonaws.com/logo1.png" id="logo" alt="Logo" title="Aubrey's Thrift Finds"/>
     </div>
     <div id="menu">
       <ul>
         <li class="subpages"><a href="index.php"> Home </a></li>
         <li class="subpages"><a href="clothing.php"> Clothing </a></li>
	 <li class="subpages"><a href="decor.php"> Decor </a></li>
       </ul>     
     </div> 
     <a href="cart.php"id="cart"><img src="https://aubreysthriftfinds.s3-us-west-1.amazonaws.com/cart.jpg" alt="shoppingCartIcon" title="Shopping Cart"/> </a>
     <div id="loginSignup">
       <ul>
         <li class="log"><a href="signup.php"> Sign Up </a></li>
         
         <?php
          if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
           echo "<li class=\"log\"><a href=\"logout.php\"> Log Out </a></li>";
          }else{
           echo "<li class=\"log\"><a href=\"login.php\"> Log In </a></li>";
          }?>

       </ul>     
     </div>
   </div> 
</div>
