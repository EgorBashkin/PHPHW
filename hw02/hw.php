
<!-- Задание №1-->

<?php

$a = 5;
$b = -2;

if ($a >= 0 && $b >= 0){

    var_dump($a - $b);
}
  

else if ($a < 0 && $b < 0){
    var_dump($a * $b);

}


else if ($a < 0 && $b > 0 || $a > 0 && $b < 0){
    var_dump($a + $b);
}
    

?>

<!-- Задание №2-->

<?php 

$a = 11;

switch($a){

    case 1:
        echo 1;
    case 2:
        echo 2;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5;
    case 6:
        echo 6;
    case 7:
        echo 7;
    case 8: 
        echo 8;
    case 9: 
        echo 9;
    case 10: 
        echo 10;
    case 11: 
        echo 11;
    case 12: 
        echo 12;
    case 13: 
        echo 13;
    case 14:
        echo 14;
    case 15:  
        echo 15;  

}

?>



<!-- Задание №3-->

<?php 

function sum ($a, $b){

return $a + $b;

}

function subtraction ($d, $e){

    return $d - $e;
};

function division ($f, $g){

    return $f / $g;
}


function multiplying ($x, $y){
    return $x * $y;
}

echo sum(45, 12);
echo subtraction (99, 70);
echo division (80, 40);
echo multiplying (2, 5);
?>


<!-- Задание №4-->

<?php 
function result ($arg1, $arg2, $operation){

if ($operation == 'sum'){
    return $arg1 + $arg2;
}

else if ($operation == 'subtraction'){
    return $arg1 - $arg2;
}


else if ($operation == 'division'){
    return $arg1 / $arg2;
}


else if ($operation == 'multiplying'){
    return $arg1 * $arg2;
}



}

echo result (45, 5, 'sum');

?>



<!-- Задание №5-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header><h2>Header</h2></header>
<body>

<h2>Body</h2>
    

<footer>
  <span>Footer</span>  
<?php echo date('Y'); ?>

</footer>

</body>
</html>


<!-- Задание №6-->

<?php 

function exponentiation ($val, $pow){
   
    if($pow == 0){
        return 1;
    }


    else if ($pow > 0 ){
        return $val * exponentiation ($val, $pow - 1);
    }


}

echo exponentiation (5, 5)


?>


<!-- Задание №7-->


<?php 

$H = date('H');
$M = date('i');


if ($H == 1 || $H == 21){
$hours = " час";

}

else if ($H == 2 || $H == 3 || $H == 4 || $H == 22 || $H == 23 || $H == 24){

    $hours = " часа";
    
}

else {
    $hours = " часов";
    
}


if (($M<20) || ($M>10))
{$minutes = " минут.";}
elseif (($M % 10) === 1) {
$minutes = " минута.";}
elseif ((($M % 10)>=2) && (($M % 10)<=4)) {
$minutes = " минуты.";}
else {
$minutes = " минут.";}

echo $H . $hours . " " . $M . $minutes;


?>

 
