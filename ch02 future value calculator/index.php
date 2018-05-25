<?php 
include ('../includes/header.php');

if(isset($_GET['error'])){
$error = $_GET['error'];
}
?>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>

    <p id="error"><?php if(!empty($error)){ echo $error;}?></p>

     <form action="future_investment.php" method="POST">

        <div id="data">
            <label for="investment_amount">Investment Amount:</label>
            <input type="text" name="investment" value="<?php if(!empty($investment)){echo $investment;}else{echo '';}?>">
                <br>
            <label for="list_price">Yearly Interest Rate:</label>     
            <input type="text" name="interest_rate" value="<?php if(!empty($interest_rate)){echo $interest_rate;}else{echo '';}?>">
                <br>
            <label for="discount_percent">Number of Years:</label>
            <input type="text" name="years" value="<?php if(!empty($years)){echo $years;}else{echo '';}?>">
                <br>
            <label for="product_discription">&nbsp;</label>
            <input type="submit" name="submit" value="Calculate"> 
        </div>

     </form>
</div>
    
</body>
</html>