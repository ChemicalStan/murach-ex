<?php
$user = 'root';
$pass = '';

//try{
//$db = new PDO('mysql:host=localhost;dbname=cms',$user,$pass);
//    foreach($db->query('SELECT * FROM posts') as $row){
//    print_r($row);
//    }
//}
//
//catch(){}

//$name['first_name'] = 'stanley';
//foreach ($name as $key=>$value){
//define($key,$value);
//}
//echo first_name . '<br>';
//
//
//echo number_format(1234.567, 2) . '<br>';
//
//$date = date('d M, Y');
//echo $date;

    $message = 1;
while ($message <= 5){
    echo $message . '|';
    $message++;
}
echo "<br>";

for ($i=1; $i<=5; $i++){

echo $i . '|';
}




function test($number){
if ($number == 2){
echo 'yes';
}else{
echo 'no';
}
    


}

echo '<br>';
$a = 2;
$b = 3;
echo ($a === $b) ? 'yes' : 'no';









