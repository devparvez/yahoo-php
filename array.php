<?php
/*
//======array_merge for index array========//
$fruit = ['apple','mango','banana','orange'];

$veggi =['carrot','pea'];
$color =['red','green'];

$newArray=array_merge($fruit,$veggi,$color);

echo "<pre>";

print_r($newArray);

echo "</pre>";
*/
//======array_merge for associative with index array========//
/*
$fruit = ['a' => 'apple','b' =>'mango','c' =>'banana','d' =>'orange'];

$veggi =['carrot','pea'];
$color =['red','green'];

$newArray=array_merge($fruit,$veggi,$color);

echo "<pre>";

print_r($newArray);

echo "</pre>";
*/

//======array_merge for associative with associative array========//

/*
$fruit = ['a' => 'apple','b' =>'mango','c' =>'banana','d' =>'orange'];

$veggi =[ 'b' => 'carrot','f' => 'pea'];

$color =['h'=>'red', 'i' => 'green'];

//$newArray=array_merge($fruit,$veggi,$color);
$newArray = $fruit + $veggi + $color;

echo "<pre>";

print_r($newArray);

echo "</pre>";
*/

//======array_merge_recursive for associative with index array========//

//$fruit = ['a' => 'apple','b' =>'mango','c' =>'banana','d' =>'orange'];

//$veggi =[ 'b' => ['color' => ['red','green','blue']],

//'e' => 'pea',55,68];



//$newArray=array_merge_recursive($fruit,$veggi);

//$newArray = $fruit + $veggi + $color;

//echo "<pre>";

//print_r($newArray);

//echo "</pre>";
//======array combine=========

$name=['mohon','lal','fazil'];

$age=[25,22,24];



$newArray=array_combine($name,$age);



echo "<pre>";

print_r($newArray);

echo "</pre>";










?>