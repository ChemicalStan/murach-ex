<?php
include("../includes/header.php");
if (isset($_POST['submit'])){
//    Assigment of names to variables
    $investment = $_POST['investment'];
    $interest_rate = $_POST['interest_rate'];
    $years = $_POST['years'];

//    Display errors
    if(empty($investment || $interest_rate || $years)){
        $error = 'Field Should not be empty!';
        }elseif(!is_numeric($investment) || !is_numeric($interest_rate) || !is_numeric($years)){
        $error = 'Numbers Must Be Valid!';
        }else{
        $error = null;
        }
    if(!empty($error)){
    header("Location: index.php?error=$error");
    }else{ //calculation
        $future_value = $interest_rate;
        for($i = 1; $i <= $years; $i++){
        $future_value = ($future_value + ($future_value * $interest_rate * .01));
            // currency formatting.
            
            $investment_f = '$'.number_format($investment, 2);
            $yearly_rate_f = $interest_rate.'%';
            $future_value_f = '$'.number_format($future_value, 2);
            
        }  // loop end
        ?>   

<body>
           <div id="content">
       <h1>Future Value Calculator</h1>
      <div id="data">
        
        <span><label for="Investment_Amount">Investment Amount: </label><?php echo $investment_f;?></span>
        <br>
        
        <span><label for="">Yearly Interest Rate: </label><?php echo $yearly_rate_f;?></span>
        <br>
        
        <span><label for="">Number of Years: </label><?php echo $years;?></span>
        <br>
        
        <span><label for="">Future Value: </label><?php echo $future_value_f;?></span>
        </div>
        
    </div>
</body>

<?php
        
    } // calculation end 
        
}else{
include"index.php";
}
?>