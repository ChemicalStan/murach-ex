<?php 
include ('../includes/header.php');
?>
<body>
    <div id="content">
    <h1>Product Discount Calculator</h1>
    
    <form action="display_discount.php" method="GET">
      
      <div id="data">
       <label for="product_discription"> Product Discription</label>
    
       <input type="text" name="Product">
      <br>
       <label for="list_price">List Price</label>     
       <input type="text" name="list_price">
       <br>
       <label for="discount_percent">Discount Percent</label>
       <input type="text" name="discount">%
       <br>

      <label for="product_discription">&nbsp;</label>
       <input type="submit" name="submit" value="calculate discount"> 
       </div>
        
    </form>
    </div>
    
    
</body>
</html>