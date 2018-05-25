<?php 
    if(isset($_GET['submit'])){

    $product = $_GET['Product'];
    $list_price = $_GET['list_price'];
    $discount = $_GET['discount'];

        
?>
<!--
 <script src="main.js">
    check($list_price);   
    check($discount);    
     document.write(answer);
</script>      
       
       
-->
<?php
        
    $discount_amount = $discount * $list_price / 100;   
    $discount_price = $list_price - $discount_amount;
    $discount_amount_formatted ="$" . number_format($discount_amount) ;
    $discount_price_formatted = "$" . number_format($discount_price) ;
     
        
        
 ?>
   
<html lang="en">
<head>
   <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <title>Discount Calculator</title>
</head>
<body>
   <div id="content">
     
    <h1>Product Discount Calculator</h1>
      <div id="data">
 <div id="data">
     <span> <label for="product_discription"> Product Discription : </label><?php echo $product;?></span>
      <br>
    <span><label for="list_price">List Price : </label><?php echo '$' . $list_price;?></span>        
       <br>
    <span><label for="list_price">Discount Amount : </label><?php echo $discount_amount_formatted;?></span>
    <br>
    <apan><label> Discount Price : </label> <?php echo $discount_price_formatted;?> </apan>
       <br>

      <label for="product_discription">&nbsp;</label>
       </div>
      
      </div> 
   </div>
    
</body>
</html>
<?php
 }else {
    echo "<h1>Please Input Datas!</h1>
";
        echo "<a href='index.php?status=success'>Click here to go back!</a>";
    }
    
    
    
?>
