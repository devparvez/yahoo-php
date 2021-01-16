<?php  
//for each loop for array and last two classes of array saved in function.php

/*
$colors = [
	"red",
	"green",
	"blue"
];
foreach($colors as $value){
	echo $value."<br>";
}

//foreach loop for associative array

$age = [
	"bill" => 25,
	"gates" => 22,
	"steve" => 20

];
foreach($age as $value){

	echo $value."<br>";
}
*/
//if we want to print values with keys

$age = [

	"bill" => 25,
	"gates" => 22,
	"steve" => 20

];
foreach($age as $key => $value){
	"echo <ul>";

	echo "<li> $key = $value </li>";

	"echo </ul>";
}

?>